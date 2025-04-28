<?php

namespace App\Services;
use App\Models\Posts;
use App\Models\Skills;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection; 


class SkillService{

    public function findOrCreate(string $name){
        return Skills::firstOrCreate(['name' => trim($name)]);

    }


    public function getAllSkills(){
        return Skills::orderBy('name')->paginate(10);
    }
    

    // public function create(array $data){
    //     return Skills::create(
    //         [
    //             'name' => $data['name'],
    //             'domain_id' => $data['domain_id'] ?? null,
    //         ]
    //     );
    // }

    public function update(Skills $skill, array $data){
        return $skill->update($data);
    }

    public function delete(Skills $skill){
        return $skill->delete();
    }

    public function searchSkills(string $query): Collection
    {
        return Skills::where('name', 'like', "%{$query}%")
            ->get();
    }


    public function deleteSkill($id){
        $skill = Skills::find($id);
        $skill->delete();
        return redirect()->route('profile.index' )->with('success', 'Skill deleted successfully!');
    }

 
} 