<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegisterForm(){
        return view('signup');
    }


    public function register(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:500|unique:users',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        return redirect('login')->with('success', 'Registration successful! Please log in.');

    }


    public function showLoginForm(){
        return view('/login');
    }

    public function login(Request $request){    
     
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if(Auth::attempt(['email'=>$request->email ,'password'=>$request->password])){
            return redirect()->route('/signup', ['id'=>Auth::id()]);
        }
        return view('/signup');
    }
  

}
