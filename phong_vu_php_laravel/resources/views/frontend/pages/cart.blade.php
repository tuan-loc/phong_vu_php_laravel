@extends('frontend.layouts.master')

@section('title','Phong Vũ || Cart page')

@section('css')
<link rel="stylesheet" href="{{ asset('frontend-vendor/css/cart.css') }}">
@endsection

@section('main-content')
<div class="contact pb-5">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-12 pl-md-0">
                <div class="nav_ic">
                    <ul>
                        <li> <a href="#" class="icon__home"><i class="fas fa-home-lg"></i></a> </li>
                        <li> <a href=""><i class="fal fa-angle-right"></i></a> </li>
                        <li> <a href=""> <span>Giỏ hàng</span> </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-3 ">
            <div class="col-md-7 p-1">
                <div class="d-flex bd-highlight">
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <h4>Giỏ hàng của bạn</h4>
                    </div>
                    <div class=" oio p-2 bd-highlight"><a href=""> <span>Xóa tất cả</span> </a></div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 ">
                <div class="cart">
                    <div class="flex-container">
                        <div>
                            <form action="">
                                <label for="c1"></label>
                                <input type="checkbox" id="c1" />
                            </form>
                        </div>
                        <div>
                            <div class="iu">
                                <img src="{{ asset('frontend-vendor/images/so.png') }}" alt="">
                            </div>
                        </div>
                        <div class="au">
                            <span style="font-weight:600 ;">Phong Vũ</span>
                            <img src="{{ asset('frontend-vendor/images/xanh.png') }}" alt="">
                        </div>
                    </div>
                    <hr style="margin-top: 0px;">
                    <table class="tablee table table-borderless">
                        <tbody>
                            @if(count($carts) > 0)
                            @foreach($carts as $cart)
                            <tr>
                                <td scope="row"><input type="checkbox" id="c1" /> </td>
                                <td><img class="one" src="{{$cart->product->photo}}" alt="{{$cart->product->name}}">
                                </td>
                                <td><span class="w">{{$cart->product->name}}</span></td>
                                <td>
                                    <div class="sl">
                                        <button class="det"><svg fill="none" viewBox="0 0 24 24" size="16"
                                                class="css-1mzhsqx" color="textPrimary" height="16" width="16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H20C20.4142 11.25 20.75 11.5858 20.75 12C20.75 12.4142 20.4142 12.75 20 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12Z"
                                                    fill="#82869E"></path>
                                            </svg></button>
                                        <input type="number" class="hy" value="{{$cart->quantity}}">
                                        <button class="det"><svg fill="none" viewBox="0 0 24 24" size="16"
                                                class="css-1mzhsqx" color="textPrimary" height="16" width="16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12.75 4C12.75 3.58579 12.4142 3.25 12 3.25C11.5858 3.25 11.25 3.58579 11.25 4V11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H11.25V20C11.25 20.4142 11.5858 20.75 12 20.75C12.4142 20.75 12.75 20.4142 12.75 20V12.75H20C20.4142 12.75 20.75 12.4142 20.75 12C20.75 11.5858 20.4142 11.25 20 11.25H12.75V4Z"
                                                    fill="#82869E"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                                <td>{{number_format($cart->amount)}} ₫</td>
                            </tr>
                            @endforeach
                            @else
                            <span>Giỏ hàng trống. <a href="{{ route('product-lists') }}">Danh sách sản phẩm</a></span>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-4">
                <div class="sale">
                    <div class="d-flex flex-column bd-highlight mb-3">
                        <div class=" chinh p-2 bd-highlight">
                            <h5>Mã giảm giá</h5>
                        </div>
                        <div class="p-2 bd-highlight">
                            <div class="ma_sale">
                                <form action="">

                                    <input type="text" placeholder="Nhập mã của bạn">
                                    <button class="btn btn-primary">Áp dụng ngay</button>
                                </form>
                            </div>
                            <div class="css-1ncmufo">
                                <div width="100%" color="#E4E5F0" class="css-1fm9yfq"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pay">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <h5>Thanh toán</h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tạm tính</td>
                                <td class="ping">{{number_format($total)}} đ</td>
                            </tr>
                            <tr>
                                <td>Thành tiền</td>
                                <td class="pingg">534.000 đ <p>(Đã bao gồm VAT)</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><button type="button">TIẾP TỤC THANH TOÁN</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
