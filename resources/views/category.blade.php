@extends('layouts.master')

@section('title', 'Category')

@section('main')
@include('components.navbar')
<main>

    <div class="card mb-4">
        <div class="card-header">
            {{ $category->category_name }}
        </div>
        <div class="card-body">
            @foreach ($products as $product)
                @include('components.product_card')
            @endforeach
        </div>
    </div>

    {{ $products->links() }}

</main>
@endsection
