<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function createUser(Request $request) {
        $request->flashExcept(['password', 'passwordConfirm']);
        $attributes = $request->all();

        if($attributes['password'] != $attributes['passwordConfirm']) {
            return back()->withErrors(['password' => 'Passwords do not match']);
        }
        
        User::create([
            'name' => strtoupper($attributes['username']),
            'email' => strtoupper($attributes['email']),
            'password' => Hash::make($attributes['password']) 
        ]);

        return back()->with(['message' => 'You have registered successfully']);
    }

    public function login(Request $request) {
        
        $credentials = $request->only('email', 'password');
        $request->flashOnly(['email']);

        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            return view('Dashboard')->with('user', $user);
        }


        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
