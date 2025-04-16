<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use Illuminate\Http\Request;

class DomainsController extends Controller
{
    
    // public function index(){
    //     return view('users/categories');
    // }

    public function index(){
        $categories = Domains::all();
         return view('users/categories', compact('categories'));
    }
}
