<?php

namespace App\Http\Controllers;

use App\Models\General;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(){

        $general = General::first();
        return view('auth.login', compact('general'));
    }
    public function auth(Request $request){
        //  dd($request->all());
         $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],
        [
            //costom massage
            'email.exists' => 'email ini belum tersedia',
            'email.required' => 'email harus diisi',
            'password.required' => 'password harus diisi'
        ],
     );

     $user = $request->only('email', 'password');

     if(Auth::attempt($user)){
            return redirect()->route('dashboard');
     }else{
        return redirect()->back()->with('error', "gagal login, silahkan cek dan coba lagi!");
     }
    }

    public function logout(){
        Auth::logout();
        return redirect('/join');
    }
}
