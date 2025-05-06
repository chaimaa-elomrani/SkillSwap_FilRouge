<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\User;
use App\Services\DomainsService;
use App\Services\PostService;
use App\Services\ProfileService;
use App\Services\UserCreditsService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profileService;
    protected $domainService;

    protected $postService;

    protected $userCreditsService;


    public function __construct(ProfileService $profileService , DomainsService $domainService, PostService $postService , UserCreditsService $userCreditsService){
        $this->profileService = $profileService;
        $this->domainService = $domainService;
        $this->postService = $postService;
        $this->userCreditsService = $userCreditsService;
    }

    public function show(){
        $userId = auth()->user()->id;
        $posts = $this->postService->getPostByUser($userId);  
        $credits = $this->userCreditsService->getUserCredits($userId);
        $profile = Profile::where('user_id', $userId)->firstOrFail();
        $profile['email'] = auth()->user()->email;
        return view('users/profile' , compact('profile', 'posts', 'credits'));
    }

    // public function userProfile(string $id){
    //     $posts = $this->postService->getPostByUser($id);  
    //     $profile = Profile::where('user_id', $id)->firstOrFail();
    //     $profile['email'] = auth()->user()->email;
    //     return redirect()->route('profile.user' , compact('profile', 'posts'));
    // }

    public function userProfile($id)
{
    $posts = $this->postService->getPostByUser($id);  

    $user = User::findOrFail($id);
    $profile = $user->profile;
    return view('users.profile', compact('profile', 'user' , 'posts'));
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


    

