<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $fillable = [
        'name',
        'description',
        'image',
    ];
    

    // public function posts()
    // {
    //     return $this->belongsToMany(Posts::class);
    // }

    // public function skills(){
    //     return $this->hasMany(Skills::class, 'domain_id');
    // }
    
    
}
