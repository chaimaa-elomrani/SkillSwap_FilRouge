<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\DomainsService;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostsController extends Controller
{


    protected $postService;

    public function __construct(PostService $postService){
        // $this->domainService = $domainService;
        $this->postService = $postService;

    }

    // public function index(DomainsService $domainService){
    //     return view('users/posts');   
    // }


    public function show(){
       $posts = $this->postService->getAllPosts();
        return view('users/posts', compact('posts'));
    }


    public function createPost(DomainsService $domainService){
        $domains = $domainService->getDomains();
        return view('users/createPost', compact('domains'));
       
    }

    public function getPostByUserId($userId){
        $user = auth()->user()->load('posts');
        return view('users/posts', compact('user'));
    }


   
}
