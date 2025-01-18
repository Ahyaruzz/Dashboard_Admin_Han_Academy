<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function AdminLogin(Request $request) 
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = Admin::where('username', $credentials['username'])->first();

        if ($admin && $credentials['password'] === $admin->password) {
            Auth::guard('admin')->login($admin);
            return redirect()->route('anggota.home'); 
        }

        return back()->withErrors([
            'error' => 'Username atau password salah !'
        ])->withInput($request->except('password'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login');
    }
}