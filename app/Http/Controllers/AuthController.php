<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
   
    public function showRegisterForm()
    {
        return view('signup'); 
    }

   
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'string', 'min:8'],
        ]);

  
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
        auth()->login($user);

        session()->flash('success', 'User registered successfully!');

  
        return redirect()->route('home');
    }

  
    public function showLoginForm()
    {
        return view('login'); 
    }

    public function login(Request $request)
    {
      
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
        
            session()->flash('success', 'Login successful!');

            return redirect()->route('home');
        }

=        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {

        Auth::logout();
        session()->flash('success', 'Logout successful!');
        return redirect()->route('login');
    }
}
