<?php 

namespace App\Services;

use App\Models\Posts;
use App\Models\Service;
use Auth;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Validator;

class PostService{

    
    public function getPostByUser($userId){
        return Posts::where('user_id', $userId)->get();
    }

    public function getPostById($id){
        return Posts::find($id);
    }


    public function getAllPosts(){
        return Posts::all();
    }

    public function  getPostByCategory($category){
        return Posts::where('category', $category)->get();
    }
    /**
     * Store a newly created resource in storage
     */
 

    public function updatePost(array $data , $id){
        $post = Posts::find($id);

        if(!$post){
            return false;
        }

        return $post->update($data);
    }

    public function deletePost($id){
        return Posts::destroy($id);
    }



    
    public function create(Request $request){
        $skills = $request->skills && is_string($request->skills) ? array_filter(explode(',', $request->skills)) : [];

        $languages = is_array($request->languages) ? $request->languages : [];
    
        $post = Posts::create([
            'title' => $request->title,
            'description'=>$request->description,
            'domain_id'=>$request->domain_id,
            'user_id' => auth()->check() ? auth()->id() : null,
            'languages' => json_encode($languages),
            'skills' => json_encode($skills),       
            'experience'=>$request->experience,
            'credits_cost'=>$request->credits_cost,
            'duration'=>$request->duration,
            'duration_unit' => $request->duration_unit, 
        ]);

        return $post; 
    }    
}