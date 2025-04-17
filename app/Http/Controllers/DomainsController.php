<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use Illuminate\Http\Request;

class DomainsController extends Controller
{
    protected $domainService;
    public function __construct($domainService){
        $this->domainService = $domainService;
    }
    
    // public function index(){
    //     return view('users/categories');
    // }

    public function index(){
        $categories = Domains::all();
         return view('users/categories', compact('categories'));
    }


    public function getDomainByType(){
        $typesToShow = ['Digital & Tech','Creative','Professional Services','Lifestyle & Wellness','Education & Learning','Specialized Services','Others' ];
        $domains = $this->domainService->getDomainByType($typesToShow);
        return view('user/domains', compact('domains'));
    }
}
