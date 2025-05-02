<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\User;
use App\Services\DomainsService;
use App\Services\PostService;
use App\Services\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profileService;
    protected $domainService;

    protected $postService;


    public function __construct(ProfileService $profileService , DomainsService $domainService, PostService $postService){
        $this->profileService = $profileService;
        $this->domainService = $domainService;
        $this->postService = $postService;
    }

    public function show(){
        $userId = auth()->user()->id;
        $posts = $this->postService->getPostByUser($userId);  
        $profile = Profile::where('user_id', $userId)->firstOrFail();
        $profile['email'] = auth()->user()->email;
        $isOwnProfile = true;
        dd($posts);
        return view('users/profile' , compact('profile', 'posts'));
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


    

