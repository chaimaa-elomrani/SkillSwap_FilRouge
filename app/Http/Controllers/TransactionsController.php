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
    }


    public function index(){
        $pendingServices = $this->transactionService->getPendingServices();
        $transactions = $this ->transactionService->show();

        return view('users/dashboard', [
            'transactions' => $transactions,
            'pendingServices' => $pendingServices,
        ]);
    }

    
    public function confirmService(Request $request , $requestId){
        $result = $this->transactionService->confirmService($requestId);

        if(!$result){
            return redirect()->back()->with('error', 'error in the function confirmeService in the controller');

        }else{
            return redirect()->back()->with('success', 'Service confirmed successfully');
        }

    }

    

}
