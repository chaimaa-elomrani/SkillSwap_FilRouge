<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use App\Models\User;
use App\Services\DomainService;
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
        return view('admin/skills', compact('skills', 'domains'));
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
  
    // public function findOrCreate(Request $request){
    //     $skills = $request->input('skills');
    //     $skillIds = $this->skillService->findOrCreate($skills);
    //     return redirect()->route('skills.index');
    // }


    public function getSkillsByUserId($userId){
        $user = auth()->user()->load('user_skills');
        return view('users/profile', compact('user'));
    }


    public function store(Request $request)
    {
        try {
            $request->validate([
                'skills' => 'required',
            ]);
    
            $skills = json_decode($request->skills);
            

            \Log::info('Skills received:', ['skills' => $skills]);

            $userId = auth()->id();
            foreach ($skills as $skillName) {
               $skill = Skills::firstOrCreate(['name' => $skillName]);
                \DB::table('user_skills')->insert([
                    'user_id' => $userId,   
                    'skill_id' => $skill->id, 
                ]);
            }
            
            return response()->json(['success' => true, 'message' => 'Skills saved successfully']);
        } catch (\Exception $e) {
            \Log::error('Error saving skills: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
    
}