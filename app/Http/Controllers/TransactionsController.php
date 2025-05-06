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

    

    public function adminIndex()
{
    // Get all transactions with user information
    $transactions = Transactions::with('user')->latest()->paginate(10);
    
    // Get statistics for the cards
    $stats = [
        'total' => Transactions::count(),
        'credit_purchases' => Transactions::where('type', 'Credit Purchase')->count(),
        'service_exchanges' => Transactions::where('type', 'Service Exchange')->count(),
        'refunds' => Transactions::where('status', 'Refunded')->count(),
    ];
    
    // Calculate total amount for credit purchases
    $creditPurchasesAmount = Transactions::where('type', 'Credit Purchase')
        ->sum('amount');
    
    // Calculate refund amount
    $refundsAmount = Transactions::where('status', 'Refunded')
        ->sum('amount');
    
    // Get monthly transaction data for charts
    $monthlyData = $this->getMonthlyTransactionData();
    
    // Get transaction types data for pie chart
    $transactionTypes = $this->getTransactionTypesData();
    
    return view('admin.transactionsAdmin', compact(
        'transactions', 
        'stats', 
        'creditPurchasesAmount', 
        'refundsAmount',
        'monthlyData',
        'transactionTypes'
    ));
}

private function getMonthlyTransactionData()
{
    // Get transaction counts for the last 14 days
    $data = [];
    $labels = [];
    
    for ($i = 13; $i >= 0; $i--) {
        $date = now()->subDays($i)->format('j M');
        $count = Transactions::whereDate('created_at', now()->subDays($i))->count();
        
        $labels[] = $date;
        $data[] = $count;
    }
    
    return [
        'labels' => $labels,
        'data' => $data
    ];
}

private function getTransactionTypesData()
{
    // Get counts by transaction type
    $creditPurchases = Transactions::where('type', 'Credit Purchase')->count();
    $serviceExchanges = Transactions::where('type', 'Service Exchange')->count();
    $premiumSubscriptions = Transactions::where('type', 'Premium Subscription')->count();
    $refunds = Transactions::where('status', 'Refunded')->count();
    
    return [
        'labels' => ['Credit Purchases', 'Service Exchanges', 'Premium Subscriptions', 'Refunds'],
        'data' => [$creditPurchases, $serviceExchanges, $premiumSubscriptions, $refunds]
    ];
}


}
