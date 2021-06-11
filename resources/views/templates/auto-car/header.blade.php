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
<div @if ($check) class="banner wthree"
@else class="banner-2 wthree"
    @endif
    >
    <div class="container">
        <div class="banner_top">
            <div class="logo wow fadeInLeft animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                <h1><a href="{{ route('temp.auto-car.index') }}"><span>A</span>uto Car</a></h1>
            </div>
            <div class="banner_top_right wow fadeInRight animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
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
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav cl-effect-14">
                            <li><a href="{{ route('temp.auto-car.index') }}" class="{{active_menu(Route::currentRouteName(),'temp.auto-car.index')}}">Trang Chủ</a></li>
                            <li><a href="{{ route('temp.auto-car.about') }}" class="{{active_menu(Route::currentRouteName(),'temp.auto-car.about')}}">Về Chúng Tôi</a></li>
                            <li><a href="{{ route('temp.auto-car.services') }}" class="{{active_menu(Route::currentRouteName(),'temp.auto-car.services')}}">Dịch Vụ</a></li>
                            <li><a href="{{ route('temp.auto-car.gallery') }}" class="{{active_menu(Route::currentRouteName(),'temp.auto-car.gallery')}}">Bộ Sưu Tập</a></li>
                            <li><a href="{{ route('temp.auto-car.contact') }}" class="{{active_menu(Route::currentRouteName(),'temp.auto-car.contact')}}">Liên Hệ</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->

                </nav>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- banner -->
        @if ($check)
            <!--Slider-->
            <div class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="slider-info">
                            <h3>Hệ thống ô tô <span>hiện đại.</span> </h3>
                        </div>
                    </li>
                    <li>
                        <div class="slider-info">
                            <h3>Đội ngũ <span>kinh nghiệm.</span> </h3>
                        </div>
                    </li>
                    <li>
                        <div class="slider-info">
                            <h3>Hệ thống ô tô <span>hiện đại.</span> </h3>
                        </div>
                    </li>


                </ul>

                <div class="clearfix"></div>
            </div>
            <!--//Slider-->
        @endif
    </div>
    @if ($check)
        <div class="thim-click-to-bottom">
            <a href="#about" class="scroll">
                <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
            </a>
        </div>
    @endif
</div>
<!-- //banner -->
