<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('npk', 'password');

        $user = User::where('npk', $credentials['npk'])->first();

        if ($user && $user->password === $credentials['password']) {
            Auth::login($user);

            // Tambahkan session
            Session::put('user_id', $user->id);
            Session::put('user_npk', $user->npk);
            Session::put('user_name', $user->name);

            return redirect()->intended('/');
        }

        // Authentication failed, redirect back to login with error message
        return back()->withErrors([
            'messages' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function logout()
{
    Auth::logout();
    
    // Hapus session
    Session::forget('user_id');
    Session::forget('user_npk');
    Session::forget('user_name');

    return redirect()->route('login');
}
}
