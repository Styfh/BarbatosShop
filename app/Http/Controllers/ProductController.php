<?php

namespace App\Http\Controllers;

use App\Models\CartProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

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
