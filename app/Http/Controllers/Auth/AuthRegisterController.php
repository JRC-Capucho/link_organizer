<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class AuthRegisterController extends Controller
{
    public function index()
    {

        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        if (!$request->tryToRegister()) {
            return back()->with(['message' => 'Fail to create account']);
        }

        return to_route('dashboard');
    }
}
