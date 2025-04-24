<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use App\Services\DomainService;
use App\Services\SkillService;
use Illuminate\Http\Request;

class SkillsController extends Controller
{

    protected $skillService;
    protected $domainService;


    // public function __construct(SkillService $skillService , DomainService $domainService)
    // {
    //     $this->skillService = $skillService;
    //     $this->domainService = $domainService;
    // }

    public function index()
    {
        $skills = $this->skillService->getAllSkills();
        $domains = $this->domainService->getDomains();
        return view('admin/skills', compact('skills', 'domains'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'domain_id' => 'required|exists:domains,id',
        ]);
       $this->skillService->create([
            'name' => $validated['name'],
            'domain_id' => $validated['domain_id'],
        ]);
        
        return redirect()->route('skills.index');
    }


    public function update(Request $request, Skills $skill)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $this->skillService->update($skill, $data);
        return redirect()->route('skills.index');
    }

    public function destroy(Skills $skill){
        $this->skillService->delete($skill);
        return redirect()->route('skills.index');
    }

    public function search(Request $request){
        $query = $request->input('query', '');
        $skills = $this->skillService->searchSkills($query);
        return redirect()->route('skills.index', compact('skills', 'query'));
    }
  
    public function findOrCreate(Request $request){
        $skills = $request->input('skills');
        $skillIds = $this->skillService->findOrCreate($skills);
        return redirect()->route('skills.index');
    }

    // public function getDomains(){

    //    $domains = $this->domainService->getDomains();
    //    return view('admin/skills', compact('domains'));
    // }

}