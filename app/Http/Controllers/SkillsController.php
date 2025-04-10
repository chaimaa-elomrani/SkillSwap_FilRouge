<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use App\Services\SkillService;
use Illuminate\Http\Request;

class SkillsController extends Controller
{

    protected $skillService;


    public function __construct(SkillService $skillService)
    {
        $this->skillService = $skillService;
    }

    public function index()
    {
        $skills = $this->skillService->getAllSkills();
        return view('admin/skills', compact('skills'));
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
        return redirect()->route('skills.store');
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
        $query = $request->input('query');
        $skills = $this->skillService->searchSkills($query);
        return redirect()->route('skills.index', compact('skills', 'query'));
    }
  
    public function findOrCreate(Request $request){
        $skills = $request->input('skills');
        $skillIds = $this->skillService->findOrCreate($skills);
        return redirect()->route('skills.index');
    }

}