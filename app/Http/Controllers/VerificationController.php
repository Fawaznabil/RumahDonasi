<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController
{
    public function notice()
    {
        return view("/verify-email");
        // return "Mohon untuk melakukan verifikasi email terlebih dahulu";
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return view("auth.login");
        // return "Akun berhasil di verifikasi, Selamat datang di Dashboard";
    }

    public function send(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return view("/verify-email");
        // return "Verifikasi Email berhasil dikirim";
    }
}
