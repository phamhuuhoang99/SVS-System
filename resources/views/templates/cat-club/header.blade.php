<?php
    function active_menu($currentRouteName,$requestName) {
        if($currentRouteName==$requestName){
            return 'active';
        } else {
            return null;
        }
    }
?>
<!-- banner -->
<div class="banner @if(!$check) about-banner @endif  ">
    <div class="header @if(!$check) about-header @endif">
        <div class="container">
            <div class="header-left">
                <div class="w3layouts-logo">
                    <h1>
                        <a href="{{ route('temp.cat-club.index') }}">Cat <span>Club</span></a>
                    </h1>
                </div>
            </div>
            <div class="header-right">
                <div class="top-nav">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a class="{{active_menu(Route::currentRouteName(),'temp.cat-club.index')}}" href="{{ route('temp.cat-club.index') }}">Trang Chủ</a></li>
                                <li><a class="{{active_menu(Route::currentRouteName(),'temp.cat-club.about')}}" href="{{ route('temp.cat-club.about') }}">Về Chúng Tôi</a></li>
                                <li><a class="{{active_menu(Route::currentRouteName(),'temp.cat-club.gallery')}}" href="{{ route('temp.cat-club.gallery') }}">Bộ Sưu Tập</a></li>
                                <li><a class="{{active_menu(Route::currentRouteName(),'temp.cat-club.blog')}}" href="{{ route('temp.cat-club.blog') }}">Blog</a></li>
                                <li><a class="{{active_menu(Route::currentRouteName(),'temp.cat-club.contact')}}"  href="{{ route('temp.cat-club.contact') }}">Liên Hệ</a></li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                    </nav>
                </div>
                <div class="agileinfo-social-grids">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    @if ($check)
        <div class="w3layouts-banner-slider">
            <div class="container">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides callbacks callbacks1" id="slider4">
                            <li>
                                <div class="agileits-banner-info">
                                    <h3> Dịch Vụ Chăm Sóc Mèo Chất Lượng<span> Được hàng ngàn khách hàng tin dùng</span></h3>
                                    <div class="w3-button">
                                        <a href="{{ route('temp.cat-club.single') }}">Xem thêm</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="agileits-banner-info">
                                    <h3>Huấn luyện mèo cảnh thuần chủng<span>Được hàng ngàn khách hàng tin dùng</span></h3>
                                    <div class="w3-button">
                                        <a href="{{ route('temp.cat-club.single') }}">Xem thêm</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <script src="{{ asset('templates/cat-club/js/responsiveslides.min.js') }}"></script>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function() {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: true,
                                pager: true,
                                nav: true,
                                speed: 500,
                                namespace: "callbacks",
                                before: function() {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function() {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });
                    </script>
                    <!--banner Slider starts Here-->
                </div>
            </div>
        </div>
    @else
    <div class="about-heading">
        <div class="container">
            <h2>{{$text}}</h2>
        </div>
    </div>
    @endif

</div>
<!-- //banner -->
