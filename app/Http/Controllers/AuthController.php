<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Imports Adicionais
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

// Models
use App\Models\User;
use App\Models\State;

// Requests
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

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

    public function login() {
        return view('auth.login');
    }

    public function login_action(LoginRequest $request) {
        $loginData = $request->only(['email', 'password']);
        
        if(!Auth::attempt($loginData)) {
            $data['message'] = "Usuário e/ou senha inválidos";
            $data['email'] = $loginData['email'];
            return view('auth.login', $data);
        }
        
        return redirect()->route('select-state');
    }

    public function state() {
        $data['states'] = State::all();
        return view('auth.select-state', $data);
    }

    public function state_action(Request $request) {
        $data = $request->only(['state_id']);
        $stateRegister = State::find($data['state_id']);

        if(!$stateRegister) {
            return redirect('/login');
        }

        $user = Auth::user();
        $user->state_id = $stateRegister->id; // Caso o nome passado no retorno seja diferente do utilizado na tabela, precisa da conversão
        $user->save();
        return redirect()->route('my-ads');
    }

    public function logout() {
        Auth::logout();
        return view('auth.login');
    }
}
