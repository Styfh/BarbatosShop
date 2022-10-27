@extends('layouts.master')
@extends('components.navbar')

@section('style')
<link href="{{asset('css/login.css')}}" rel="stylesheet">
@endsection

@section('main')
<main>


    <div class="card" style="width: 36rem;">

        <div class="card-header text-center">
            Login
        </div>

        <div class="card-body">

            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="password" name="password">
                    <label class="form-check-label" for="password">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-light" id="submit">Submit</button>
            </form>

            <p class="card-text text-center">Don't have an account? Click <a href="/register"> here</a></p>

        </div>

    </div>

</main>
@endsection
