<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'post_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function post()
    {
        return $this->belongsTo(Posts::class, 'post_id');
    }

}
