<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showlogin(){
        return view('auth.login');
    }

    public function login(Request $request){

        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($user)){
            $request->session()->regenerate();

            if (auth()->user()->role === 'admin') {
                return redirect()->route('dashboard.admin');
            }

             return redirect()->route('mahasiswa.pengaduan');

       } else {
        return redirect()->back();
       }


    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
}
