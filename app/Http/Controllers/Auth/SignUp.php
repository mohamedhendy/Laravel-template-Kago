<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUp extends Base
{
    public function __invoke(Request $request)
    {
        $user = $this->createUser($request);

        event(new Registered($user));

        $this->guard()->login($user);

        return redirect($this->signInUrl);
    }

    protected function createUser(Request $request) : User
    {
        $data = $request->validate($this->signUpVaidationRules());

        $data['password'] = Hash::make($data['password']);

        return User::create($data);
    }
}
