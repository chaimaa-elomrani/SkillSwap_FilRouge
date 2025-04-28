<?php

namespace App\Http\Controllers;

use App\Models\PersonalServices;
use Illuminate\Http\Request;

class PersonalServicesController extends Controller
{

    protected $ServicesService;

    public function __construct(){
        $this->ServicesService = new PersonalServices();
    }

    public function getPersonalServicesbyUserId($userId)
    {
        $user = auth()->user()->load('personalServices');
        return view('users/profile', compact('user'));
    }


    // public function  store(){
    //     $services = $this->ServicesService->storePersonalServices();
    //     return view('users/profile', compact('services'));
    // }

    // public function store(Request $request){

    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'description' => 'required|string|max:750',
    //         'credit_cost' =>'required|numeric|min:0',
    //     ]);

    //     dd($request);
    //     $services = PersonalServices::create([
    //         'name' => $request->name,
    //         'description' => $request->description,
    //         'credit_cost' => $request->credit_cost,
    //         'user_id' => auth()->id(),
    //     ]);
    //     dd($services);

    //     $user = auth()->user()->load('personalServices');
    //     return redirect()->route('profile')->with('success', 'Service created successfully!');

    // }
}
