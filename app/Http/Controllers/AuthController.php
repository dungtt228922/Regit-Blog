<?php

namespace App\Http\Controllers;


class AuthController extends Controller
{
    public function getLogin(){
        return view('Auth/login');
    }

    public function getSignup(){
        return view('Auth/signup');
    }
}
