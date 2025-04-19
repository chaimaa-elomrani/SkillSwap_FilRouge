<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use App\Services\DomainsService;
use App\Models\Domains;
use App\Services\TypeService;
use Illuminate\Http\Request;

class DomainsController extends Controller
{
    protected $domainService;
    protected $typeService;

    public function __construct(DomainsService $domainService , TypeService $typeService){
        $this->domainService = $domainService;
        $this->typeService = $typeService;
    }

    public function getDomains(){
        $domains =$this->domainService->getDomains();
        return $domains;
    }
    

    public function index(){
        $typesToShow = ['Digital&Tech','Creative','Professional Services','Lifestyle & Wellness','Education & Learning','Specialized Services','Others'];
        $domains = $this->domainService->getGroupedDomainsByType($typesToShow);
        $types = $this->typeService->getTypes();
        // dd($domains);
        return view('users.domains', compact('domains', 'types'));
    }

    public function showPosts($id){
        $domains = Domains::with('posts')->findOrFail($id);
        return view('users/posts', compact('domains'));
    }

    public function showByDomain($domainName)
    {
        $domains = Domains::where('name', $domainName)->firstOrFail();
        $posts = Posts::where('domain_id', $domains->id)->get();
    
        return redirect()->route('domains.show', compact('posts', 'domains'));
    }
    

}
