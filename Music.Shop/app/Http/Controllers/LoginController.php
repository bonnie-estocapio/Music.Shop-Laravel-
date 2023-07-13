<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public string $message;

    public function index()
    {
        // $this->message = '';
        return view('user.login');
    }

    public function check()
    {
        return view('user.login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        return $request;
    }
}