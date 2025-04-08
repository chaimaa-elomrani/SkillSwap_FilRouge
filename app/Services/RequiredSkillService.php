<?php

namespace App\Services;
use App\Models\Posts;
use App\Models\RequiredSkills;
use App\Models\skills_required;
use Illuminate\Database\Eloquent\Collection; 


class RequiredSkillService{

    public function findOrCreate(string $name){
        return RequiredSkills::firstOrCreate(['name' => trim($name)]);

    }


    public function getAllSkills(){
        return RequiredSkills::orderBy('name')->get();
    }

    public function create(array $data){
        return RequiredSkills::create($data);
    }

    public function update(RequiredSkills $skill, array $data){
        return $skill->update($data);
    }

    public function delete(RequiredSkills $skill){
        return $skill->delete();
    }

    public function searchSkills(string $query): Collection
    {
        return RequiredSkills::where('name', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->get();
    }
}