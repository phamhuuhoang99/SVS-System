<?php
    function active_menu($currentRouteName,$requestName) {
        if($currentRouteName==$requestName){
            return 'active';
        } else {
            return null;
        }
    }
?>
<!-- //header -->
<header class="py-sm-3 pt-3 pb-2" id="home">
    <div class="container">
        <!-- nav -->
        <div class="top d-md-flex">
            <div id="logo">
                <h1> <a href="{{ route('temp.yoga-lite.index') }}"><span class="fa fa-yoast"></span>oga Lite</a></h1>
            </div>
            <div class="search-form mx-md-auto">
                <div class="form-w3layouts-grid">
                    <form action="#" class="newsletter">
                        <input class="search" type="search" placeholder="Tìm kiếm..." required="">
                        <button class="form-control btn" value=""><span class="fa fa-search"></span></button>
                    </form>
                </div>
            </div>
            <div class="forms mt-md-0 mt-2">
                <a href="{{ route('temp.yoga-lite.login') }}" class="btn"><span class="fa fa-user-circle-o"></span>Đăng nhập</a>
                <a href="{{ route('temp.yoga-lite.register') }}" class="btn"><span class="fa fa-pencil-square-o"></span> Đăng ký</a>
            </div>
        </div>
        <nav class="text-center">
            <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
            <input type="checkbox" id="drop" />
            <ul class="menu">
                <li class="{{active_menu(Route::currentRouteName(),'temp.yoga-lite.index')}}"><a href="{{ route('temp.yoga-lite.index') }}">Trang chủ</a></li>
                <li class="{{active_menu(Route::currentRouteName(),'temp.yoga-lite.about')}}"><a href="{{ route('temp.yoga-lite.about') }}">Về chúng tôi</a></li>
                <li class="{{active_menu(Route::currentRouteName(),'temp.yoga-lite.service')}} {{active_menu(Route::currentRouteName(),'temp.yoga-lite.single')}}">
                    <!-- First Tier Drop Down -->
                    <label for="drop-2" class="toggle">Xem thêm <span class="fa fa-angle-down" aria-hidden="true"></span>
                    </label>
                    <a href="#">Xem thêm<span class="fa fa-angle-down " aria-hidden="true"></span></a>
                    <input type="checkbox" id="drop-2" />
                    <ul>
                        <li><a href="{{ route('temp.yoga-lite.service') }}" class="drop-text" style="color: #515152;font-weight: 400 ">Dịch vụ</a></li>
                        <li><a href="{{ route('temp.yoga-lite.single') }}" class="drop-text" style="color: #515152;font-weight: 400">Chi tiết</a></li>
                    </ul>
                </li>

                <li class="{{active_menu(Route::currentRouteName(),'temp.yoga-lite.events')}}"><a href="{{ route('temp.yoga-lite.events') }}">Sự kiện</a></li>
                <li class="{{active_menu(Route::currentRouteName(),'temp.yoga-lite.contact')}}"><a href="{{ route('temp.yoga-lite.contact') }}">Liên lạc</a></li>
            </ul>
        </nav>
        <!-- //nav -->
    </div>
</header>
<!-- //header -->
@if ($check)
    <div class="main-content" id="home">
        <div class="overlay">
            <!-- //header -->
            <div class="container">
                <!-- /banner -->
                <div class="banner-info text-left">
                    <h3>Yoga cho người bắt đầu</h3>
                    <p class="my-3">Luyện tập thoải mái giữa các cơ sở, phòng tập sạch sẽ thoáng mát.</p>
                    <div class="read-more-button">
                        <a href="{{ route('temp.yoga-lite.single') }}" class="read-more scroll btn">Xem thêm</a>
                    </div>
                </div>

            </div>
            <!-- //banner -->
        </div>
    </div>
@else
    <div class="main-content inner">
        <div class="overlay inner">

        </div>
    </div>
@endif
<!--// mian-content -->
