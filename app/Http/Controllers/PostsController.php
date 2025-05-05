<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use App\Models\Posts;
use App\Models\User;
use App\Services\DomainsService;
use App\Services\PostService;
use Auth;
use Dotenv\Validator;
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
        $validated = \Illuminate\Support\Facades\Validator::make($request->all(), [
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
                dd($post);
                return back()->withInput()->withErrors(['error' => 'Failed to create post']);
            }
            
            return redirect()->route('domains.show', $post->domain_id)
                ->with('success', 'Post created successfully!');
        } catch (\Exception $e) {
            return redirect()->route('users/domains');
        }
    }



    public function getPendingServicesToConfirm()
    {
        $user = Auth::user();
        
        if (!$user) {
            return collect();
        }
       
        return Posts::where('user_id', $user->id)
            ->whereHas('requests', function($query) {
                $query->where('status', 'accepted')
                      ->where('is_completed', false);  
            })
            ->with(['requests' => function($query) {
                $query->where('status', 'accepted')
                      ->where('is_completed', false)  
                      ->with('user.profile');
            }])
            ->latest()
            ->get();
    }



    public function edit(Posts $post)
{
    // Check if the user is authorized to edit this post
    if (auth()->id() !== $post->user_id) {
        return redirect()->route('home')->with('error', 'You are not authorized to edit this post');
    }
    
    // Get domains for the dropdown
    $domains = Domains::all();
    
    return view('users.editPost', compact('post', 'domains'));
}

public function update(Request $request, Posts $post)
{
    // Check if the user is authorized to update this post
    if (auth()->id() !== $post->user_id) {
        return redirect()->route('home')->with('error', 'You are not authorized to update this post');
    }
    
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'domain_id' => 'required|exists:domains,id',
        'languages' => 'required|array',
        'experience' => 'required|string|in:Beginner,Intermediate,Expert',
        'credits_cost' => 'required|integer|min:1',
        'duration' => 'required|integer|min:1',
        'duration_unit' => 'required|string|in:hours,days,weeks,months',
        'skills' => 'nullable|string',
    ]);
    
    // Update post
    $post->title = $request->title;
    $post->description = $request->description;
    $post->domain_id = $request->domain_id;
    $post->languages = json_encode($request->languages);
    $post->experience = $request->experience;
    $post->credits_cost = $request->credits_cost;
    $post->duration = $request->duration;
    $post->duration_unit = $request->duration_unit;
    $post->skills = $request->skills;
    $post->save();
    
    return redirect()->route('users.profile')->with('success', 'Post updated successfully');
}


}