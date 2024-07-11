<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        'email' => ['required'],
        'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('placeholder'));
        }
        
        return redirect(route('login'))->with("error","incorrect details");
    }

    function registerPost(Request $request): RedirectResponse {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
        ]);

        $r_data['name'] = $request->username;
        $r_data['password'] = Hash::make($request->password);
        $r_data['email'] = $request->email;
        $user = User::create($r_data);
        
        if (!$user) {
            return  redirect(route('register'))->with("error","incorrect details");
        }
        
        return redirect(route('login'))->with("success","correct details");
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'))->with("success","logged out");
    }
}
