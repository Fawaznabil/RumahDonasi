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
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt(array('email' => $request->email, 'password' => $request->password, 'role' => 'customer'))) {
            $request->session()->regenerate();
            return redirect('/Home');
            
        }else if (Auth::attempt(array('email' => $request->email, 'password' => $request->password, 'role' => 'admin'))) {
            $request->session()->regenerate();
            return redirect('/admin');
        }
        return redirect('/sign-in');
        // if(Auth::attempt($request->only('email','password','role'=='user'))){
        //     return redirect('/Home');
        // }
        // elseif(Auth::attempt($request->only('email','password','role'=='admin'))){
        //     return redirect('/admin');
        // }
        // return redirect('/sign-in');
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('Success','Berhasil Logout');
    }
    // public function logout(){
    //     Auth::logout();

    //     request()->session()->invaalidate();

    //     request()->session()->regenerateToken();

    //     return redirect('/');
    // }


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
