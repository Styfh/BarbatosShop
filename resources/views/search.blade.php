@extends('layouts.master')

@section('title', 'Search')

@section('main')

@include('components.navbar')

<main>
    <div class="card mb-4">
        <div class="card-header">
            Search Results
        </div>
        <div class="card-body">
            @foreach ($products as $product)
                @include('components.product_card')
            @endforeach
        </div>
    </div>

    {{$products->links()}}
</main>

@endsection
