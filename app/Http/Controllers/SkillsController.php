<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{

    protected $skillService;


    public function __construct($skillService)
    {
        $this->skillService = $skillService;
    }

    public function index()
    {
        $skills = $this->service->getAllSkills();
        return view('skills.index', compact('skills'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $skill = $this->skillService->create($validated['name']);
        return redirect()
    }


    public function update(Request $request, Skills $skill)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $this->skillService->update($skill, $data);
        return response()->json(['message' => 'Skill updated successfully']);
    }

    public function destroy(Skills $skill){
        $this->skillService->delete($skill);
        return response()->json(['message' => 'Skill deleted successfully']);
    }

  



}