<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
        ]);

        $user = User::where('email', $request->get('email'))->first();

        if ($user) {
            Auth::login($user);
            return redirect()->route('users');
        }
        return back()->withErrors(['Try again']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('auth')->with('message', 'You have been logged out.');
    }
}
