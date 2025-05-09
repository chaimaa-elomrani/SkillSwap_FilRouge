<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function posts()
    {
        return $this->hasMany(Posts::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skills::class, 'user_skills', 'user_id', 'skill_id');
    }

    public function personalServices()
    {
        return $this->hasMany(PersonalServices::class);
    }


    public function requests()
    {
        return $this->hasMany(Requests::class, 'sender_id');
    }

    public function receivedRequests()
    {
        return $this->hasMany(Requests::class, 'receiver_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transactions::class, 'user_id');
    }

    public function userCredits()
    {
        return $this->hasMany(UserCredits::class, 'user_id');
    }

    // Add this method to your User model
    public function languages()
    {

        return $this->belongsToMany(Language::class, 'user_to_languages');
    }
    

}

