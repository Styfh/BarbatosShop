<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class NavigationController extends Controller
{

    public function getIndexPage(){
        $categories = Category::all();

        return view('home', [
            "categories" => $categories,
        ]);
    }

    public function getCategoryPage(Request $request){

        $id = $request->route('category_id');

        $categories = Category::all();
        $category = Category::where('id', $id)->first();
        $products = Product::where('category_id', $id)->paginate(10);

        return view('category', [
            'categories' => $categories,
            'category' => $category,
            'products' => $products
        ]);

    }

    public function getProductPage(Request $request){

        $id = $request->route('product_id');

        $categories = Category::all();
        $product = Product::where('id', $id)->first();

        return view('product', [
            'categories' => $categories,
            'product' => $product
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

    public function getAddPage(){
        $categories = Category::all();

        return view('add', [
            "categories" => $categories
        ]);
    }

    public function getUpdatePage(Request $request){
        $id = $request->route('id');
        $categories = Category::all();
        $product = Product::where('id', $id)->first();

        return view('update', [
            'categories' => $categories,
            'product' => $product
        ]);
    }

    public function getManagePage(){
        $categories = Category::all();
        $product = Product::all();
        return view('manage', [
            'categories' => $categories,
            'product' => $product
        ]);
    }
}
