<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function store() {
        User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => Hash::make(request()->password),
        ]);
        return redirect('/register');
    }

    public function login() {
        return view('login');
    }

    public function storeLogin() {
        $user = User::where('email', request()->email)->first();
        if($user) {
            if(Hash::check(request()->password, $user->password)) {
                Auth::login($user);
                return redirect('/index');
            }
            return redirect('/login');
        }
        return redirect('/login');
    }

    public function logout() {
        $user = request()->user();
        Auth::logout($user);
        return redirect('/login');
    }
}
