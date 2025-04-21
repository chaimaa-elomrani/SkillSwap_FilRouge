<?php

namespace App\Services;
use App\Models\Profile;
// use Dotenv\Validator;
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
    
        Profile::create($validated);
    }

}