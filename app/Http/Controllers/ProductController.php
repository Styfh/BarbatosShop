<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\CartProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class ProductController extends Controller{

    public function addProduct(Request $request){

        $request->validate([
            'product_name' => 'required',
            'category' => 'required',
            'product_description' => 'required',
            'product_price' => 'required|integer',
            'product_image' => 'required|image|mimes:jpeg, jpg, png'
        ]);
        $product_name = $request->product_name;
        $img = $request->product_image;
        $ext = $request->file('product_image')->extension();
        Storage::putFileAs('/public/product_images', $img, $product_name.'.'.$ext);

        DB::table('products')->insert([
            'product_name' => $request->product_name,
            'category_id' => $request->category,
            'product_description' => $request->product_description,
            'product_price' => $request->product_price,
            'product_image' => $product_name.'.'.$ext
        ]);

        return redirect('/manage');
    }

    public function updateProduct(Request $request){
        $id = $request->route('id');
        $product = Product::where('id', $id)->first()->product_image;
        Storage::delete('public/product_images/'.$product);
        $request->validate([
            'product_name' => 'required',
            'category' => 'required',
            'product_description' => 'required',
            'product_price' => 'required|integer',
            'product_image' => 'required|image|mimes:jpeg, jpg, png'
        ]);
        $product_name = $request->product_name;
        $img = $request->product_image;

        $ext = $request->file('product_image')->extension();

        Storage::putFileAs('/public/product_images', $img, $product_name.'.'.$ext);

        DB::table('products')->where('id', $id)->update([
            'product_name' => $request->product_name,
            'category_id' => $request->category,
            'product_description' => $request->product_description,
            'product_price' => $request->product_price,
            'product_image' => $product_name.'.'.$ext
        ]);

        return redirect('/manage');
    }

    public function deleteProduct(Request $request){
        $id = $request->route('id');
        $product = Product::where('id', $id)->first()->product_image;
        Storage::delete('public/product_images/'.$product);
        DB::table('products')->where('id', '=', $id)->delete();
        return redirect('/manage');
    }

    public function cartAdd(Request $request){

        $id = $request->route('product_id');
        $quantity = $request->quantity;

        // Fetch cart from session, new if empty
        $cart = array();

        if($request->session()->has('cart')){
            $cart = session('cart');
        }

        // Fetch product from db
        $product = Product::where('id', $id)->first();

        $flag = false;

        // If item already exists in cart, add to quantity
        foreach($cart as $cartItem){
            if($cartItem->product->id == $id){
                $cartItem->quantity += $quantity;
                $flag = true;
                break;
            }
        }

        // If it doesn't exist in cart yet, add it as new item
        if(!$flag){
            $toAdd = new CartProduct();
            $toAdd->product = $product;
            $toAdd->quantity = $quantity;
            $toAdd->total_price = $product->product_price * $quantity;

            array_push($cart, $toAdd);
        }

        // Update cart, flash success message
        session(['cart' => $cart]);
        $request->session()->flash('success', 'Item inserted to cart successfully');

        return redirect()->back();

    }

    public function cartDelete(Request $request){

        $id = $request->route('product_id');
        $cart = session('cart');

        // Search cart for corresponding entry and delete
        foreach($cart as $i => $cartEntry){
            if($cartEntry->product->id == $id){
                unset($cart[$i]);
            }
        }

        // Update cart, flash success message
        session(['cart' => $cart]);
        $request->session()->flash('success', 'Item deleted from cart successfully');

        return redirect()->back();
    }
}
