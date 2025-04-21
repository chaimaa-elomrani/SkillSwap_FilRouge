<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'title',
        'bio',
        'location',
        'phone_number',
        'image',
        'status',
        'domain_id',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
