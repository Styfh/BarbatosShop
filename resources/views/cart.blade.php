@extends('layouts.master')

@section('main')
@include('components.navbar')
<main>

    @include('components.success')

    @foreach ($cart as $cartEntry)
    <div class="card flex-row mx-auto my-4" style="width: 42rem; padding: 0.5rem;">
        <div style="padding: 0;">
            <img src="{{ asset('storage/product_images/'.$cartEntry->product->product_image)}}" style="width: 9rem; height: 9rem;">
        </div>
        <div class="card-block" style="padding: 1rem;">
          <h4>{{ $cartEntry->product->product_name }}</h4>
          <p class="card-text">Quantity: {{ $cartEntry->quantity }}</p>
          <p class="card-text">Total Price: IDR {{ $cartEntry->total_price }}</p>
        </div>

        <div style="margin: 0 0 0 auto;">
            <form action="/cart-remove/{{ $cartEntry->product->id }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-danger" style="padding: 0.25rem 0.5rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
    @endforeach


</main>
<footer style="background: white; position: absolute; bottom: 0; width: 100vw; padding: 0.5rem;">
    <div style="display: flex; justify-content: center;">
        <div class="mx-3 my-auto">
            <p class="my-auto">Final Total: IDR {{ $total }}</p>
        </div>
        <form action="/purchase" method="POST">
            @csrf
            <div class="mx-3 my-auto">
                <input type="submit" value="Purchase" class="btn btn-outline-success my-auto">
            </div>
        </form>
    </div>
</footer>
@endsection
