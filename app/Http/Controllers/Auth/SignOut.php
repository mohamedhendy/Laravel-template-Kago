<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class SignOut extends Base
{
    public function __invoke(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect($this->signOutUrl);
    }
}
