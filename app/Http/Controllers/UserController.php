<?php

namespace App\Http\Controllers;

use App\Models\UserCredits;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    protected $userService; 

    public function __construct(UserCredits $userService){
        $this->userService = $userService;
    }

    
    // public function getUserCredits($userId)
}
