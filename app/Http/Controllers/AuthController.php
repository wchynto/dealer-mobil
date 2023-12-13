<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $credentaials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentaials, $request->has('remember') ? true : false)) {
            switch (Auth::user()->role) {
                case 'admin':
                    $request->session()->regenerate();

                    return redirect()->intended('dashboard');
                    break;

                default:
                    $request->session()->regenerate();

                    return redirect()->intended('/');
                    break;
            }
        }

        return back()->with('errors', 'Email atau Password salah!')->withInput($request->only('username'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
