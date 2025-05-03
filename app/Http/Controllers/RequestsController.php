<?php

namespace App\Http\Controllers;
use App\Models\Request as RequestModel;
use App\Models\Requests; 
use App\Services\RequestService;
use DB;
use Illuminate\Http\Request;
use Log;

class RequestsController extends Controller
{
    
   protected $requestService;

   public function __construct(RequestService $requestService){
        $this->requestService = $requestService;
    }

    public function getRequests()
    {
        try {
            $user = auth()->user();
            
            if (!$user) {
                return response()->json([], 401);
            }
            
            // Get ONLY PENDING requests with sender information
            $requests = DB::table('requests')
                ->where('requests.receiver_id', $user->id)
                ->where('requests.status', 'pending') // Only get pending requests
                ->join('users', 'requests.sender_id', '=', 'users.id')
                ->leftJoin('profiles', 'users.id', '=', 'profiles.user_id')
                ->select(
                    'requests.id',
                    'requests.status',
                    'requests.created_at',
                    'users.name as sender_name',
                    'profiles.title as sender_title',
                    'profiles.image as sender_image'
                )
                ->get();
            
            // Transform the data to include full image URL if needed
            $requests = $requests->map(function($request) {
                // Convert the stdClass object to an array
                $requestArray = (array) $request;
                
                // Add the full image URL if image exists, otherwise use default
                if (!empty($request->sender_image)) {
                    $requestArray['sender_image_url'] = asset('storage/' . $request->sender_image);
                } else {
                    $requestArray['sender_image_url'] = asset('images/profile.png');
                }
                
                return $requestArray;
            });
            
            return response()->json($requests);
        } catch (\Exception $e) {
            Log::error('Error fetching requests: ' . $e->getMessage());
            return response()->json([], 500);
        }
    }


    public function accept($id){
        $request =Request::where('id', $id)->update(['status' => 'accepted']);
        if(!$request){
            return response()->json(['message' => 'Error in controller method'], 404);
        }
    }

    public function reject($id){
        $request =Request::where('id', $id)->update(['status' => 'declined']);
        if(!$request){
            return response()->json(['message' => 'Error in controller method'], 404);
        }
    }


    public function sendRequest(Request $request)
    {
        try {
            // Validate the input
            $request->validate([
                'post_id' => 'required|exists:posts,id',
            ]);
            
            $postId = $request->post_id;
            $post = DB::table('posts')->where('id', $postId)->first();
            
            if (!$post) {
                return response()->json(['error' => 'Post not found'], 404);
            }
            
            $senderId = auth()->id();
            $receiverId = $post->user_id;
            
            // Don't allow sending request to yourself
            if ($senderId == $receiverId) {
                return response()->json(['error' => 'Cannot send request to yourself'], 400);
            }
            
            // Check if a request already exists
            $existingRequest = DB::table('requests')
                ->where('sender_id', $senderId)
                ->where('receiver_id', $receiverId)
                ->where('post_id', $postId)
                ->whereIn('status', ['pending', 'accepted', 'declined'])
                ->first();
                
            if ($existingRequest) {
                return response()->json(['error' => 'Request already exists'], 400);
            }
            
            // Create the request
            $this->requestService->sendRequest($senderId, $receiverId, $postId);
            
            return response()->json([
                'success' => true,
                'message' => 'Collaboration request sent successfully',
                'data' => []
            ]);
        } catch (\Exception $e) {
            Log::error('Error sending request: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to send request: ' . $e->getMessage()], 500);
        }
    }


    public function store(Request $request)
{
    // Validate the request
    $validated = $request->validate([
        'post_id' => 'required|exists:posts,id',
    ]);
    
    try {
        // Create the request record
        $collaborationRequest = Requests::create([
            'sender_id' => auth()->id(),
            'post_id' => $validated['post_id'],
            'status' => 'pending',
        ]);
        
        return response()->json([
            'success' => true,
            'message' => 'Request sent successfully!',
            'request_id' => $collaborationRequest->id
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'error' => 'Failed to send request: ' . $e->getMessage()
        ], 500);
    }
}




}

