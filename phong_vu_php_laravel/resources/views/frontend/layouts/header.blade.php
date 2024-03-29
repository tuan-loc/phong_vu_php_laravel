<header class="" id="header-top">
    @if(count($banner_headers) > 0)
    <div class="header__banner">
        <div id="js-header-banner" class="owl-carousel owl-theme">
            @foreach($banner_headers as $banner_header)
            <div class="item">
                <a href="">
                    <img class="" src="{{ $banner_header->photo }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
        <div id="js-close-header-banner" class="btn-close-banner">
            <i class="fal fa-times"></i>
        </div>
    </div>
    @endif

    <div class="header__contact">
        <div class="container">
            <div class="d-flex justify-content-end pt-1 pb-1">
                <a href="" class="header__contact--link">
                    <i class="fal fa-building"></i>
                    <span class="contact__text">Hệ thống showroom</span>
                    <span class="contact__text "></span>
                </a>
                <a href="" class="header__contact--link">
                    <i class="fal fa-user-headset"></i>
                    <span class="contact__text">Tư vấn mua hàng:</span>
                    <span class="contact__text text-primary"> 1800 6867</span>
                </a>
                <a href="" class="header__contact--link">
                    <i class="fal fa-user-headset"></i>
                    <span class="contact__text">CSKH:</span>
                    <span class="contact__text text-primary"> 1800 6865</span>
                </a>
                <a href="" class="header__contact--link">
                    <i class="fal fa-newspaper"></i>
                    <span class="contact__text">Tin công nghệ</span>
                    <span class="contact__text"></span>
                </a>
                <a href="" class="header__contact--link">
                    <i class="fal fa-cogs"></i>
                    <span class="contact__text">Xây dựng cấu hình</span>
                    <span class="contact__text"></span>
                </a>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid bg-white sticky-top">
    <div class="container d-flex flex-nowrap justify-content-between align-items-center align-content-center pt-3 pb-3">
        <div class="header__logo" id="js-header-logo">
            <a href="" class="header__logo--link"><img class="logo__img"
                    src="{{ asset('frontend-vendor/images/logo-full.svg') }}" alt=""></a>
            <a href="" class="header__logo--link"><img class="logo__img"
                    src="{{ asset('frontend-vendor/images/logo.svg') }}" alt=""></a>
        </div>
        <div class="header__category pl-3" id="js-header-category">
            <button class="btn btn-outline-light"><i class="far fa-bars"></i> Danh mục sản phẩm</button>
            <div class="nav-scroll" id="js-nav-scroll" style="display:none">
                <ul class="nav flex-column align-items-center bg-white">
                    <li class="nav-item">
                        <a class="nav-link active" href="category_page.html">
                            <i class="fal fa-dryer-alt"></i> Điện máy - Điện da dụng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category_page.html">
                            <i class="fal fa-laptop"></i> Laptop & Macboo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category_page.html">
                            <i class="fal fa-laptop"></i> Tivi - Màn hình TV
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category_page.html">
                            <i class="fal fa-laptop"></i> Điện thoại & Thiết bị thông minh
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category_page.html">
                            <i class="fal fa-laptop"></i> PC - Máy tính đồng bộ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category_page.html">
                            <i class="fal fa-laptop"></i> Màn hình máy tính
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category_page.html">
                            <i class="fal fa-laptop"></i> Hi-End Gaming
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category_page.html">
                            <i class="fal fa-laptop"></i> Phụ kiện & Thiết bị ngoại vi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category_page.html">
                            <i class="fal fa-laptop"></i> Thiết bị âm thanh
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category_page.html">
                            <i class="fal fa-laptop"></i> Máy ảnh - Máy quay phim
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category_page.html">
                            <i class="fal fa-laptop"></i> Thiết bị văn phòng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category_page.html">
                            <i class="fal fa-laptop"></i> Thiết bị mạng - An ninh
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category_page.html">
                            <i class="fal fa-laptop"></i> Giải pháp doanh nghiệp
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header__search pl-3 pr-3">
            <form action="{{ route('product.search') }}" method="get" class="header__search--form" autocomplete="off">
                <input type="search" name="keyword" value="{{isset($_GET['keyword']) ? $_GET['keyword'] : ''}}" id=""
                    class="search__input" placeholder="Nhập từ khóa cần tìm...">
                <button class="btn search__button "><i class="fal fa-search"></i></button>
            </form>
        </div>
        <div class="header__funtion d-flex pt">
            <a class="header__funtion--link d-flex flex-column align-content-center align-items-center active" href=""
                title="Khuyến mãi">
                <i class="fal fa-tags"></i>
                <span class="js-scroll">Khuyến mãi</span>
            </a>
            <a class="header__funtion--link d-flex flex-column align-content-center align-items-center" href=""
                title="Đơn hàng">
                <i class="fal fa-clipboard-check"></i>
                <span class="js-scroll">Đơn hàng</span>
            </a>
            <a class="header__funtion--link d-flex flex-column align-content-center align-items-center" href=""
                title="Thông báo">
                <i class="fal fa-bell-on"></i>
                <span class="js-scroll">Thông báo</span>
            </a>
            @if(auth()->user())
            <a class="header__funtion--link d-flex flex-column align-content-center align-items-center" href=""
                title="Tài khoản">
                <i class="fal fa-user-circle"></i>
                <span class="js-scroll">{{auth()->user()->name}}</span>
            </a>
            @else
            <a class="header__funtion--link d-flex flex-column align-content-center align-items-center"
                href="{{ route('login.form') }}" title="Tài khoản">
                <i class="fal fa-user-circle"></i>
                <span class="js-scroll">Tài khoản</span>
            </a>
            @endif

            <a class="header__funtion--link d-flex flex-column align-content-center align-items-center" href=""
                title="Giỏ hàng">
                <i class="fal fa-shopping-cart"></i></i>
                <span class="js-scroll">Giỏ hàng</span>
            </a>
        </div>
    </div>
</div>
