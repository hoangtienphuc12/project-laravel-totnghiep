@extends('layouts.master')
@section('title')
    Register
@endsection
<style>
    .s-register{
        max-width: 768px;
        width: 100%;
        margin: auto;
        height: 500px;
        background-color: #FFF;

    }
</style>
@section('content')
    <div class="container-fluid">
        <form action="/register" method="post">
            @csrf
            <div class="s-register">
                @include('layouts.message')
                <h3>Register</h3>
                <div class="row">
                    <div class="w-25"><label for="">User Name</label></div>
                    <div class="w-75"><input type="text" class="form-control" name="name" required placeholder="User Name"></div>
                </div>
                <div class="row">
                    <div class="w-25"><label for="">Email</label></div>
                    <div class="w-75"><input type="text" class="form-control" name="email" required placeholder="Your Email"></div>
                </div>
                <div class="row">
                    <div class="w-25"><label for="">Password</label></div>
                    <div class="w-75"><input type="password" class="form-control" name="password" required placeholder="Password"></div>
                </div>
                <div class="row">
                    <div class="w-25"><label for="">Confirm Passowrd</label></div>
                    <div class="w-75"><input type="password" class="form-control" name="confirm_password" required placeholder="Password 2"></div>
                </div>
                <div class="row text-center">
                    <button type="submit" class="btn btn-primary">Dang Ky</button>
                </div>
            </div>
        </form>
    </div>
@endsection