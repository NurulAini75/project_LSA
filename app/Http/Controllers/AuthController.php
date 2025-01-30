<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('backend.login.login');
    }

    public function login(Request $request){
        $user_login = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($user_login)){
            $request->session()->regenerate();
        return redirect()->route('admin.dasboard');
        }

        return back()->withErrors([
            'email' =>'email atau password salah',
            'password' =>'email atau password salah'
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
