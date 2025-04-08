<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequiredSkills extends Model
{
    protected $fillable = ['name'];

    public static function findOrCreate(array $skills){
        
        $skillIds = [];
        foreach ($skills as $name) {
            $skill = self::firstOrCreate(
                ['name' => strtolower(trim($name))], // normalize input
                ['name' => ucfirst($name)]
            );
            $skillIds[] = $skill->id;
        }
        return $skillIds;
    }

    
    public function posts(){
        return $this->belongsToMany(Posts::class);
    }
}
