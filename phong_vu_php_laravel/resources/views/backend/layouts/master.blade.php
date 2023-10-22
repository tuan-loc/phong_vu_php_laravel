<!DOCTYPE html>
<html lang="en">

@include('backend.layouts.head')

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div id="main-wrapper">
        @include('backend.layouts.header')

        @include('backend.layouts.sidebar')

        <div class="content-body">
            @yield('main-content')
        </div>

        @include('backend.layouts.footer')

        @yield('scripts')
    </div>
</body>

</html>
