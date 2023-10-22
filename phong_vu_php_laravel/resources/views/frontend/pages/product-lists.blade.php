@extends('frontend.layouts.master')

@section('title','Phong Vũ || Product Detail')

@section('main-content')
<div class="container mb-4">
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="filters mt-3 bg-white rounded">
                <div class="title pl-3 ">
                    <h3 class="text--title m-0 ">Bộ lọc sản phẩm </h3>
                </div>
                <div class="filter__content w-100 p-3">
                    <div class="filter ">
                        @php
                        $categories = App\Models\Category::getParents();
                        @endphp
                        @if(count($categories) > 0)
                        <div class="filter__name">
                            <div class="option__name">
                                Danh mục sản phẩm
                            </div>
                        </div>
                        @foreach($categories as $category)
                        <div class="filter__option">
                            <a href="{{route('product-category', $category->id)}}" class="option__value js-filter "
                                data-name="">{{$category->name}}</a>
                        </div>
                        @endforeach
                        <div class="filter__more text-secondary">
                            <i class="fal fa-chevron-circle-down"></i>
                        </div>
                        @endif
                    </div>
                    <div class="filter ">
                        @php
                        $brands = App\Models\Brand::all();
                        @endphp
                        @if(count($brands) > 0)
                        <div class="filter__name">
                            <div class="option__name">
                                Thương hiệu
                            </div>
                        </div>
                        @foreach($brands as $brand)
                        <div class="filter__option">
                            <a href="{{route('product-brand', $brand->id)}}" class="option__value js-filter "
                                data-name="">{{$brand->name}}</a>
                        </div>
                        @endforeach
                        <div class="filter__more text-secondary">
                            <i class="fal fa-chevron-circle-down"></i>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="products__you bg-white rounded">
                <div class="filter filter--sort p-3">
                    <div class="filter__name">
                        <div class="option__name">
                            Sắp xếp theo
                        </div>
                    </div>
                    <div class="filter__option">
                        <a href="{{ route('product.filter', ['khuyen-mai-tot-nhat' => true]) }}"
                            class="option__value check js-filter" data-name="">Khuyến mãi tốt nhất</a>
                        <a href="{{ route('product.filter', ['noi-bat' => true]) }}" class="option__value js-filter"
                            data-name="">Nổi bật</a>
                        <a href="{{ route('product.filter', ['hot' => true]) }}" class="option__value js-filter"
                            data-name="">Hot</a>
                        <a href="{{ route('product.filter', ['new' => true]) }}" class="option__value js-filter"
                            data-name="">Mới về</a>
                        <a href="{{ route('product.filter', ['sort-by' => 'DESC']) }}" class="option__value js-filter"
                            data-name="">Giá giảm dần</a>
                        <a href="{{ route('product.filter', ['sort-by' => 'ASC']) }}" class="option__value js-filter"
                            data-name="">Giá tăng dần</a>

                        <form action="{{ route('product.filter') }}" method="get" class="sort__range--price">
                            <input class="option__value " type="number" placeholder="Giá thấp nhất" name="minPrice"> <i
                                class="d-inline-block mr-1 font-weight-bold"
                                value="{{isset($_GET['minPrice']) ? $_GET['minPrice'] : ''}}"> - </i> <input
                                class="option__value " type="number" placeholder="Giá cao nhất" name="maxPrice"
                                value="{{isset($_GET['maxPrice']) ? $_GET['maxPrice'] : ''}}">
                            <button class="btn-filter">Lọc</button>
                        </form>
                    </div>
                    <div class="filter__more text-info">
                    </div>
                </div>
                @if(count($products) > 0)
                <div class="products flex-wrap" id="js-navigation-products-you">
                    @foreach($products as $product)
                    <a class="product p-3 d-flex flex-column mb-3"
                        href="{{ route('product-detail', ['slug' => $product->slug]) }}">
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
                @endif
            </div>
        </div>
        <div class="col-md-12 ">
            {{$products->links()}}
        </div>
    </div>
    <!-- end .row Product for you -->
</div>
@endsection