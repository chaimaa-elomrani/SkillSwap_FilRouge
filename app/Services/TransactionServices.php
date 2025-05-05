<?php
namespace App\Services;
use App\Models\Posts;
use App\Models\Requests;
use App\Models\Transactions;
use App\Models\UserCredit;
use App\Models\UserCredits;
use DB;
use Illuminate\Support\Facades\Auth;


class TransactionServices{



    public function show(){
        $user = Auth::user();
        if (!$user) {
            return collect(); 
        }
        
        $transactions = Transactions::where('user_id', $user->id)->latest()->get();
         return $transactions;
    }


    public function getPendingServices(){
        $user = Auth::user();

        if (!$user) {
            return collect(); 
        }

        return Posts::where('user_id', $user->id)->whereHas('requests', function($query){
            $query->where('status', 'accepted')->where('confirmed', false);
        })->with(['requests'=> function($query){
            $query->where('status', 'accepted')->where('confirmed', false)->with('user.profile');
        }])->latest()->get();
    }



    public function confirmServiceCompletion($requestId){

        return DB::transaction(function() use ($requestId){

            $user = Auth::user();

        if(!$user){
            return false;
        }

        $request = Requests::with(['post' , 'user'])->findOrFail($requestId);

        if($request->post->user_id !== $user->id){
            return false; 
        }

        if ($request->confirmed) {
            return false; 
        }

        $creditCost = $request->post->credit_cost;
        $requester = $request->user;

        $postOwnerCredits = UserCredits::firstOrCreate([
            'user_id' => $user->id, 
            'credits' => 0 , 
        ]);
        
        $requesterCredits = UserCredits::firstOrCreate([
            'user_id' => $requester->id,
            'credits' => 0 ,
        ]);

        if($postOwnerCredits->credits < $creditCost){
            return false;
        }

        $postOwnerCredits->credits -= $creditCost;
        $requesterCredits->credits += $creditCost;

        $postOwnerCredits->save();
        $requesterCredits->save();

        
        $request->confirmed = true;
        $request->created_at = now();
        $request->save(); 
        
        $this->createTransactionRecord($user->id , $request->post_id , $creditCost);
        $this->createTransactionRecord($requester->id , $request->post_id , $creditCost);
        return true;
    });
    
    }



  
     public function createTransactionRecord($userId, $postId, $amount){
        $transaction = new Transactions();
        $transaction->user_id = $userId;
        $transaction->post_id = $postId;
        $transaction->amount = $amount;
        $transaction->save();
     }


     public function getPendingServicesToConfirm(){
        $user = Auth::user();

        if(!$user){
            return collect();
        }

        return Posts::where('user_id', $user->id)->whereHas('requests', function($query){
            $query->where('status', 'accepted')->where('confirmed' , false);
        })->with(['requests'=> function($query){
            $query->where('status', 'accepted')->where('confirmed' , false)->with('user.profile');
        }])->latest()->get();
     }

}
