<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class AuthController
{
    public function get_login()
    {
        return view('sign-in');
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

        $user = User::create($request->except(['_token']));

        event(new Registered($user));

        auth()->login($user);

        return redirect()->route('verification.notice')->with('succes', 'Akun berhasil dibuat, silahkan verifikasi Email Anda');
    }

    public function post_login(Request $request){
    }
}
