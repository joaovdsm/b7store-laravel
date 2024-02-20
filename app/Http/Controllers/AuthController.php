<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function register() {
        return view('auth.register');
    }

    public function register_action(RegisterRequest $request) {
        dd($request);
    }
}
