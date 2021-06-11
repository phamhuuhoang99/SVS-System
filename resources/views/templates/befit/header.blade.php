<?php
    function active_menu($currentRouteName,$requestName) {
        if($currentRouteName==$requestName){
            return 'active';
        } else {
            return null;
        }
    }
?>
<!-- main banner -->
<div class="main-top" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
                <!-- logo -->
                <div id="logo">
                    <h1><a class="" href="{{route('temp.befit.index') }}">Befit</a></h1>
                </div>
                <!-- //logo -->

                <!-- nav -->
                <div class="nav_w3ls">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="{{route('temp.befit.index') }}" class="{{active_menu(Route::currentRouteName(),'temp.befit.index')}}">Trang chủ</a></li>
                            <li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="{{route('temp.befit.about') }}" class="{{active_menu(Route::currentRouteName(),'temp.befit.about')}}">Về chúng tôi</a></li>
                            <li><a href="{{route('temp.befit.gallery') }}" class="{{active_menu(Route::currentRouteName(),'temp.befit.gallery')}}">Bộ sưu tập</a></li>
                            <li><a href="{{route('temp.befit.contact') }}" class="{{active_menu(Route::currentRouteName(),'temp.befit.contact')}}">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>
    <!-- //header -->

    <!-- banner -->
    @if($check)
        <div class="banner_w3lspvt">
            <div class="csslider infinity" id="slider1">
                <input type="radio" name="slides" checked="checked" id="slides_1" />
                <input type="radio" name="slides" id="slides_2" />
                <input type="radio" name="slides" id="slides_3" />
                <input type="radio" name="slides" id="slides_4" />
                <ul class="banner_slide_bg">
                    <li>
                        <div class="container">
                            <div class="w3ls_banner_txt text-right ml-auto pr-xl-0 pr-sm-4 pr-5">
                                <h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Chào mừng bạn đến Befit</h3>
                                <p>Chương trình thực tế về giảm cân và tập luyện khoa học.</p>
                                <a href="{{route('temp.befit.about') }}" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Xem thêm</a>
                                <a href="{{route('temp.befit.contact') }}" style="max-width: 150px;" class="btn button-style button-style-2 ml-2 mt-sm-5 mt-4">Liên Hệ</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="w3ls_banner_txt text-right ml-auto pr-xl-0 pr-sm-4 pr-5">
                                <h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Yoga & Meditation</h3>
                                <p>Chương trình thực tế về giảm cân và tập luyện khoa học.</p>
                                <a href="{{route('temp.befit.about') }}" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Xem thêm</a>
                                <a href="{{route('temp.befit.contact') }}" style="max-width: 150px;" class="btn button-style button-style-2 ml-2 mt-sm-5 mt-4">Liên Hệ</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="w3ls_banner_txt pl-xl-0 pl-sm-4 pl-5">
                                <h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Coach phải là chuẩn</h3>
                                <p>Đội ngũ Coach của chúng tôi được huấn luyện theo chứng chỉ <br>Luôn mang lại phương pháp tập luyện ĐÚNG NHẤT</p>
                                <a href="{{route('temp.befit.about') }}" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Xem thêm</a>
                                <a href="{{route('temp.befit.contact') }}" style="max-width: 150px;" class="btn button-style button-style-2 ml-2 mt-sm-5 mt-4">Liên Hệ</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="w3ls_banner_txt pl-xl-0 pl-sm-4 pl-5">
                                <h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Tập đúng kết quả thật</h3>
                                <p>Chúng tôi luôn nổ lực truyền tải kiến thức đúng<br>và đủ để khách hàng có thể áp dụng, hình thành một lối sống khỏe.</p>
                                <a href="{{route('temp.befit.about') }}" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Xem thêm</a>
                                <a href="{{route('temp.befit.contact') }}" style="max-width: 150px;" class="btn button-style button-style-2 ml-2 mt-sm-5 mt-4">Liên Hệ</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="arrows">
                    <label for="slides_1"></label>
                    <label for="slides_2"></label>
                    <label for="slides_3"></label>
                    <label for="slides_4"></label>
                </div>
                <div class="navigation">
                    <div>
                        <label for="slides_1"></label>
                        <label for="slides_2"></label>
                        <label for="slides_3"></label>
                        <label for="slides_4"></label>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="banner_w3lspvt-2"></div>
    @endif

    <!-- //banner -->
</div>
<!-- //main banner -->