<?php

namespace App\Http\Controllers;
use App\Services\DomainsService;
use App\Models\Domains;
use Illuminate\Http\Request;

class DomainsController extends Controller
{
    protected $domainService;
    public function __construct(DomainsService $domainService){
        $this->domainService = $domainService;
    }
    

    public function index(){
        $typesToShow = ['Digital&Tech','Creative','Professional Services','Lifestyle & Wellness','Education & Learning','Specialized Services','Others'];
        $domains = $this->domainService->getGroupedDomainsByType($typesToShow);
        // dd($domains);
        return view('users.domains', compact('domains'));
    }



    // public function getDomainByType(){
    //     $typesToShow = ['Digital&Tech','Creative','Professional Services','Lifestyle & Wellness','Education & Learning','Specialized Services','Others' ];
    //     $domains = $this->domainService->getGroupedDomainsByType($typesToShow);

    //     return view('your-view-name', compact('domains'));
    // }
}
