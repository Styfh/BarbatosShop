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
            <div class="row row-cols-5 mx-auto">
                @foreach ($products as $product)
                <div class="col mb-3">
                    @include('components.product_card')
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{ $products->links() }}

</main>
@endsection
