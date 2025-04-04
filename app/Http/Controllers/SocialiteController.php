<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    // Redirect user to provider
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    // Handle provider callback
    public function callback($provider)
    {
        try {

            $socialUser = Socialite::driver($provider)->user();
            $user = User::updateOrCreate([
                'email' => $socialUser->email,
            ], [
                'name' => $socialUser->name,
                'provider' => $provider,
                'provider_id' => $socialUser->id,
                'password' => '123',
            ]);

            Auth::login($user);

            return redirect()->route('dashboard'); // Change to your preferred route
        } catch (\Exception $e) {
           dd($e);
        }
    }
}
