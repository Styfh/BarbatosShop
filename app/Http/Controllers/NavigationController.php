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

    public function getCartPage(){

        $categories = Category::all();
        $cart = session('cart');
        $total = 0;

        foreach($cart as $cartEntry){
            $total += $cartEntry->total_price;
        }

        return view('cart', [
            "categories" => $categories,
            "cart" => $cart,
            "total" => $total
        ]);

    }
}
