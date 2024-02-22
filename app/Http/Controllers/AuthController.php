<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

// Imports Adicionais
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

// Models
use App\Models\User;

class AuthController extends Controller
{
    public function register() {
        return view('auth.register');
    }

    public function register_action(RegisterRequest $request) {
        $userData = $request->only(['name', 'email', 'password']);
        $userData['password'] = Hash::make($userData['password']);

        $user = User::create($userData);
        Auth::loginUsingId($user->id);

        return redirect()->route('select-state');
    }

    public function state() {
        return view('auth.select-state');
    }

    public function state_action() {

    }
}
