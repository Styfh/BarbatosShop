<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class NavigationController extends Controller
{

    public function getIndexPage(){
        $categories = Category::all();

        return view('home', [
            "categories" => $categories
        ]);
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
