<?php

namespace App\Http\Controllers;

// use App\Models\UserCredits;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

use App\Services\UserCreditsService;
class UserCreditsController extends Controller
{
    
    protected $userService; 

    public function __construct(UserCreditsService $userService){
        $this->userService = $userService;
    }
    
  
 

}
