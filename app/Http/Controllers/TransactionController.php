<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //

    public function cartAdd(Request $request){

        $request->validate([
            "quantity" => "required|min:1"
        ]);

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
            $toAdd = new TransactionDetail();
            $toAdd->product_id = $id;
            $toAdd->quantity = $quantity;

            array_push($cart, $toAdd);
        }

        // Update cart
        session(['cart' => $cart]);

        // Set success message
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

        // Update cart
        session(['cart' => $cart]);

        // Set success message
        $request->session()->flash('success', 'Item deleted from cart successfully');

        return redirect()->back();
    }

    public function cartPurchase(Request $request){

        $id = Auth::id();
        $cart = session('cart');

        // Cart empty validation
        if(sizeof($cart) == 0){
            return redirect()->back()->withErrors([
                'cartEmpty' => 'Cart is empty, cannot purchase.'
            ]);
        }

        // Push new header
        $newPurchase = new TransactionHeader();
        $newPurchase->transaction_date = Carbon::now()->toDateTimeString();
        $newPurchase->customer_id = $id;
        $newPurchase->push();

        // Fetch id of the new header
        $np_id = TransactionHeader::where('transaction_date', $newPurchase->transaction_date)
            ->where('customer_id', $id)
            ->first()
            ->id;

        // Create details with fetched id
        foreach($cart as $cartEntry){

            $cartEntry->transaction_id = $np_id;
            $cartEntry->push();

        }

        // Empty cart
        $request->session()->forget('cart');

        // Set success message
        $request->session()->flash('success', 'Purchased items successfully');

        return redirect('/');

    }

}
