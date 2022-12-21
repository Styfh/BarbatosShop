@extends('layouts.master')
@extends('components.navbar')

@section('title', 'Product Detail')

@section('style')
<link rel="stylesheet" href="{{ asset('css/product_detail.css') }}">
@endsection

@section('main')
<main>
    <div class="card mb-4" style="padding: 1.5rem; margin: 2.5% auto; max-height: 75vh;">
        <div class="card-body">
            <div style="display: flex;">
                <div style="margin-right: 5rem;">
                    <img src="{{ asset('storage/product_images/'.$product->product_image)}}">
                </div>
                <div>
                    <h3>{{ $product->product_name }}</h3>
                    <form action="">
                        @csrf
                        <table style="margin: 0.5rem 0;">
                            <tr>
                                <td class="label">Detail</td>
                                <td>{{ $product->product_description }}</td>
                            </tr>
                            <tr>
                                <td class="label">Price</td>
                                <td>IDR {{ $product->product_price }}</td>
                            </tr>
                            <tr>
                                <td class="label">Qty</td>
                                <td>
                                    <input type="number" name="quantity" id="quantity">
                                </td>
                            </tr>
                        </table>
                        <input class="btn btn-outline-secondary" type="submit" value="Purchase">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
