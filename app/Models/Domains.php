<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domains extends Model
{
    
    use HasFactory;

     protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany(Posts::class);
    }

    public function skills(){
        return $this->hasMany(Skills::class, 'domain_id');
    }
    
}
