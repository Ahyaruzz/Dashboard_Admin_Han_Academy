<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function AdminLogin(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
    
        if (Auth::guard('admin')->attempt([
            'username' => $request->username, 
            'password' => $request->password
        ])) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
    
        return back()->withErrors([
            'error' => 'Username atau password salah'
        ]);
    } 
    
}
