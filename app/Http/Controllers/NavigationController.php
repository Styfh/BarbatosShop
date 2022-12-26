<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\TransactionHeader;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavigationController extends Controller
{

    public function getIndexPage(Request $request){

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

    public function getProfilePage(Request $request){
        $id = $request->route('id');
        $categories = Category::all();
        $user = User::where('id', $id)->first();

        return view('profile', [
            'categories' => $categories,
            'user' => $user,
        ]);
    }

    public function getManagePage(Request $request){
        $categories = Category::all();
        $search_query = $request->query('search');
        $products = Product::where('product_name','LIKE',"%$search_query%")->paginate(10)->appends(['search'=>$search_query]);
        return view('manage', [
            'categories' => $categories,
            'products' => $products
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

    public function getHistoryPage(){

        $id = Auth::user()->id;
        $categories = Category::all();
        $transactions = TransactionHeader::where('customer_id', $id)->get();

        return view('history', [
            'categories' => $categories,
            'transactions' => $transactions
        ]);
    }

    public function getSearchPage(Request $request){

        $search_query = $request->query('search');
        $categories = Category::all();
        $products = Product::where('product_name', 'LIKE', "%$search_query%")->paginate(10);

        return view('search', [
            'categories' => $categories,
            'products' => $products
        ]);


    }
}
