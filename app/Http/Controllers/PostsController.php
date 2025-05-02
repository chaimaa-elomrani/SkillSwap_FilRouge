<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use App\Services\DomainsService;
use App\Services\PostService;
use Auth;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

class PostsController extends Controller
{


    protected $postService;
    protected $domainService;

    public function __construct(PostService $postService, DomainsService $domainService)
    {
        $this->postService = $postService;
        $this->domainService = $domainService;
        $this->middleware('auth');

    }


    public function index(DomainsService $domainService){
        $domains = $domainService->getDomains();
        return view('users/createPost', compact('domains'));

    }

    public function getPostByUserId($userId)
    {
        $posts = Posts::with('user.profile')->latest()->get();
        return view('users/profile', compact('user'));
    }


    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:60',
            'description' => 'required|string',
            'domain_id' => 'required|exists:domains,id',
            'experience' => 'required|string',
            'credits_cost' => 'required|numeric|min:1',
            'duration' => 'required|numeric|min:1',
            'duration_unit' => 'required|string|in:hours,days,weeks',
            'skills' => 'required|string',
        ]);
        
        try {
            $post = $this->postService->create($request);
            
            if (!$post) {
                return back()->withInput()->withErrors(['error' => 'Failed to create post']);
            }
            
            return redirect()->route('domains.show', $post->domain_id)
                ->with('success', 'Post created successfully!');
        } catch (\Exception $e) {
            return redirect()->route('users/domains');
        }
    }


}