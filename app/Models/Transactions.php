<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = [
        'user_id',
        'post_id',
        'request_id',
        'amount',
        'status',
        'transaction_date',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->belongsTo(Posts::class);
    }
    public function request()
    {
        return $this->belongsTo(Requests::class);
    }
    public function userCredit()
    {
        return $this->belongsTo(UserCredits::class);
    }

    public function service()
    {
        return $this->belongsTo(Posts::class, 'service_id');
    }
}
