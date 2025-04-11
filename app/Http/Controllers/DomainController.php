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
        // dd($domains);
        return view('admin/domains', compact('domains'));
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

    public function destroy(Domains $domain){
        $this->domainService->delete($domain);
        return redirect()->route('domains.index');
    }

    public function search(Request $request){
        $query = $request->input('query');
        $domains = $this->domainService->searchDomains($query);
        return redirect()->route('domains.index', compact('domains', 'query'));
    }

    public function findOrCreate(Request $request){
        $name = $request->input('name');
        $domain = $this->domainService->findOrCreate($name);
        return response()->json($domain);
    }


   
    
}
