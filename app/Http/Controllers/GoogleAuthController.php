<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // handling the call-back url of google authentication
    public function callBackGoogle()
    {
        try {
            // retreaving google user details
            $google_user = Socialite::driver('google')->user();

            // check if user exists in the database
            $user = User::where('google_id', $google_user->getId())->first();

            if (!$user) {

                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);

                Auth::login($new_user);

                return redirect()->intended('vekpod.index');
            } else {
                Auth::login($user);

                return redirect()->intended('vekpod.index');
            }
        } catch (\Throwable $th) {
            dd('Something went wrong!' . $th->getMessage());
        }
    }
}
