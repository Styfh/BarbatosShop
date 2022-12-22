@extends('layouts.master')
@extends('components.navbar')

@section('title', 'Manage Product')

@section('style')
<link href="{{asset('css/index.css')}}" rel="stylesheet">
@endsection

@section('main')
<main>
    @csrf
    <nav style="width:75rem;">
        <form class="form-inline d-flex" style="justify-content: space-between">
          <div class="input-group" style="width: 15rem; height:1rem;">
            <input type="text" class="form-control" placeholder="Product Name" aria-label="Username" aria-describedby="basic-addon1">
            <div class="input-group-prepend">
                <button class="btn btn-secondary" type="button" id="search-btn">
                    <img src="{{ asset('images/search_icon.png') }}" style="width: 2rem; height: 2rem">
                </button>
            </div>
          </div>
            <div>
                <a class="btn btn-secondary" type="submit" href="/add" style="width: 8rem">Add Product
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                    </svg>
                </a>
            </div>
        </form>
    </nav>

    <div>
        @foreach ($product as $product)
            <div class="card flex-row mx-auto my-3" style="width: 75rem">
                    <div class="card-header" style="padding: 0;">
                        <img src="{{ asset('storage/product_images/'.$product->product_image)}}" style="width: 170px; height: 150px">
                    </div>
                    <div class="card-block" style="padding: 1rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                        </div>
                    </div>
                    <div style="margin: 1rem 0.5rem 0 auto;">
                        <form action=""></form>
                            <a type="button" href="/update/{{ $product->id }}" class="btn btn-outline-warning" style="margin-right: 5px">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                              </svg>
                            </a>
                            <a type="button" href="/delete/{{ $product->id }}" class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

</main>
@endsection
