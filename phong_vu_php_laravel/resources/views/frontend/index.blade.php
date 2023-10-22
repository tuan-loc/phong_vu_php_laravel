@extends('frontend.layouts.master')

@section('title','Phong Vũ || Home page')

@section('main-content')
<section class="carousel mb-5">
    @if(count($banner_headers) > 0)
    <div id="js-home-carousel" class="owl-carousel owl-theme">
        @foreach($main_carousels as $main_carousel)
        <div class="item">
            <a href="" class="carousel__link">
                <img src="{{$main_carousel->photo}}" alt="" class="carousel__image">
            </a>
        </div>
        @endforeach
    </div>
    @endif

    <div class="nav-aside container d-flex justify-content-between align-items-start pt-3">
        @if($categories)
        <ul class="nav flex-column align-items-center bg-white nav__category">
            @foreach($categories as $category)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('product-category', $category->id) }}">
                    <i class="fal fa-dryer-alt"></i> {{ $category->name }}
                </a>
            </li>
            @endforeach
        </ul>
        @endif

        @if(count($carousel_rights) > 0)
        <aside class="banner banner__right ">
            @foreach($carousel_rights as $carousel_right)
            <div class="banner__item ">
                <a href="" class="banner__link">
                    <figure class="box__image">
                        <img class="zoom banner__image" src="{{ $carousel_right->photo }}" alt="">
                    </figure>
                </a>
            </div>
            @endforeach
        </aside>
        @endif
    </div>

    @if(count($banner_bottoms) > 0)
    <div class="container">
        <div class="banner banner__bottom mb-5">
            @foreach($banner_bottoms as $banner_bottom)
            <div class="banner__item ">
                <a href=" " class="banner__link ">
                    <figure class="box__image ">
                        <img class="zoom banner__image " src="{{$banner_bottom->photo}}" alt=" ">
                    </figure>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endif
</section>

