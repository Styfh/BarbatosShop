@extends('layouts.master')

@section('title', 'Product Detail')

@section('style')
<link rel="stylesheet" href="{{ asset('css/product_detail.css') }}">
@endsection

@section('main')
@include('components.navbar')
<main>

    @include('components.success')

    {{-- Product Card --}}
    <div class="card mb-4" style="padding: 1.5rem; margin: 2.5% auto; max-height: 75vh;">
        <div class="card-body">
            <div style="display: flex;">
                <div style="margin-right: 5rem;">
                    <img src="{{ asset('storage/product_images/'.$product->product_image)}}">
                </div>
                <div>
                    <h3>{{ $product->product_name }}</h3>
                    <table style="margin: 0.5rem 0;">
                        <tr>
                            <td class="label">Detail</td>
                            <td>{{ $product->product_description }}</td>
                        </tr>
                        <tr>
                            <td class="label">Price</td>
                            <td>IDR {{ $product->product_price }}</td>
                        </tr>

                        @if(Auth::user()->user_role == 'customer')
                        <form action="/cart-add/{{ $product->id }}" method="POST">
                            @csrf
                            <tr>
                                    <td class="label">Qty</td>
                                    <td>
                                        <input type="number" name="quantity" id="quantity">
                                    </td>
                                </tr>
                            </table>
                            <input class="btn btn-outline-secondary" type="submit" value="Purchase">
                        </form>
                        @endif

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
