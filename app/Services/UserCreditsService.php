<?php

namespace App\Services;
use App\Models\User;
use App\Models\UserCredits;
use Auth;


class UserCreditsService
{
    public function getUserCredits($userId)
    {
        $userCredit =UserCredits::where('user_id', $userId)->first();
        return $userCredit ;
    }

 

}