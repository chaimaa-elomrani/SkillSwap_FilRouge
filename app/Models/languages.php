<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Posts;

class languages extends Model
{
    
   protected  $fillable = ['name'];

   
   public function posts(){
    return $this->belongsToMany(Posts::class);
   }


}
