<?php 

namespace App\Services;

use App\Models\Posts;
use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

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
    public function store(array $data)
    {
        return Posts::create($data);
       
    }

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

    
    
    
}