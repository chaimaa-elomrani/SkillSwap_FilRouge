<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Services\DomainsService;
use App\Services\ProfileService;
use App\Services\SkillService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profileService;
    protected $domainService;


    public function __construct(ProfileService $profileService , DomainsService $domainService , SkillService $skillService){
        $this->profileService = $profileService;
        $this->domainService = $domainService;
        $this->skillService = $skillService;
    }

    public function show(){
        $userId = auth()->user()->id;
        $profile = Profile::where('user_id', $userId)->firstOrFail();
        $skills = $this->skillService->getSkillsByUserId($userId);
        return view('users/profile' , compact('profile'));
    }

    
    public function index(){
        $domains = $this->domainService->getDomains();
        return view('users/profileForm', compact('domains'));
    }

    


    public function store(Request $request){
        $result = $this->profileService->storeProfile($request); 
        return $result;
    }
    

}


    

