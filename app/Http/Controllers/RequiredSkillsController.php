<?php

namespace App\Http\Controllers;

use App\Models\RequiredSkills;
use Illuminate\Http\Request;

class RequiredSkillsController extends Controller
{

    protected $skillService;

    public function __construct($skillService)
    {
        $this->skillService = $skillService;
    }

    // public function index(){
    //     return view('requiredSkills');
    // }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $skill = $this->skillService->create($validated['name']);
        return response()->json($skill);
    }


    public function update(Request $request, RequiredSkills $skill)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $this->skillService->update($skill, $data);
        return response()->json(['message' => 'Skill updated successfully']);
    }

    public function destroy(RequiredSkills $skill){
        $this->skillService->delete($skill);
        return response()->json(['message' => 'Skill deleted successfully']);
    }



}