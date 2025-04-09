<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use App\Services\DomainService;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    
    protected $domainService;

    public function __construct(DomainService $domainService){
        $this->domainService = $domainService;
    }


    public function index(){
        $domains = $this->domainService->getAllDomains();
        return view('domains.index', compact('domains'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:domains,name',
        ]);
        $this->domainService->create($request->all());
        return redirect()->route('domains.index')->with('success', 'Domain created successfully.');
    }

    public function update(Request $request ,Domains $domains){
        $request->validate([
            'name' => 'required|unique:domains,name,' . $domains->id,
        ]);
        $this->domainService->update($domains, $request->all());
        return redirect()->route('domains.index')->with('success', 'Domain updated successfully.');
    }
}
