<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController
{
    public function get_login()
    {
        return view('auth.login');
    }
    
    public function post_login(Request $request)
    {
        // dd($request->all());
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
        return redirect('/sign-in');
    }

    public function logout(){
        Auth::logout();

        request()->session()->invaalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }


    public function get_register()
    {
        return view('sign-up');
    }

    public function post_register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $request['password']= bcrypt( $request['password']);

        $user = User::create($request->except(['_token']));

        event(new Registered($user));

        auth()->login($user);

        return redirect()->route('verification.notice')->with('succes', 'Akun berhasil dibuat, silahkan verifikasi Email Anda');
    }


}
