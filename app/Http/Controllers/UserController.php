<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function login(){
        return view('login');
    }
    
    function register(){
        return view('register');
    }

    function loginPost(Request $request): RedirectResponse {
        $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('placeholder'));
        }

        return redirect(route('login'))->with('incorrect details');
    }
}
