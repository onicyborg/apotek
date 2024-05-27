<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:5',
        ]);

        $credentials = $request->only('email', 'password');

        // Cek kredensial
        if (Auth::attempt($credentials)) {
            if(Auth::user()->role == 'admin'){
                return redirect()->intended('/dashboard')->with('success', 'Login berhasil!');
            }else{
                return redirect()->intended('/kasir')->with('success', 'Login berhasil!');
            }
        } else {
            // Jika gagal, kembali ke halaman login dengan pesan error
            return redirect()->back()->with('error', 'Email atau password salah!')->withInput();
        }
    }
}
