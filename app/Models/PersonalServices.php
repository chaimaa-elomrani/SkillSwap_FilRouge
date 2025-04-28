<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalServices extends Model
{

    protected $fillable = [
        'title',
        'description',
        'credit_cost',
        'user_id',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
