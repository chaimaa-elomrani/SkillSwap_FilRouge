<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $fillable = ['name', 'domain_id'];

    public static function findOrCreate(array $skills){
        
        $skillIds = [];
        foreach ($skills as $name) {
            $skill = self::firstOrCreate(
                ['name' => strtolower(trim($name))],
                ['name' => ucfirst($name)]
            );
            $skillIds[] = $skill->id;
        }
        return $skillIds;
    }

    
    // public function posts(){
    //     return $this->belongsToMany(Posts::class);
    // }

    public function domain(){
        return $this->belongsTo(Domains::class, 'domain_id');
    }

    public function users()
{
    return $this->belongsToMany(User::class, 'user_skills');
}


   
}
