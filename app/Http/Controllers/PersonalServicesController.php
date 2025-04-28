<?php

namespace App\Http\Controllers;

use App\Models\PersonalServices;
use Illuminate\Http\Request;

class PersonalServicesController extends Controller
{
    public function getPersonalServicesbyUserId($userId){
        $user = auth()->user()->load('personalServices');
        return view('users/profile', compact('user'));
    }

    public function store(Request $request){
 
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:750',
            'credit_cost' =>'required|numeric|min:0',
            'user_id' => 'required|exists:users,id',
        ]);

        
        $services = PersonalServices::create([
            'name' => $request->name,
            'description' => $request->description,
            'credut_cost' => $request->credit_cost,
            'user_id' => auth()->id(),
        ]);

        return view('users/profile', compact('services'));

    }
}
