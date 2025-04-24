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


    public function store(Request $request){
        $this->profileService->create($request);
        return view('users/profile');
    }
    

}


    

