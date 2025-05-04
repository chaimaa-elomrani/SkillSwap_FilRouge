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

    // public function addCredits($userId, $amount)
    // {
    //     $userCredits = $this->getUserCredits($userId);
    //     if ($userCredits) {
    //         $userCredits->credits += $amount;
    //         $userCredits->save();
    //     } else {
    //         UserCredits::create([
    //             'user_id' => $userId,
    //             'credits' => $amount,
    //         ]);
    //     }
    // }

    // public function deductCredits($userId, $amount)
    // {
    //     $userCredits = $this->getUserCredits($userId);
    //     if ($userCredits && $userCredits->credits >= $amount) {
    //         $userCredits->credits -= $amount;
    //         $userCredits->save();
    //         return true;
    //     }
    //     return false;
    // }


}