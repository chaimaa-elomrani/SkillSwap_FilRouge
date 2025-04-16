<?php

namespace App\Services;
use App\Models\Domains;

class DomainsService{

    public function getAllCategories(){
        return Domains::all();
    }
}