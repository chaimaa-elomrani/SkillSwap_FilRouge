<?php

namespace App\Services;
use App\Models\Profile;
// use Dotenv\Validator;
use App\Models\Skills;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;




class ProfileService{

    public function create(\Illuminate\Http\Request $request){
        $validated = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'bio' => 'required|string|max:750',
            'location' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
            'domain_id' => 'required|exists:domains,id',
        ])->validate();
    
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('profiles', 'public');
        }
    
        $skillIds = [];
        foreach ($validated['skills'] as $skillName) {
            $skill = Skills::firstOrCreate(['name' => $skillName]);
            $skillIds[] = $skill->id;
        }

        // Step 4: Attach skills to the user
        $user = User::find($validated['user_id']);
        $user->skills()->sync($skillIds); // assuming you have relation set up

        DB::commit();
   
    }

}