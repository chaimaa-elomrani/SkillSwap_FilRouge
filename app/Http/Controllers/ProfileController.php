<?php

namespace App\Http\Controllers;
use App\Services\DomainsService;
use App\Services\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profileService;
    protected $domainService;


    public function __construct(ProfileService $profileService , DomainsService $domainService){
        $this->profileService = $profileService;
        $this->domainService = $domainService;

    }


    
    public function index(){
        $domains = $this->domainService->getDomains();
        return view('users/profileForm', compact('domains'));
    }

    // public function show(){

    //     return view('users/profileForm');
    // }


    public function store(Request $request){
        $result = $this->profileService->storeProfile($request); 
        return $result;
    }
    

}


    

