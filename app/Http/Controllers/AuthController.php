<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }


    public function showRegisterForm()
    {
        return view('signup');
    }
   
    
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
 
        $user = $this->authService->register([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
           
        ]);
        
        Auth::login($user);
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

        
        $user = $this->authService->login($credentials['email'], $credentials['password']);
        
        // if ($user) {
        //     session()->flash('success', 'Login successful!');
        //     return view('users/profileForm');
        // }

        if(!auth()->user()->profile_completed){
            return redirect(route('profile.show'));
        }

        return redirect()->route('profile.show');
    }



    public function logout()
    {
        $this->authService->logout();
        
        Auth::logout();
        session()->flash('success', 'Logout successful!');
        return redirect()->route('login');
    }

    

   
}