@extends('frontend.layouts.master')

@section('title','E-SHOP || Register page')

@section('css')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="{{ asset('frontend-vendor/css/dang-ki.css') }}">
@endsection

@section('main-content')
<div class="container">
    <div class="bic my-5">
        <div class="row justify-content-center">
            <div class="col-md-6  pr-0">
                <div class="cat">
                    <h4 style="text-align: center; margin-bottom: 30px;"><img
                            src="{{ asset('frontend-vendor/images/dangkyngay.png') }}" alt=""></h4>
                    <form action="{{ route('register.submit') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Họ tên" required="required"
                                value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" id="exampleInputPassword1"
                                placeholder="Email" required="required" value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Mật khẩu" required="required" value="{{ old('password') }}">
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" class="form-control"
                                id="exampleInputPassword1" placeholder="Nhập lại mật khẩu" required="required"
                                value="{{ old('password_confirmation') }}">
                            @error('password_confirmation')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button class="btc mt-2">Đăng ký</button>
                        <hr>
                        <div class="col-12">
                            <div class="form-group login-btn">
                                <a href="" class="btn btn-facebook"><i class="fab fa-facebook"></i></a>
                                <a href="" class="btn btn-github"><i class="fab fa-github"></i></a>
                                <a href="" class="btn btn-google"><i class="fab fa-google"></i></a>
                                <span class="float-right">Bạn đã có tài khoản? <a href="{{ route('login.form') }}">Đăng
                                        nhập ngay</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cats">
                    <img src="{{ asset('frontend-vendor/images/cho2.jpeg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
