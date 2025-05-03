<?php
namespace App\Services;
use App\Models\Posts;
use App\Models\Requests;
use App\Models\Transactions;
use App\Models\UserCredit;
use Illuminate\Support\Facades\Auth;


class TransactionServices{



    public function show(){
        $user = Auth::user();
        if (!$user) {
            return collect(); // Return empty collection if user is not authenticated
        }
        
        $transactions = Transactions::where('user_id', $user->id)->latest()->get();
         return $transactions;
    }


    public function getPendingServices(){
        $user = Auth::user();

        if (!$user) {
            return collect(); // Return empty collection if user is not authenticated
        }

        return Posts::where('user_id', $user->id)->whereHas('requests', function($query){
            $query->where('status', 'accepted')->where('confirmed', false);
        })->with(['requests'=> function($query){
            $query->where('status', 'accepted')->where('confirmed', false)->with('user.profile');
        }])->latest()->get();
    }



    public function confirmService($requestId){
        $user = Auth::user();

        if(!$user){
            return false;
        }

        $request = Requests::findOrFail($requestId);

        if($request->post->user_id !== $user->id){
            return false; 
        }

        $request->confirmed = true;
        $request->created_at = now();
        $request->save(); 

        // ghanzid hna logic diyal credits transaction

        return true; 
    }

}

