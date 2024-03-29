<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
        return view("user.auth.login");
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route("dashboard");
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }

    public function forgotPassword(Request $request)
    {
        if ($request->method() == "GET") {
            return view("user.auth.forgot-password");
        }

        $request->validate([
            "email" => "required|email",
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['success' => __("Password reset link sent to your email address.")])
            : back()->withErrors(['email' => __("Email address not found.")]);
    }

    public function resetPassword(Request $request, $token = null)
    {
        if ($request->method() == "GET") {
            return view("user.auth.reset-password", ['token' => $token, 'email' => $request->email]);
        }

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        $errorMessage = __("Something went wrong, please try again.");

        if ($status === Password::INVALID_TOKEN) {
            $errorMessage = __("Invalid reset token");
        }elseif ($status === Password::INVALID_USER) {
            $errorMessage = __("Email address not found.");
        }elseif ($status === Password::RESET_THROTTLED) {
            $errorMessage = __("Too many password reset attempts, please try again later.");
        }

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('message', __("Password reset successfully"))
            : back()->with('error', $errorMessage);
    }
}
