<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('pages.login');
    }
    public function authenticate(Request $request){
        $credential = $request->validate([
            'nim' => 'required',
            'password' => 'required'
        ], [
            'nim.required' => 'Kolom NIM harus diisi',
            'password.required' => 'Kolom Password harus diisi'
        ]);
        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return back()->withErrors(['Login Gagal!']);
    }
    public function signout(Request $request){
        Auth::logout();
        return redirect()->intended('/login');
    }
}
