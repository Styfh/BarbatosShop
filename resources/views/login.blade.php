@extends('layouts.master')
@extends('components.navbar')

@section('title', 'Login')

@section('style')
<link href="{{asset('css/login.css')}}" rel="stylesheet">
@endsection

@section('main')
<main>


    <div class="card" style="width: 36rem;">

        <div class="card-header text-center">
            Login
        </div>
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">

            <form action="/login" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{Cookie::get('emailcookie') !== null ? Cookie::get('emailcookie') : ""}}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-light" id="submit">Submit</button>
            </form>

            <p class="card-text text-center">Don't have an account? Click <a href="/register"> here</a></p>

        </div>

    </div>

</main>
@endsection
