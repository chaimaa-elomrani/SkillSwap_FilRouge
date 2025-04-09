<?php

namespace App\Services;

use App\Models\Domains;
class DomainService{

    public function getAllDomains(){
        return Domains::orderBy('name')->get();
    }

    
    
}







//     public function findOrCreate(string $name){
//         return Skills::firstOrCreate(['name' => trim($name)]);

//     }


//     public function getAllSkills(){
//         return Skills::orderBy('name')->paginate(10);
//     }

//     public function create(array $data){
//         return Skills::create($data);
//     }

//     public function update(Skills $skill, array $data){
//         return $skill->update($data);
//     }

//     public function delete(Skills $skill){
//         return $skill->delete();
//     }

//     public function searchSkills(string $query): Collection
//     {
//         return Skills::where('name', 'like', "%{$query}%")
//             ->get();
//     }
// } 