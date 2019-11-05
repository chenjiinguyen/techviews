<?php

namespace App\Http\Controllers;

use Socialite;
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
        $service = Socialite::driver($provider);

        try {
            $user = $service->stateless()->user();
        }
        catch(\Exception $e) {
            if($redirect = request()->input('redirect')) {
                session(['callback_redirect_uri' => urlencode($redirect)]);
            }

            return $service->redirect();
        }

        // Tạo user với các thông tin lấy được từ Facebook
        $createdUser = \App\User::updateOrCreate(
            [
                'provider_id' => $user->getId(),
            ], 
            [
                'provider' => $provider,
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'avatar' => $user->avatar_original,
            ]
        );

        // Login với user vừa tạo.
        Auth::login($createdUser);

        $service = Socialite::driver($provider);

        try {
            $user = $service->stateless()->user();
        }
        catch(\Exception $e) {
            if($redirect = request()->input('redirect')) {
                session(['callback_redirect_uri' => urlencode($redirect)]);
            }

            return $service->redirect();
        }

        // Tạo user với các thông tin lấy được từ Facebook
        $createdUser = \App\User::updateOrCreate(
            [
                'provider_id' => $user->getId(),
            ], 
            [
                'provider' => $provider,
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'avatar' => $user->avatar_original,
            ]
        );

        // Login với user vừa tạo.
        Auth::login($createdUser);

        $service = Socialite::driver($provider);

        try {
            $user = $service->stateless()->user();
        }
        catch(\Exception $e) {
            if($redirect = request()->input('redirect')) {
                session(['callback_redirect_uri' => urlencode($redirect)]);
            }

            return $service->redirect();
        }

        // Tạo user với các thông tin lấy được từ Facebook
        $createdUser = \App\User::updateOrCreate(
            [
                'provider_id' => $user->getId(),
            ], 
            [
                'provider' => $provider,
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'avatar' => $user->avatar_original,
            ]
        );

        // Login với user vừa tạo.
        Auth::login($createdUser);

        
        return redirect('/');
    }
}
