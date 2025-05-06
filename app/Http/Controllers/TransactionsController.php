<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use App\Services\TransactionServices;
use Auth;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    
    protected $transactionService; 

    public function __construct(TransactionServices $transactionServices){
        $this->transactionService = $transactionServices;
        // $this->middleware('auth');
    }


    public function index(){
        $pendingServices = $this->transactionService->getPendingServices();
        $transactions = $this ->transactionService->show();

        return view('users/dashboard', [
            'transactions' => $transactions,
            'pendingServices' => $pendingServices,
        ]);
    }

    


    public function confirmCompletion($requestId){
        $result = $this->transactionService->confirmServiceCompletion($requestId);
        if ($result) {
            return redirect()->back()->with('success', 'Service confirmed and credits transferred successfully!');
        } else {
            return redirect()->back()->with('error', 'Unable to confirm service. Please check if you have enough credits.');
        }
    }

    



}
