<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domains extends Model
{

    protected $fillable = [
        'name',
        'description',
        'image',
    ];
    


    public function  type(){
        return $this->belongsTo(Type::class, 'type_id');
    }
    
    // public function posts(){
    //     return $this->hasMany(Posts::class, 'domain_id');
    // }
    
    public function skills(){
        return $this->hasMany(Skills::class, 'domain_id');
    }
}
