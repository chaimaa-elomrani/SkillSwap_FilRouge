<?php

namespace App\Http\Controllers;
use App\Models\Request as RequestModel;
use App\Models\Requests;
use App\Services\RequestService;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    
   protected $requestService;

   public function __construct(RequestService $requestService){
        $this->requestService = $requestService;
    }

    public function getRequests()
    {
        try {
            // Get authenticated user
            $user = auth()->user();
            
            if (!$user) {
                return response()->json(['error' => 'Unauthenticated'], 401);
            }
            
            // Get requests with sender information including profile data
            $requests = \DB::table('requests')
                ->where('requests.receiver_id', $user->id)
                ->join('users', 'requests.sender_id', '=', 'users.id')
                ->leftJoin('profiles', 'users.id', '=', 'profiles.user_id') // Assuming you have a profiles table
                ->select(
                    'requests.id',
                    'requests.sender_id',
                    'requests.receiver_id',
                    'requests.status',
                    'requests.created_at',
                    'requests.updated_at',
                    'users.name as sender_name',
                    'profiles.title as sender_title' // Assuming title is stored in profiles table
                )
                ->get();
            
            return response()->json($requests);
        } catch (\Exception $e) {
            \Log::error('Error fetching requests: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
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
}
