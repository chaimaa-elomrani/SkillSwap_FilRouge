<?php
namespace App\Services;
use App\Models\Posts;
use App\Models\Requests;
use App\Models\Transactions;
use App\Models\UserCredit;
use App\Models\UserCredits;
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
            return false; // Already confirmed, prevent double-crediting
        }

        $creditCost = $request->post->credit_cost;
        $requester = $request->user;

        //anchoufo wach the  user has credits  in the table ila makanouch ghancreeriyiw a new one (record)
        $postOwnerCredits = UserCredits::firstOrCreate([
            'user_id' => $user->id, 
            'credits' => 0 , 
        ]);
        
        $requesterCredits = UserCredits::firstOrCreate([
            'user_id' => $requester->id,
            'credits' => 0 ,
        ]);

        //checking wach the post owner 3endo enought credits bach ykheles bihoum the requester
        if($postOwnerCredits->credits < $creditCost){
            return false;
        }

        // incrementing for the requester and decrementing for the post owner
        $postOwnerCredits->credits -= $creditCost;
        $requesterCredits->credits += $creditCost;

        // save changes 
        $postOwnerCredits->save();
        $requesterCredits->save();

        
        $request->confirmed = true;
        $request->created_at = now();
        $request->save(); 
        
        $this->createTransactionRecord($user->id , $request->post_id , $creditCost , 'Service Payment');
        $this->createTransactionRecord($requester->id , $request->post_id , $creditCost , 'Service earnings');
        return true;
    });
    
    }



    // create transaction record function
     public function createTransactionRecord($userId, $postId, $amount, $description){
        $transaction = new Transactions();
        $transaction->user_id = $userId;
        $transaction->post_id = $postId;
        $transaction->amount = $amount;
        $transaction->description = $description;
        $transaction->save();
     }


     public function getPendingRequests(){
        $user = Auth::user();

        if(!$user){
            return collect(); // Return empty collection if user is not authenticated
        }

        return Posts::where('user_id', $user->id)->whereHas('requests', function($query){
            $query->where('status', 'accepted')->where('confirmed' , false);
        })->with(['requests'=> function($query){
            $query->where('status', 'accepted')->where('confirmed' , false)->with('user.profile');
        }])->latest()->get();
     }

}
