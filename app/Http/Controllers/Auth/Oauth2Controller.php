<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Oauth2Controller extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
 
    public function handleFacebookCallback()
    {
        $userSocial = Socialite::driver('facebook')->user();
         
        $findUser = User::where('email',$userSocial->email)->first();
         
        if($findUser) {
            Auth::login($findUser);

            return redirect('/home');
        }else {
            $user = new User;

            $user->name = $userSocial->name;
            $user->email = $userSocial->email;
            $user->password = bcrypt(12345);
            $user->save();

            Auth::login($user);

            return redirect('/home');
        }
    }
        
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $userSocial = Socialite::driver('google')->user();
        
        $findUser = User::where('email',$userSocial->email)->first();
        
    if($findUser) {
        Auth::login($findUser);

        return redirect('/home');
    }else {
        $user = new User;

        $user->name = $userSocial->name;
        $user->email = $userSocial->email;
        $user->password = bcrypt(12345);
        $user->save();

        Auth::login($user);

        return redirect('/home');
        }
    
    }
}
