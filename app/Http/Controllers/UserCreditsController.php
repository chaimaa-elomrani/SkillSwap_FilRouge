<?php

namespace App\Http\Controllers;

use App\Models\UserCredits;
use Illuminate\Http\Request;

class UserCreditsController extends Controller
{
    
    protected $userService; 

    public function __construct(UserCredits $userService){
        $this->userService = $userService;
    }

    
    public function index($userId){
        $this->userService->getUserCredits($userId);
        return response()->json([
            'status' => 'success',
            'data' => $this->userService
        ]);
    }
}
