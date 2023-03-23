<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;

class GoogleController
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->getId())->first();

            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('/');
            }else{
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getid(),
                    'password' => bcrypt('1234242')
                ]);

                Auth::login($newUser);
                return redirect()->intended('/');
            }

            // } catch (Exception $e){
            //     dd($e->getMessage());
            // }
        }
    }
