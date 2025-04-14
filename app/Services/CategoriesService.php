<?php

namespace App\Services;
use App\Models\Categories;

class CategoriesService{

    public function getAllCategories(){
        return Categories::all();
    }
}