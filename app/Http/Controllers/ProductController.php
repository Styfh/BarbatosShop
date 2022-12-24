<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

}
