<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }else{
            return view('auth.login');
        }
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        Session::flash('error', 'username atau password salah.');
        return back()->withInput();
        
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
