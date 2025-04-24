<?php

namespace App\Services;
use App\Models\Profile;
// use Dotenv\Validator;
use App\Models\Skills;
use App\Models\User;
use DB;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;




class ProfileService
{
    public function storeProfile(Request $request)
    {
        try {
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
                'skills' => 'required|array|min:1',
            ])->validate();

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('profile_photos', 'public');
            } else {
                $imagePath = null;
            }

            $profile = Profile::create([
                'user_id' => Auth::id(),
                'name' => $request->name,
                'image' => $imagePath,
                'title' => $request->title,
                'bio' => $request->bio,
                'location' => $request->location,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'status' => $request->status,
                'domain_id' => $request->domain_id,

            ]);

            return ['success' => true, 'message' => 'Profile created successfully!', 'profile' => $profile];
        } catch (\Illuminate\Validation\ValidationException $e) {
            return ['success' => false, 'message' => 'Validation failed', 'errors' => $e->validator->errors()->all()];
        }
    }
}