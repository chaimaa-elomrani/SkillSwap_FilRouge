<?php

namespace App\Http\Controllers;
use App\Services\AuthService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
            'password' => ['required', 'confirmed', 'string', 'min:8'],
        ]);


        $user = $this->authService->register($validated);

        auth()->login($user);

        return response()->json([
            'message' => 'User registered successfully!',
            'user' => $user,
        ], 201);
    }



    public function showLoginForm()
    {
        return view('/login');
    }
    

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $result = $this->authService->login($request->email, $request->password);

        if(!$result){
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        return response()->json([
            'message' => 'Login successful',
            'access_token' => $result['access_token'],
            'token_type' => $result['token_type'],
            'user' => $result['user']
        ]);

   
    }



    public function logout(Request $request)
    {
        $user = Auth::user();
        $user->tokens()->delete();

        return response()->json([
            'message' => 'Logout successful'
        ]);
    }

}
