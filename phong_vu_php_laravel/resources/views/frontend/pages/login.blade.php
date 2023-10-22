@extends('frontend.layouts.master')

@section('title', 'Phong Vũ || Login Page')

@section('css')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="{{ asset('frontend-vendor/css/dang-nhap.css') }}">
@endsection

@section('main-content')
<div class="container">
    <div class="bic border my-5">
        <div class="row justify-content-center">
            <div class="col-md-6  pr-0">
                <div class="cats">
                    <img src="{{ asset('frontend-vendor/images/cho.jpeg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="cat">
                    <h4 style="text-align: center; margin-bottom: 30px;">Welcome Back!</h4>
                    <form action="{{ route('login.submit') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter email address..." required="required" value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" required="required" value="{{ old('password') }}">
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="custom-control custom-checkbox small">
                            <input class="custom-control-input" type="checkbox" value="1" name="news"
                                id="user_remember_me">
                            <label class="custom-control-label" for="user_remember_me">Remember Me</label>
                        </div>
                        <button class="btc mt-2">Đăng nhập</button>
                        <hr>
                        <div class="col-12">
                            <div class="form-group login-btn">
                                <a href="" class="btn btn-facebook"><i class="fab fa-facebook"></i></a>
                                <a href="" class="btn btn-github"><i class="fab fa-github"></i></a>
                                <a href="" class="btn btn-google"><i class="fab fa-google"></i></a>
                                <span class="float-right">Bạn chưa có tài khoản? <a
                                        href="{{ route('register.form') }}">Đăng
                                        ký ngay</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
