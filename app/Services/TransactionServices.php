<?php
namespace App\Services;
use App\Models\Posts;
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

}

