<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthService{

    public function register (array $data){
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return $user;   
    }


    public function login ($email, $password){
        if (!Auth::attempt(['email' => $email, 'password' => $password])) {
            return false ;
        }

        $user = User::where('email', $email)->first();
      
        return   $user;
       
    }


    public function logout(){
        $user = Auth::user();

        if(!$user){
            return false ; // User not authenticated
        }

        $user->tokens()->delete();
        return true ;
    }
}