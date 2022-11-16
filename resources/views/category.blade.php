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
                    @include('components.product_card')
                @endif
            @endforeach
        </div>
    </div>
</main>
@endsection
