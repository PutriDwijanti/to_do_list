<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    //
    public function show(){
        return view('auth.signup');
    }

    public function register(Request $request){
        $request->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'required|email|unique:users',
            'password'=>'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Ensure this is correct
        ]);

        return redirect()->route('login')->with('success', 'Register berhasil! Silahkan login.');
    
    }

}
