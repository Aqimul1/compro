<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
{
    $credentials = $request->only('username', 'password');

    if ($credentials['username'] === 'admin' && $credentials['password'] === 'admin1234') {
        session()->put('is_admin', true);
        return redirect()->route('dashboard'); 
    }

    return back()->withErrors(['error' => 'Username atau Password salah!']);
}
    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
