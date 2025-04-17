<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    

    public function index(){
        Type::all();
        return view('users/domains' , compact('types'));
    }
}
