<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Services\PostService;
use Auth;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller;
use Validator;
use function PHPUnit\Framework\isEmpty;

class PostsController extends Controller
{

    protected $postService;


      public function __construct(PostService $postService){
        $this->postService = $postService; 
        $this->middleware('auth')->except('view, search');
      }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts');
    }

    public function postFrom(){
        return view('createPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|string|max:60',
            'description' => 'required|string',
            'category' => 'required|string',
            'skills_required' => 'required|array',
            'experience_level' => 'required|string|in:beginner,intermediate,expert',
            'target_audience' => 'nullable|string',
            'languages' => 'nullable|array',
            'credit_cost' => 'integer|min:0',
            'completion_time' => 'required|string',
            'time_unit' => 'string|in:minutes,hours,days,weeks',
            'additional_notes' => 'nullable|string',
        ]);

        $validated['user_id'] = auth()->id();

        $this->postService->store($validated);

        session()->flash('success', 'Post created successfully');
        return redirect()->route('posts');
       
    }


    public function getPostByUser($userId){
        $post = $this->postService->getPostByUser($userId);
        if(!$post){
            return response(['message' => 'no post found'], 404);
        }
        return response()->json($post);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
            $post = $this->postService->getAllPosts();
            return response()->json($post);
    }
    

    public function getpostByCategory($category){

        $post = Posts::getpostByCategory($category);

        if(!$post = isEmpty($category)){
            return response(['message' => 'no post found'], 404);
        }

        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|string|max:60',
            'description' => 'required|string',
            'category' => 'required|string',
            'skills_required' => 'required|array',
            'experience_level' => 'required|string|in:beginner,intermediate,expert',
            'target_audience' => 'nullable|string',
            'languages' => 'nullable|array',
            'credit_cost' => 'integer|min:0',
            'completion_time' => 'required|string',
            'time_unit' => 'string|in:minutes,hours,days,weeks',
            'additional_notes' => 'nullable|string',
        ]);

        if($validator->fails()){
            return response()->json(['message' => $validator->errors()],422 );
        }

        $validatedData = $validator->validated();
        $post = $this->postService->updatePost($validatedData , $id);

        if(!$post){
            return response()->json(['message' => 'Post not found'], 404);
        }

        return response()->json(['message' => 'Post updated successfully', 'post' => $this->postService->getPostById($id)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = $this->postService->deletePost($id);
        if(!$deleted){
            return response()->json(['message' => 'Post not found'], 404);
        }

        return response()->json(['message' => 'Post deleted successfully'], 200);
    }
}
