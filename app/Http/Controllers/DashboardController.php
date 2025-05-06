<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use App\Models\Posts;
use App\Models\Skills;
use App\Models\Transactions;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index()
{
    // Get user's transactions
    $transactions = Transactions::where('user_id', auth()->id())->with('post')->latest()->get();
    
    // Get pending services
    $pendingServices = Posts::whereHas('requests', function($query) {
        $query->where('status', 'pending');
    })->with('requests.user')->get();
    
    
    $activityData = [
        'months' => ['January', 'February', 'March', 'April', 'May', 'June'],
        'provided' => [5, 8, 12, 9, 14, 16], 
        'received' => [3, 5, 7, 8, 6, 10]    
    ];
    
    $creditsData = [
        'earned' => 350,  
        'spent' => 220,   
        'available' => 130
    ];
    
    return view('users.dashboard', compact('transactions', 'pendingServices', 'activityData', 'creditsData'));
}

}