<div class="container mt-10 mb-5">
    <div class="tab__carousel rounded bg-white" id="js-tabs-image">
        <nav class="rounded-top">
            <div class="nav nav-tabs d-flex flex-nowrap" id="nav-tab" role="tablist">
                <a class="nav-link active" id="js-nav-home-tab" data-bg="{{$banner_tabs[0]->photo}}" data-toggle="tab"
                    href="#js-nav-home" role="tab" aria-controls="js-nav-home" aria-selected="true">
                    <h4 class="title-tab">{{ $categories[0]->name }}</h4>
                    <div class="sub-title">Ưu đãi đến 4.8 Triệu</div>
                </a>
                <a class="nav-link" id="js-nav-profile-tab" data-bg="{{$banner_tabs[1]->photo}}" data-toggle="tab"
                    href="#js-nav-profile" role="tab" aria-controls="js-nav-profile" aria-selected="false">
                    <h4 class="title-tab">{{ $categories[1]->name }}</h4>
                    <div class="sub-title">Ưu đãi đến 46%</div>
                </a>
                <a class="nav-link" id="js-nav-contact-tab" data-bg="{{$banner_tabs[2]->photo}}" data-toggle="tab"
                    href="#js-nav-contact" role="tab" aria-controls="js-nav-contact" aria-selected="false">
                    <h4 class="title-tab">{{ $categories[2]->name }}</h4>
                    <div class="sub-title">Ưu đãi đến 9 Triệu</div>
                </a>
                <a class="nav-link" id="js-nav-contact2-tab" data-bg="{{$banner_tabs[3]->photo}}" data-toggle="tab"
                    href="#js-nav-contact2" role="tab" aria-controls="js-nav-contact2" aria-selected="false">
                    <h4 class="title-tab">{{ $categories[3]->name }}</h4>
                    <div class="sub-title">Ưu đãi đến 48%</div>
                </a>
                <a class="nav-link" id="js-nav-contact3-tab" data-bg="{{$banner_tabs[4]->photo}}" data-toggle="tab"
                    href="#js-nav-contact3" role="tab" aria-controls="js-nav-contact3" aria-selected="false">
                    <h4 class="title-tab">{{ $categories[4]->name }}</h4>
                    <div class="sub-title">Ưu đãi đến 45%</div>
                </a>
            </div>
        </nav>

        <div class="tab-content p-3 pt-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="js-nav-home" role="tabpanel" aria-labelledby="js-nav-home-tab">
                <div class="d-flex flex-nowrap align-items-center align-content-center">
                    <div class="special__offer">
                        <div class="time__boxed">
                            <div class="boxed__title mb-2">
                                Kết thúc sau <span class="time__number" id="js-nav-home-days" id=""> </span> ngày
                            </div>
                            <div class="boxed__content">
                                <div class="boxed__item boxed__item--hour" id="js-nav-home-hours"> </div>
                                <div class="boxed__item boxed__item--minute" id="js-nav-home-minutes"> </div>
                                <div class="boxed__item boxed__item--seconds" id="js-nav-home-seconds"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end .special__offer -->
                    <div class="product__carousel owl-carousel owl-theme js-product-carousel">
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                    </div>
                    <!-- end .product_carousel -->
                    <a href="" class="see-more">Xem thêm <i class="fal fa-angle-right"></i></a>
                </div>
            </div>
            <div class="tab-pane fade" id="js-nav-profile" role="tabpanel" aria-labelledby="js-nav-profile-tab">
                <div class="d-flex flex-nowrap align-items-center align-content-center">
                    <div class="special__offer">
                        <div class="boxed__title mb-2">
                            Kết thúc sau <span class="time__number" id="js-nav-profile-days" id=""> </span> ngày
                        </div>
                        <div class="boxed__content">
                            <div class="boxed__item boxed__item--hour" id="js-nav-profile-hours"> </div>
                            <div class="boxed__item boxed__item--minute" id="js-nav-profile-minutes"> </div>
                            <div class="boxed__item boxed__item--seconds" id="js-nav-profile-seconds"></div>
                        </div>
                    </div>
                    <!-- end .special__offer -->

                    <div class="product__carousel owl-carousel owl-theme js-product-carousel">
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (4).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (4).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (4).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (4).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (4).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (4).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (4).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (4).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (4).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (4).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (4).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (4).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                    </div>
                    <!-- end .product_carousel -->
                    <a href="" class="see-more">Xem thêm <i class="fal fa-angle-right"></i></a>

                </div>

            </div>
            <div class="tab-pane fade" id="js-nav-contact" role="tabpanel" aria-labelledby="js-nav-contact-tab">
                <div class="d-flex flex-nowrap align-items-center align-content-center">
                    <div class="special__offer">
                        <div class="time__boxed">
                            <div class="boxed__title mb-2">
                                Kết thúc sau <span class="time__number" id="js-nav-contact-days" id=""> </span> ngày
                            </div>
                            <div class="boxed__content">
                                <div class="boxed__item boxed__item--hour" id="js-nav-contact-hours"> </div>
                                <div class="boxed__item boxed__item--minute" id="js-nav-contact-minutes"> </div>
                                <div class="boxed__item boxed__item--seconds" id="js-nav-contact-seconds"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end .special__offer -->

                    <div class="product__carousel owl-carousel owl-theme js-product-carousel">
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (2).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (2).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (2).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (2).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (2).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (2).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (2).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (2).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (2).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (2).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (2).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                    </div>
                    <!-- end .product_carousel -->
                    <a href="" class="see-more">Xem thêm <i class="fal fa-angle-right"></i></a>

                </div>
            </div>
            <div class="tab-pane fade" id="js-nav-contact2" role="tabpanel" aria-labelledby="js-nav-contact-tab2">
                <div class="d-flex flex-nowrap align-items-center align-content-center">
                    <div class="special__offer">
                        <div class="time__boxed">
                            <div class="boxed__title mb-2">
                                Kết thúc sau <span class="time__number" id="js-nav-contact2-days" id=""> </span>
                                ngày
                            </div>
                            <div class="boxed__content">
                                <div class="boxed__item boxed__item--hour" id="js-nav-contact2-hours"> </div>
                                <div class="boxed__item boxed__item--minute" id="js-nav-contact2-minutes"> </div>
                                <div class="boxed__item boxed__item--seconds" id="js-nav-contact2-seconds"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end .special__offer -->

                    <div class="product__carousel owl-carousel owl-theme js-product-carousel">
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (3).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (3).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (3).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (3).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (3).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (3).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (3).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (3).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                    </div>
                    <!-- end .product_carousel -->
                    <a href="" class="see-more">Xem thêm <i class="fal fa-angle-right"></i></a>

                </div>
            </div>
            <div class="tab-pane fade" id="js-nav-contact3" role="tabpanel" aria-labelledby="js-nav-contact-tab3">
                <div class="d-flex flex-nowrap align-items-center align-content-center">
                    <div class="special__offer">
                        <div class="time__boxed">
                            <div class="boxed__title mb-2">
                                Kết thúc sau <span class="time__number" id="js-nav-contact3-days" id=""> </span>
                                ngày
                            </div>
                            <div class="boxed__content">
                                <div class="boxed__item boxed__item--hour" id="js-nav-contact3-hours"> </div>
                                <div class="boxed__item boxed__item--minute" id="js-nav-contact3-minutes"> </div>
                                <div class="boxed__item boxed__item--seconds" id="js-nav-contact3-seconds"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end .special__offer -->

                    <div class="product__carousel owl-carousel owl-theme js-product-carousel">
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                        <div class="item">
                            <div class="products">
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <div class="product__number">
                                                Còn 3 sản phẩm
                                            </div>
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="product rounded p-3 d-flex flex-column" href="">
                                    <div class="product__image">
                                        <figure class="box__image ">
                                            <img class="lazyload zoom banner__image "
                                                data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                        </figure>
                                        <div class="boxed__save shadow-sm rounded p-2">
                                            <div class="text__save"> TIẾT KIỆM </div>
                                            <div class="price_save">1.600.000 ₫</div>
                                        </div>
                                    </div>
                                    <div class="product__content d-flex flex-column justify-content-between">
                                        <div class="product__top">
                                            <div class="product__name">
                                                Laptop ACER Swift 3 SF313-53-503A NX.A4JSV.002 ( 13.5" Quad HD
                                                (2K)/Intel Core
                                                i5-1135G7/8GB/512GB SSD/Windows 10
                                            </div>
                                            <!-- <div class="product__number">
                          Còn 3 sản phẩm
                        </div> -->
                                        </div>
                                        <div class="product__bottom">
                                            <div class="product__price new__price">
                                                <strong class="">20.390.000 ₫</strong>
                                                <i>Freeship</i>
                                            </div>
                                            <div class="product__price old__price">
                                                <span class="">21.990.000 ₫</span>
                                                <i class="discount">-7.28%</i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end .item -->
                    </div>
                    <!-- end .product_carousel -->
                    <a href="" class="see-more">Xem thêm <i class="fal fa-angle-right"></i></a>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    @if(count($banner_news) > 0)
    <div class="banner banner__news d-flex justify-content-between align-content-center align-items-center">
        @foreach($banner_news as $banner_new)
        <div class="banner__item ">
            <a href=" " class="banner__link ">
                <figure class="box__image mb-0">
                    <img class="lazyload zoom banner__image " data-src="{{$banner_new->photo}}" alt=" " loading="lazy">
                </figure>
            </a>
        </div>
        @endforeach
    </div>
    @endif
</div>

<div class="container mb-5">
    <div class="featured__brand pl-3 pr-3">
        <h3 class="text--title m-0">Thương hiệu nổi bật</h3>
        @if(count($brands) > 0)
        <div class="carousel carousel-brands">
            <div id="js-featured-brand" class="owl-carousel owl-theme mt-2">
                @foreach($brands as $brand)
                <div class="item">
                    <a href=" " class="carousel__link banner__link ">
                        <figure class="box__image ">
                            <img class="lazyload zoom banner__image " data-src="{{$brand->photo}}" alt=" "
                                loading="lazy">
                        </figure>
                        <div class="mb-3 text-dark text-center banner__description">{{$brand->name}}</div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>

<div class="container mb-4">
    @if(count($product_categories) > 0)
    <div class="row row-pl-10 row-pr-10 mb-5">
        @foreach($product_categories as $product_category)
        <div class="col-md-6 mb-20 col-pl-10 col-pr-10">
            <div class="category rounded bg-white">
                <div class="title">
                    <h3 class="text--title m-0 ml-3">{{$product_category->name}}</h3>
                    <a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a>
                </div>
                <div class="category__content d-flex flex-nowrap align-items-stretch">
                    <div class="category__image">
                        <figure class="box__image ">
                            <img class="lazyload zoom banner__image " data-src="{{$product_category->banner_products}}"
                                alt=" " loading="lazy">
                        </figure>
                    </div>
                    @if(count($product_category->products) > 0)
                    <div class="category__content d-flex flex-wrap align-content-between">
                        @foreach($product_category->products as $product)
                        <div class="brand text-center">
                            <a href="{{ route('product-detail', $product->slug) }}" class="">
                                <div class="brand__title font-weight-bold">{{$product->name}}</div>
                                <div class="brand__title brand__title--sub mb-2">{!! $product->summary !!}</div>
                                <figure class="box__image">
                                    <img class="lazyload zoom banner__image " data-src="{{$product->photo}}" alt=" "
                                        loading="lazy">
                                </figure>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    <div class="row mb-5">
        <div class="col-md-12 mb-3">
            @if(count($product_hots) > 0)
            <div class="selling__product rounded p-3">
                <div class="title">
                    <h3 class="text--title m-0">Sản phẩm nổi bật</h3>
                    <a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a>
                </div>
                <div id="js-selling-product" class="js-product-carousel selling__content owl-carousel owl-theme">
                    <div class="item">
                        <div class="products">
                            @for($i = 0; $i < 5; $i++) <a class="product rounded p-3 d-flex flex-column"
                                href="{{ route('product-detail', $product_hots[$i]->slug) }}">
                                <div class="product__image">
                                    <figure class="box__image ">
                                        <img class="lazyload zoom banner__image "
                                            data-src="{{$product_hots[$i]->photo}}" alt=" " loading="lazy">
                                    </figure>
                                    <div class="boxed__save shadow-sm rounded p-2">
                                        <div class="text__save"> TIẾT KIỆM </div>
                                        <div class="price_save">
                                            {{number_format(($product_hots[$i]->price * $product_hots[$i]->discount) / 100)}}
                                            ₫
                                        </div>
                                    </div>
                                </div>
                                <div class="product__content d-flex flex-column justify-content-between">
                                    <div class="product__top">
                                        <div class="product__name">
                                            {{$product_hots[$i]->name}}
                                        </div>
                                        <div class="product__number">
                                            Còn {{$product_hots[$i]->stock}} sản phẩm
                                        </div>
                                    </div>
                                    <div class="product__bottom">
                                        <div class="product__price new__price">
                                            <strong
                                                class="">{{number_format($product_hots[$i]->price - ($product_hots[$i]->price * $product_hots[$i]->discount) / 100)}}
                                                ₫</strong>
                                            <i>Freeship</i>
                                        </div>
                                        <div class="product__price old__price">
                                            <span class="">{{number_format($product_hots[$i]->price)}} ₫</span>
                                            <i class="discount">-{{$product_hots[$i]->discount}}%</i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                @endfor
                        </div>
                    </div>
                    <div class="item">
                        <div class="products">
                            <a class="product rounded p-3 d-flex flex-column" href="">
                                <div class="product__image">
                                    <figure class="box__image ">
                                        <img class="lazyload zoom banner__image "
                                            data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                    </figure>
                                    <div class="boxed__save shadow-sm rounded p-2">
                                        <div class="text__save"> TIẾT KIỆM </div>
                                        <div class="price_save">1.600.000 ₫</div>
                                    </div>
                                </div>
                                <div class="product__content d-flex flex-column justify-content-between">
                                    <div class="product__top">
                                        <div class="product__name">
                                            Laptop ACER Swift 3
                                        </div>
                                        <div class="product__number">
                                            Còn 3 sản phẩm
                                        </div>
                                    </div>
                                    <div class="product__bottom">
                                        <div class="product__price new__price">
                                            <strong class="">20.390.000 ₫</strong>
                                            <i>Freeship</i>
                                        </div>
                                        <div class="product__price old__price">
                                            <span class="">21.990.000 ₫</span>
                                            <i class="discount">-7.28%</i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products">
                            <a class="product rounded p-3 d-flex flex-column" href="">
                                <div class="product__image">
                                    <figure class="box__image ">
                                        <img class="lazyload zoom banner__image "
                                            data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                    </figure>
                                    <div class="boxed__save shadow-sm rounded p-2">
                                        <div class="text__save"> TIẾT KIỆM </div>
                                        <div class="price_save">1.600.000 ₫</div>
                                    </div>
                                </div>
                                <div class="product__content d-flex flex-column justify-content-between">
                                    <div class="product__top">
                                        <div class="product__name">
                                            Laptop ACER Swift 3
                                        </div>
                                        <div class="product__number">
                                            Còn 3 sản phẩm
                                        </div>
                                    </div>
                                    <div class="product__bottom">
                                        <div class="product__price new__price">
                                            <strong class="">20.390.000 ₫</strong>
                                            <i>Freeship</i>
                                        </div>
                                        <div class="product__price old__price">
                                            <span class="">21.990.000 ₫</span>
                                            <i class="discount">-7.28%</i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-12 mb-3">
            @if(count($product_hots) > 0)
            <div class="selling__product rounded p-3">
                <div class="title">
                    <h3 class="text--title m-0">Sản phẩm mới</h3>
                    <a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a>
                </div>
                <div id="js-selling-product" class="js-product-carousel selling__content owl-carousel owl-theme">
                    <div class="item">
                        <div class="products">
                            @for($i = 0; $i < 5; $i++) <a class="product rounded p-3 d-flex flex-column"
                                href="{{ route('product-detail', $product_hots[$i]->slug) }}">
                                <div class="product__image">
                                    <figure class="box__image ">
                                        <img class="lazyload zoom banner__image "
                                            data-src="{{$product_hots[$i]->photo}}" alt=" " loading="lazy">
                                    </figure>
                                    <div class="boxed__save shadow-sm rounded p-2">
                                        <div class="text__save"> TIẾT KIỆM </div>
                                        <div class="price_save">
                                            {{number_format(($product_hots[$i]->price * $product_hots[$i]->discount) / 100)}}
                                            ₫
                                        </div>
                                    </div>
                                </div>
                                <div class="product__content d-flex flex-column justify-content-between">
                                    <div class="product__top">
                                        <div class="product__name">
                                            {{$product_hots[$i]->name}}
                                        </div>
                                        <div class="product__number">
                                            Còn {{$product_hots[$i]->stock}} sản phẩm
                                        </div>
                                    </div>
                                    <div class="product__bottom">
                                        <div class="product__price new__price">
                                            <strong
                                                class="">{{number_format($product_hots[$i]->price - ($product_hots[$i]->price * $product_hots[$i]->discount) / 100)}}
                                                ₫</strong>
                                            <i>Freeship</i>
                                        </div>
                                        <div class="product__price old__price">
                                            <span class="">{{number_format($product_hots[$i]->price)}} ₫</span>
                                            <i class="discount">-{{$product_hots[$i]->discount}}%</i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                @endfor
                        </div>
                    </div>
                    <div class="item">
                        <div class="products">
                            <a class="product rounded p-3 d-flex flex-column" href="">
                                <div class="product__image">
                                    <figure class="box__image ">
                                        <img class="lazyload zoom banner__image "
                                            data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                    </figure>
                                    <div class="boxed__save shadow-sm rounded p-2">
                                        <div class="text__save"> TIẾT KIỆM </div>
                                        <div class="price_save">1.600.000 ₫</div>
                                    </div>
                                </div>
                                <div class="product__content d-flex flex-column justify-content-between">
                                    <div class="product__top">
                                        <div class="product__name">
                                            Laptop ACER Swift 3
                                        </div>
                                        <div class="product__number">
                                            Còn 3 sản phẩm
                                        </div>
                                    </div>
                                    <div class="product__bottom">
                                        <div class="product__price new__price">
                                            <strong class="">20.390.000 ₫</strong>
                                            <i>Freeship</i>
                                        </div>
                                        <div class="product__price old__price">
                                            <span class="">21.990.000 ₫</span>
                                            <i class="discount">-7.28%</i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products">
                            <a class="product rounded p-3 d-flex flex-column" href="">
                                <div class="product__image">
                                    <figure class="box__image ">
                                        <img class="lazyload zoom banner__image "
                                            data-src="./images/product/unnamed (1).webp" alt=" " loading="lazy">
                                    </figure>
                                    <div class="boxed__save shadow-sm rounded p-2">
                                        <div class="text__save"> TIẾT KIỆM </div>
                                        <div class="price_save">1.600.000 ₫</div>
                                    </div>
                                </div>
                                <div class="product__content d-flex flex-column justify-content-between">
                                    <div class="product__top">
                                        <div class="product__name">
                                            Laptop ACER Swift 3
                                        </div>
                                        <div class="product__number">
                                            Còn 3 sản phẩm
                                        </div>
                                    </div>
                                    <div class="product__bottom">
                                        <div class="product__price new__price">
                                            <strong class="">20.390.000 ₫</strong>
                                            <i>Freeship</i>
                                        </div>
                                        <div class="product__price old__price">
                                            <span class="">21.990.000 ₫</span>
                                            <i class="discount">-7.28%</i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            @if(count($products) > 0)
            <div class="products__you bg-white rounded">
                <div class="title pl-3">
                    <h3 class="text--title m-0">Sản phẩm dành cho bạn</h3>
                    <a class="see-more" href="#">Xem tất cả <i class="fal fa-angle-right"></i></a>
                </div>
                <div class="products flex-wrap" id="js-navigation-products-you">
                    @foreach($products as $product)
                    <a class="product p-3 d-flex flex-column mb-3" href="{{ route('product-detail', $product->slug) }}">
                        <div class="product__image">
                            <figure class="box__image ">
                                <img class="lazyload zoom banner__image " data-src="{{$product->photo}}" alt=" "
                                    loading="lazy">
                            </figure>
                            <div class="boxed__save shadow-sm rounded p-2">
                                <div class="text__save"> TIẾT KIỆM </div>
                                <div class="price_save">{{number_format(($product->price * $product->discount) / 100)}}
                                    ₫</div>
                            </div>
                        </div>
                        <div class="product__content d-flex flex-column justify-content-between">
                            <div class="product__top">
                                <div class="product__name">{{$product->name}}</div>
                                <div class="product__number">
                                    Còn {{$product->stock}} sản phẩm
                                </div>
                            </div>
                            <div class="product__bottom">
                                <div class="product__price new__price">
                                    <strong
                                        class="">{{number_format($product->price - ($product->price * $product->discount) / 100)}}
                                        ₫</strong>
                                    <i>Freeship</i>
                                </div>
                                <div class="product__price old__price">
                                    <span class="">{{number_format($product->price)}} ₫</span>
                                    <i class="discount">-{{$product->discount}}%</i>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
        <div class="col-md-12 ">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item m-1 disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fal fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item m-1 active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item m-1 "><a class="page-link" href="#">2</a></li>
                    <li class="page-item m-1 "><a class="page-link" href="#">3</a></li>
                    <li class="page-item m-1 "><a class="page-link" href="#">...</a></li>
                    <li class="page-item m-1 "><a class="page-link" href="#">124</a></li>
                    <li class="page-item m-1 ">
                        <a class="page-link" href="#"><i class="fal fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
