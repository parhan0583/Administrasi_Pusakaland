<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|max:50',
        ]);
        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
            if (Auth::user()->role == 'administrasi') {
                return redirect('Padministrasi');
            }
            if (Auth::user()->role == 'marketing') {
                return redirect('Pmarketing');
            }
            return redirect('Padmin');
        }
        return back()->with('failed', 'email atau password salah');
    }

    public function logout()
    {
        Auth::logout(Auth::user());
        return redirect('/login');
    }
}
