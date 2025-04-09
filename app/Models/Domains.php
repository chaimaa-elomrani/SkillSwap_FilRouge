<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domains extends Model
{
     protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany(Posts::class);
    }

    public function skills(){
        return $this->hasMany(Skills::class);
    }
}
