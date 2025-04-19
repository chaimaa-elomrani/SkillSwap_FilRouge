<?php

namespace App\Http\Controllers;

use App\Services\DomainsService;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    protected $domainService;

    public function __construct(DomainsService $domainService){
        $this->domainService = $domainService;
    }

    public function index(DomainsService $domainService){
        return view('users/posts');   
    }
    
    public function createPost(DomainsService $domainService){
        $domains = $domainService->getDomains();
        return view('users/createPost', compact('domains'));
       
    }
   
}
