<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function getIndexPage(){
        
    }

    public function getRegisterPage(){
        $categories = Category::all();

        return view('register', [
            "categories" => $categories
        ]);
    }

    public function getLoginPage(){
        $categories = Category::all();

        return view('login', [
            "categories" => $categories
        ]);
    }
}
