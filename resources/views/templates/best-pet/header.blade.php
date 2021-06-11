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
    <div class="w3ls-banner @if($check) jarallax @else about-w3lsbanner @endif">
        <div class="w3lsbanner-info">
            <!-- header -->
            <div class="header">
                <div class="container">
                    <div class="agile_header_grid">
                        <div class="header-mdl agileits-logo">
                            <!-- header-two -->
                            <h1><a href="{{ route('temp.best-pet.index') }}">Best Pets</a></h1>
                        </div>
                        <div class="agileits_w3layouts_sign_in">
                            <ul>
                                <li><a href="#myModal2" data-toggle="modal" class="play-icon">Đăng Nhập</a></li>
                                <li>Liên hệ : <span> 035 618 5047</span></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="header-nav">
                        <!-- header-three -->
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
                            </div>
                            <!-- top-nav -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav cl-effect-16">
                                    <li><a href="{{ route('temp.best-pet.index') }}" class="{{active_menu(Route::currentRouteName(),'temp.best-pet.index')}}" data-hover="Trang Chủ">Trang Chủ</a></li>
                                    <li><a href="{{ route('temp.best-pet.about') }}" class="{{active_menu(Route::currentRouteName(),'temp.best-pet.about')}}" data-hover="Về Chúng Tôi">Về Chúng Tôi</a></li>
                                    <li><a href="{{ route('temp.best-pet.gallery') }}" class="{{active_menu(Route::currentRouteName(),'temp.best-pet.gallery')}}" data-hover="Bộ Sưu Tập">Bộ Sưu Tập</a></li>
                                    <li><a href="{{ route('temp.best-pet.contact') }}" class="{{active_menu(Route::currentRouteName(),'temp.best-pet.contact')}}" data-hover="Liên Hệ">Liên Hệ</a></li>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- //header -->
            <!-- banner-text -->
            @if($check)
            <div class="banner-text agileinfo">
                <div class="container">
                    <div class="agile_banner_info">
                        <div class="agile_banner_info1">
                            <h6>Chính Sách Khách Hàng Hấp Dẫn</h6>
                            <div id="typed-strings" class="agileits_w3layouts_strings">
                                <p>Welcome to<i> Best Pets</i></p>
                                <p><i>Mua bán</i> thú cưng uy tín</p>
                                <p>Nhiều năm <i>Kinh nghiệm</i></p>
                            </div>
                            <span id="typed" style="white-space:pre;"></span>
                        </div>
                    </div>
                    <div class="agile_social_icons_banner">
                        <ul class="agileits_social_list">
                            <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            <!-- //banner-text -->
        </div>
    </div>
    <!-- //banner -->