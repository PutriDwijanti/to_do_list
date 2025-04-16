<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class LoginController extends Controller
{

    public function show()
    {
        return view('auth.login'); // Pastikan kamu punya file resources/views/auth/login.blade.php
    }
    //
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'status' => false,
                    'message' => "Login gagal, user atau password salah!"
                ], 401);
            }
    
            $user = auth()->user();
    
            return response()->json([
                'status' => true,
                'message' => 'Login berhasil!',
                'user' => $user,
                'token' => $token
            ]);
        } catch (JWTException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan saat membuka token.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}