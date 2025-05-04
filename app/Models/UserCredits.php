<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCredits extends Model
{
    
    protected $fillable = [
        'user_id',
        'credits'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }
}
