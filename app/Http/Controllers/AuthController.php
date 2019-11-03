<?php

namespace App\Http\Controllers;

use Socialite;
use App\User;
use Auth;

class AuthController extends Controller
{

    /**
     * Redirect the user to the Facebook authentication page
     *
     * @return Response
     */
    public function redirectToProvider($provider) {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Facebook
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        // Get github's user infomation
        $user = Socialite::driver($provider)->stateless()->user();
//        dd($user);
        // Tạo user với các thông tin lấy được từ Facebook
        $createdUser = User::updateOrCreate([
            'provider_id' => $user->getId(),
            ], [
            'provider' => $provider,
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'avatar' => $user->avatar_original,
        ]);
        // Login với user vừa tạo.
        Auth::login($createdUser);

        return redirect('/');
    }
}
