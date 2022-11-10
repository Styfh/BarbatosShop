@extends('layouts.master')
@extends('components.navbar')

@section('title', 'Home')

@section('style')
<link href="{{asset('css/index.css')}}" rel="stylesheet">
@endsection

@section('main')
<main>

    <form>
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control">
            <button class="btn btn-secondary" type="button" id="search-btn">
                <img src="{{ asset('images/search_icon.png') }}" style="width: 2rem; height: 2rem">
            </button>
        </div>
    </form>

</main>
@endsection
