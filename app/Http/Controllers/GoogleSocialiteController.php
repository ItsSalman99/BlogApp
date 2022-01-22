<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

class GoogleSocialiteController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        $googleuser = Socialite::driver('google')->user();
        
        $user = User::where('google_id', $googleuser->getId())->first();

        if (!$user) {
            $user = User::where('email', $googleuser->getEmail())->first();
            if (!$user) {
                User::create([
                    'name' => $googleuser->getName(),
                    'email' => $googleuser->getEmail(),
                    'google_id' => $googleuser->getId(),
                ]);
            }
            else{
                return redirect()->route('login')->withErrors('Account already exist');
            }
        }

        Auth::login($user,true);
        
        return redirect()->route('dashboard');

    }
}