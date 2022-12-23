@extends('layouts.master')
@extends('components.navbar')

@section('title', 'Add Product')

@section('style')
<link href="{{asset('css/index.css')}}" rel="stylesheet">
@endsection

@section('main')

<main>
    <div>
        <a type="button" href="/manage" class="btn btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
            Back
        </a>
    </div>
    <br>
    <div class="card" style="width: 75rem;">
        <div class="card-header text-center">
            Add Product
        </div>
        <div class="card-body">
            <form action="/add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="product_name">Name</label><br>
                    <input type="text" class="form-control" name="product_name"><br>
                </div>
                <div class="form-group">
                    <label for="category">Category</label><br>
                    <select class="form-select" name="category" id="category">
                        @foreach ($categories as $category)
                            <option name="category" value="{{$category->id}}">{{$category->category_name}}</option>\
                        @endforeach
                    </select>
                    <br>
                </div>
                <div class="form-group">
                    <label for="product_description">Detail</label><br>
                    <textarea class="form-control" name="product_description" rows="3"></textarea><br>
                </div>
                <div class="form-group">
                    <label for="product_price">Price</label><br>
                    <input type="text" class="form-control" name="product_price"><br>
                </div>
                <div class="form-group">
                    <label for="product_image">Photo</label><br>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="product_image" name="product_image">
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-secondary">Add</button>
            </form>
            <br>
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</main>

@endsection
