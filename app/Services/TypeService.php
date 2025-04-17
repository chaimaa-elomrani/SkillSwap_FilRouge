<?php

namespace App\Services;
use App\Models\Type;

class TypeService{

    public function getTypes(){
        return Type::all();
    }
}
