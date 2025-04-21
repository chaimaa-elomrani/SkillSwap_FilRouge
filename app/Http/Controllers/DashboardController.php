<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use App\Models\Skills;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index(){
        return view('admin/dashboard');
    }
}