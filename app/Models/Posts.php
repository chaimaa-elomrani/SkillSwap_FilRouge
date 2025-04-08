<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

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
    

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function skills(){
        return $this->belongsToMany(skills_required::class, 'post_skills');
    }

    public function languages(){
        return $this->belongsToMany(languages::class, 'post_languages');
    }
    
}

