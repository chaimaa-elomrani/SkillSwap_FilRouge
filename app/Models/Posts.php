<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    
    protected $fillable = [
        'title',
        'description',
        'domain_id',
        'user_id',
        'languages',
        'experience',
        'credits_cost',
        'duration',
        'skills',
        'duration_unit',    
    ];


    public function domain(){
        return $this->belongsTo(Domains::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
