<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'category',
        'skills_required',
        'experience_level',
        'target_audience',
        'languages',
        'credit_cost',
        'completion_time',
        'time_unit',
        'additional_notes',
    ];

    protected $casts = [
        'skills_required' => 'array',
        'languages' => 'array',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
