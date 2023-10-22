@extends('frontend.layouts.master')

@section('title','Phong Vũ || Product Detail')

@section('main-content')
<div class="container mb-5">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb sub__nav bg-none mb-0">
                    <li class="breadcrumb-item rounded-circle">
                        <a href="#" class="icon__home"><i class="fas fa-home-lg"></i></a>
                    </li>
                    <li class="breadcrumb-item active icon__home--active">
                        <i class="fal fa-angle-right"></i>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{$product_detail->name}}
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- end .row sub__nav -->
    <div class="row ">
        <div class="col-md-9 mb-3">
            <div class="row bg-white rounded ml-0">
                <div class="col-md-5">
                    <div class="gallerys pl-3 pr-3">
                        <div class="gallery__view ">
                            <img src="{{$product_detail->photo}}" alt="" id="js-view-image">
                        </div>
                        @if(count($product_detail->productImages) > 0)
                        <div class="gallery__nav d-flex mb-3 pb-3">
                            @foreach($product_detail->productImages as $productImageItem)
                            <div class="image__item js-active-view active" data-src="{{$productImageItem->image_path}}"
                                data-toggle="modal">
                                <img src="{{$productImageItem->image_path}}" alt="">
                            </div>
                            @endforeach
                        </div>
                        @endif
                        <div class="short__desc p-2 mb-3">
                            {!! $product_detail->summary !!}
                        </div>
                    </div>
                </div>
                <!-- end col5 -->
                <div class="col-md-7 pr-3">
                    <div class="product__info pt-4">
                        <div class="product__name ">
                            {{$product_detail->name}}
                        </div>
                        <div class="product__brand">
                            Thương hiệu: <a href="#">{{$product_detail->brand->name}}</a> | SKU: 1702783
                        </div>
                        <div class="product__price new__price">
                            <strong
                                class="">{{number_format($product_detail->price - ($product_detail->discount * $product_detail->price) / 100)}}
                                ₫</strong>
                        </div>
                        <div class="product__price old__price pb-3 mb-3">
                            <span class="">{{number_format($product_detail->price)}} ₫</span>
                            <i class="discount"> -{{$product_detail->discount}}%</i>
                        </div>
                        <div class="attached__promotion">
                            <div class="title font-weight-bold mb-2">Chọn thêm 1 trong những khuyến mãi sau</div>
                            <div class="gifts">
                                <div class="gift check d-flex p-3 mb-3 js-check-gift">
                                    <div class="gift__icon"><i class="fas fa-gifts"></i></div>
                                    <div class="gift__content">
                                        <span>Giảm giá</span>
                                        <p class="mb-0">Giảm giá trực tiếp <span>800.000 ₫</span></p>
                                    </div>
                                </div>
                                <div class="gift d-flex p-3 mb-3 js-check-gift">
                                    <div class="gift__icon"><i class="fas fa-gifts"></i></div>
                                    <div class="gift__content">
                                        <span>Giảm giá</span>
                                        <p class="mb-0">Giảm giá trực tiếp <span>800.000 ₫</span></p>
                                    </div>
                                </div>
                                <div class="gift d-flex p-3 mb-3 js-check-gift">
                                    <div class="gift__icon"><i class="fas fa-gifts"></i></div>
                                    <div class="gift__content">
                                        <span>Giảm giá</span>
                                        <p class="mb-0">Giảm giá trực tiếp <span>800.000 ₫</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('add-to-cart', ['slug' => $product_detail->slug]) }}" method="get">
                            @csrf
                            <button class="btn btn-primary d-block mb-3 w-100">Thêm vào giỏ hàng</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="other__services p-3 ">
                <div class="freeship pb-3 mb-3">
                    <i class="fad fa-shipping-fast"></i>
                    Sản phẩm được miễn phí giao hàng
                </div>
                <div class="sale__policy mb-3">
                    <div class="title mb-2">Chính sạc bán hàng</div>
                    <div class="policy__option">
                        <i class="fal fa-shield-check"></i>
                        Cam kết hàng chính hãng
                    </div>
                    <div class="policy__option">
                        <i class="far fa-repeat-1"></i>
                        Đổi trả trong vòng 10 ngày
                    </div>
                    <div class="policy__option">
                        <i class="fal fa-truck-container"></i>
                        Miễn phí ship cho đơn trên 800k
                    </div>
                </div>
                <div class="services">
                    <div class="title mb-2">Dịch vụ khác</div>
                    <div class="services__option">
                        <i class="fal fa-cogs"></i>
                        Sửa chữa đồng giá 150.000đ
                    </div>
                    <div class="services__option">
                        <i class="fal fa-laptop"></i>
                        Vệ sinh máy laptop
                    </div>
                    <div class="services__option">
                        <i class="fal fa-shield-check"></i>
                        Bảo hành tại nhà
                    </div>
                    <a href="">Xem chi tiết</a>
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <div class="bg-white rounded">
                <div class="row ">
                    <div class="col-md-8">
                        <div class="title">
                            <h3 class="text--title m-0 ml-3">Mô tả sản phẩm</h3>
                        </div>
                        <div class="product__desc p-3">
                            <article class="article">{!! $product_detail->description !!}</article>
                            <p class="read-more js-read-more">Đọc thêm <i class="fas fa-caret-down"></i></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="title">
                            <h3 class="text--title m-0 ml-3">Thông số kỹ thuật</h3>
                        </div>
                        <div class="specifications p-3">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Thương hiệu</td>
                                        <td>HP</td>
                                    </tr>
                                    <tr>
                                        <td>Thương hiệu</td>
                                        <td>HP</td>
                                    </tr>
                                    <tr>
                                        <td>Thương hiệu</td>
                                        <td>HP</td>
                                    </tr>
                                    <tr>
                                        <td>Thương hiệu</td>
                                        <td>HP</td>
                                    </tr>
                                    <tr>
                                        <td>Thương hiệu</td>
                                        <td>HP</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="read-more read__specifications js-show-modal-specifications" data-toggle="modal">Đọc
                            thêm <i class="fas fa-caret-down"></i></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="same__brand rounded">
                <div class="title">
                    <h3 class="text--title m-0 ml-3">Cùng thương hiệu {{$product_detail->brand->name}}</h3>
                    <a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a>
                </div>
                @if(count($product_brands) > 0)
                <div class="owl-carousel owl-theme product__carousel--same-brand js-product-carousel"
                    id="js-same-brand">
                    <div class="item">
                        <div class="products">
                            @foreach($product_brands as $product_brand)
                            <a class="product p-3 d-flex flex-column mb-3" href="">
                                <div class="product__image">
                                    <figure class="box__image ">
                                        <img class="lazyload zoom banner__image " data-src="{{$product_brand->photo}}"
                                            alt=" " loading="lazy">
                                    </figure>
                                    <div class="boxed__save shadow-sm rounded p-2">
                                        <div class="text__save"> TIẾT KIỆM </div>
                                        <div class="price_save">
                                            {{number_format($product_brand->price * $product_brand->discount)}} ₫</div>
                                    </div>
                                </div>
                                <div class="product__content d-flex flex-column justify-content-between">
                                    <div class="product__top">
                                        <div class="product__name">{{$product_brand->name}}</div>
                                    </div>
                                    <div class="product__bottom">
                                        <div class="product__price new__price">
                                            <strong
                                                class="">{{number_format($product_brand->price - ($product_brand->price * $product_brand->discount) / 100)}}
                                                ₫</strong>
                                            <i>Freeship</i>
                                        </div>
                                        <div class="product__price old__price">
                                            <span class="">{{$product_brand->price}} ₫</span>
                                            <i class="discount">-{{$product_brand->discount}}%</i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
