<?php

declare(strict_types=1);

namespace Sendportal\Base\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\ResetsPasswords;
use Sendportal\Base\Http\Controllers\Controller;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    public function showResetForm(Request $request, $token = null)
    {
        return view('sendportal::auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
