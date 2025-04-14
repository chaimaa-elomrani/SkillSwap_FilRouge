<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    
    // public function index(){
    //     return view('users/categories');
    // }

    public function index(){
        $categories = Categories::all();
         return view('users/categories', compact('categories'));
    }
}
