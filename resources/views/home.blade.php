@extends('layouts.master')
@extends('components.navbar')

@section('title', 'Home')

@section('style')
<link href="{{asset('css/index.css')}}" rel="stylesheet">
@endsection

@section('main')
<main>

    <form>
        @csrf
        <div class="input-group mb-4">
            <input type="text" class="form-control">
            <button class="btn btn-secondary" type="button" id="search-btn">
                <img src="{{ asset('images/search_icon.png') }}" style="width: 2rem; height: 2rem">
            </button>
        </div>
    </form>

    @foreach ($categories as $category)

    <div class="card mb-4">
        <div class="card-header">
            {{ $category->category_name }}

            <a href="category/{{ $category->id }}" style="text-decoration: none">View all</a>
        </div>
        <div class="card-body" style="display: flex; overflow-x: scroll;">
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

    @endforeach

</main>
@endsection
