<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use App\Services\DomainsService;
use App\Services\PostService;
use Auth;
use Illuminate\Http\Request;

class PostsController extends Controller
{


    protected $postService;
    protected $domainService;

    public function __construct(PostService $postService , DomainsService $domainsService){
        // $this->domainService = $domainService;
        $this->postService = $postService;
        $this->domainService = $domainsService;

    }

    // public function index(DomainsService $domainService){
    //     return view('users/posts');   
    // }


    public function show(){
       $posts = $this->postService->getAllPosts();
       $domains = $this->domainService->getDomains();
       $request =  null ; 
       if(Auth::check()){
            $request = Auth::user()->pendingRequests()->with(['sender', 'sender.profile', 'post'])->latest->get();
       }
        return view('users/posts', compact('posts' , 'requests' , 'domains'));
    }


    public function createPost(DomainsService $domainService){
        $domains = $domainService->getDomains();
        return view('users/createPost', compact('domains'));
       
    }

    public function getPostByUserId($userId){
        $posts = Posts::with('user.profile')->latest()->get();
        return view('users/profile', compact('user'));
    }


   
}
