<?php

namespace App\Http\Controllers;

use App\Services\DomainsService;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    protected $domainService;
    protected $postService;

    public function __construct(PostService $postService , DomainsService $domainService){
        $this->domainService = $domainService;
        $this->postService = $postService;

    }

    public function index(DomainsService $domainService){
        return view('users/posts');   
    }


    public function show(){
        $this->postService->getAllPosts();
        return view('users/posts', compact('posts'));
    }









    // public function createPost(DomainsService $domainService){
    //     $domains = $domainService->getDomains();
    //     return view('users/createPost', compact('domains'));
       
    // }



   
}
