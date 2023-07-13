<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user.register');
    }

    public function handleRegister(LoginRequest $request)
    {
        // $request->validate([
        //     'username' => 'required|regex:/^[a-zA-Z0-9_]{3,20}$/',
        //     'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
        //     'fullName' => 'required|regex:/^[a-zA-Z ]+$/',
        //     'address' => 'required|regex:/^[a-zA-Z0-9_ ]+, [a-zA-Z ]+, [a-zA-Z ]+, [a-zA-Z ]+$/',
        //     'email' => 'required|email'
        // ]);

        

        return $request;
    }
}
