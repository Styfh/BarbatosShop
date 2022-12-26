@extends('layouts.master')

@section('title', 'Search')

@section('main')

@include('components.navbar')

<main>

    <form action="/search" method="GET">
        @csrf
        <form action="/search" method="GET">
            @csrf
            <div class="input-group mb-4">
                <input type="text" class="form-control" name="search" value="{{ $input }}">
                <button class="btn btn-secondary" type="submit" id="search-btn">
                    <img src="{{ asset('images/search_icon.png') }}" style="width: 2rem; height: 2rem">
                </button>
            </div>
        </form>
    </form>

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
