<?php

namespace App\Http\Controllers;

use App\Services\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profileService;
    public function __construct(ProfileService $profileService){
        $this->profileService = $profileService;
    }


    
    public function index(){
        return view('users/profile');
    }

    public function show(){
        return view('users/profileForm');
    }


    // public function store(Request $request)
    // {
    //     try {
    //         $this->profileService->create($request);
    //         return redirect()->back()->with('success', 'Profile created!');
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', $e->getMessage());
    //     }
    // }

    // public funct
    
    

}


    

