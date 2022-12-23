@extends('layouts.master')

@section('title', 'Profile')

@section('style')
<link href="{{asset('css/index.css')}}" rel="stylesheet">
@endsection

@section('main')
@include('components.navbar')
<main>
    <div class="card" style="width: 36rem; margin-left: 18rem">

        <div class="card-header text-center">
            Profile
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="user_name">Name</label><br>
                <input type="text" class="form-control" name="user_name" value="{{ $user->user_name }}" disabled><br>
            </div>
            <div class="form-group">
                <label for="user_email">Email</label><br>
                <input type="text" class="form-control" name="user_email" value="{{ $user->user_email }}" disabled><br>
            </div>
            <div class="form-group">
                <label for="user_gender">Gender</label><br>
                <input type="text" class="form-control" name="user_gender" value="{{ $user->user_gender }}" disabled><br>
            </div>
            <div class="form-group">
                <label for="user_dob">Date of Birth</label><br>
                <input type="text" class="form-control" name="user_dob" value="{{ $user->user_dob }}" disabled><br>
            </div>
            <div class="form-group">
                <label for="user_country">Country</label><br>
                <input type="text" class="form-control" name="user_country" value="{{ $user->user_country }}" disabled><br>
            </div>

        </div>

    </div>
</main>
@endsection
