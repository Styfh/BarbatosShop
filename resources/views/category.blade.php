@extends('layouts.master')
@extends('components.navbar')

@section('title', 'Category')

@section('main')
<main>
    <div class="card mb-4">
        <div class="card-header">
            {{ $category->category_name }}
        </div>
        <div class="card-body">
            @foreach ($products as $product)
                @if($product->category_id == $category->id)
                <div class ="card" style="width: 12rem;">
                    <img src="{{ asset('storage/product_images/'.$product->product_image)}}" class="card-img-top"/>
                    <div class="card-body">
                        <p>{{ $product->product_name }}</p>
                        <strong>{{ "IDR ".$product->product_price }}</strong>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</main>
@endsection
