<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function loginView()
    {
        return view('auth.login');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|string|email',
            'password' => [
                'string', 'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'remember' => 'required|bool'
        ]);
        try {

            unset($attributes['remember']);
            if (!Auth::attempt($attributes, $request->remember)) {
                return redirectBack(false, 'Invalid Credentials');
            }

            return redirectRoute(true, 'You are logged in successfully', 'dashboard');
        } catch (Exception $th) {
            return redirectBack(false, 'Internal Server Error');
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->regenerate();
        return to_route('auth.login');
    }
}
