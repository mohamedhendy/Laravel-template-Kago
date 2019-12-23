<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\SessionGuard;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

abstract class Base extends Controller
{
    protected $signInUrl  = '/dashboard';
    protected $signOutUrl = '/';

    protected $username     = 'email';
    protected $maxAttempts  = 10;
    protected $decayMinutes = 5;

    protected function signInVaidationRules() : array
    {
        return [
            $this->username() => 'required|string',
            'password'        => 'required|string',
        ];
    }

    protected function signUpVaidationRules() : array
    {
        return [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    protected function guard() : SessionGuard
    {
        return Auth::guard();
    }
}
