<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type='guard';
        return view('register',compact('type'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest  $request)
    {
        //create user
        $user = User::create([
            'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'domain'=>$request->domain
                ]
        );
        //if user created successfully
        if ($user){
            return redirect()->route('login');
        }
        //if user creation fails
        return back()->withErrors([
            'email' => 'Created errors.',
        ])->onlyInput('email');

    }


}
