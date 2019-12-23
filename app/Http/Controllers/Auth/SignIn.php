<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class SignIn extends Base
{
    use ThrottlesLogins;

    protected function username()
    {
        return $this->username;
    }

    public function __invoke(Request $request)
    {
        $request->validate($this->signInVaidationRules());
        $this->validateSignInFailedAttemptsLimit($request);
        $this->validateSignInCredintials($request);

        // On success
        $request->session()->regenerate();
        $this->clearLoginAttempts($request);

        return redirect()->intended($this->signInUrl);
    }

    /** @throws \Illuminate\Validation\ValidationException */
    protected function validateSignInFailedAttemptsLimit(Request $request): void
    {
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            $this->sendLockoutResponse($request);
        }
    }

    /** @throws \Illuminate\Validation\ValidationException */
    protected function validateSignInCredintials(Request $request)
    {
        if (!$this->attemptSignIn($request)) {
            $this->incrementLoginAttempts($request);

            throw ValidationException::withMessages([
                $this->username() => [trans('auth.failed')],
            ]);
        }
    }

    protected function attemptSignIn(Request $request): bool
    {
        $this->createAdminIfNotExists($request);

        return $this->guard()->attempt(
            $request->only($this->username(), 'password'),
            $request->filled('remember')
        );
    }

    protected function createAdminIfNotExists(Request $request): void
    {
        if ('admin' !== $request->input($this->username())) return;

        $password = Config::get('app.admin-password');
        if(!$password) return;

        if(User::whereEmail('admin')->exists()) return;

        User::create([
            'name'     => 'admin',
            'password' => Hash::make($password),
        ]);
    }
}
