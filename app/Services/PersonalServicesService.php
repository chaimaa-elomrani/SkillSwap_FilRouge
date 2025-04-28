<?php 

namespace App\Services;
use App\Models\PersonalServices;
use App\Models\User;
use Request;

class PersonalServicesService{


    // public function storePersonalServices(Request $request){
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'description' => 'required|string|max:750',
    //         'credit_cost' =>'required|numeric|min:0',
    //     ]);
    //     $user = auth()->user();
    //     PersonalServices::create([
    //         'name' => $request->name,
    //         'description' => $request->description,
    //         'credit_cost' => $request->credit_cost,
    //         'user_id' => auth()->id(),
    //     ]);
    //     $user = auth()->user()->load('personalServices');
        
    //     return ['success' => true, 'message' => 'Service created successfully!', 'user' => $user];
    // }
}