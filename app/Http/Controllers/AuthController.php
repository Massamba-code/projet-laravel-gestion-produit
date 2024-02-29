<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $connexion=$request->validated();
        if(Auth::attempt($connexion)){
            $request->session()->regenerate();
            return redirect()->intended(route('/users.listeusers'));
        }
        return to_route('auth.login')->withErrors([
            'email'=>'Email invalide'
        ])->onlyInput('email ');
    }
}
