<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(LoginRequest $request)
    {
        //Basic laravel authentication
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            $request->session()->put(Auth::user()->domain, Auth::user());

            //redirect to tenant url
            return redirect("http://" . Auth::user()->domain . "." . env('APP_TENANT_DOMAIN'));
        }

        //if authentication fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function index() {
        //return login view
        return view('login');
    }
}
