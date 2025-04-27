<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalServicesController extends Controller
{
    public function getPersonalServicesbyUserId($userId){
        $user = auth()->user()->load('personalServices');
        return view('users/profile', compact('user'));
    }
}
