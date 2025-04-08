<?php

namespace App\Services;
use App\Models\Posts;
use App\Models\RequiredSkills;
use App\Models\skills_required; 


class RequiredSkillService{

    public function findOrCreate(string $name){
        return RequiredSkills::firstOrCreate(['name' => trim($name)]);

    }


    public function getAllSkills(){
        return RequiredSkills::orderBy('name')->get();
    }
}