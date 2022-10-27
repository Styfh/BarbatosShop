<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function getRegisterPage(){
        return view('register');
    }

    public function getLoginPage(){
        return view('login');
    }
}
