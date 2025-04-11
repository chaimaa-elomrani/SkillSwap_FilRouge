<?php

namespace App\Services;

use App\Models\Domains;
use Illuminate\Database\Eloquent\Collection;


class DomainService{

    public function getAllDomains(){
        return Domains::orderBy('name')->paginate(10);
    }

    public function create(array $data){
        return Domains::create($data);
       
    }
    
    public function update(Domains $domain, array $data){
        return $domain->update($data);
    }

    public function delete(Domains $domain){
        return $domain->delete(); 
    }

    public function searchDomains(string $query): Collection{
        return Domains::where('name', 'like', "%{$query}%")
            ->get();
    }

    public function findOrCreate(string $name){
        return Domains::firstOrCreate(['name' => trim($name)]);
    }
}




