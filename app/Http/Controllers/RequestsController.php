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

    /**
     * Update request status (accept/reject)
     */
    public function updateRequestStatus(Request $request, $id)
    {
        try {






            // Validate the input
            $status = $request->input('status');
            
            if (!in_array($status, ['accepted', 'declined'])) {

                return response()->json(['error' => 'Invalid status'], 400);
            }
            
            // Get the authenticated user
            $user = auth()->user();
            



















            // Update the request status
            $updated = DB::table('requests')
                ->where('id', $id)
                ->where('receiver_id', $user->id)
                ->update(['status' => $status]);
            





            if (!$updated) {
                return response()->json(['error' => 'Request not found or not authorized'], 404);
            }
            
            // After updating the request status
            \Log::info('Request status updated', [
                'request_id' => $id,
                'new_status' => $status,
                'updated' => $updated
            ]);

            // You can also log the request after update to verify
            $updatedRequest = DB::table('requests')->where('id', $id)->first();
            \Log::info('Updated request', ['request' => $updatedRequest]);

            return response()->json([
                'success' => true,
                'message' => $status === 'accepted' ? 'Request accepted successfully' : 'Request declined'
            ]);
        } catch (\Exception $e) {





            \Log::error('Error updating request: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to update request'], 500);
        }
    }
}
