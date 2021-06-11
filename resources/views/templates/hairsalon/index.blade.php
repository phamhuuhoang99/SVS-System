@extends('templates.hairsalon.master')
@section('title', 'Hair Salon')
@section('content')
    @if (Route::currentRouteName() == 'temp.hairsalon.about')
        <!-- breadcrumb -->
        <div class="w3_breadcrumb">
            <div class="breadcrumb-inner">
                <ul>
                    <li><a href={{ route("temp.hairsalon.index") }}>Trang Chủ</a> <i>//</i></li>

                    <li>Về SVS</li>
                </ul>
            </div>
        </div>
        <!-- //breadcrumb -->
    @endif
    <!-- /about -->
    <div class="about-wthree">
        <div class="container">
            <div class="ab-w3l-spa">
                <div class="title-agileits">
                    @if (Route::currentRouteName() == 'temp.hairsalon.index')
                        <h2 class="w3l-agile">Welcome</h2>
                    @elseif (Route::currentRouteName() == 'temp.hairsalon.about')
                        <h2 class="w3l-agile">Về SVS</h2>
                    @endif

                </div>
                <p>Chúng tôi có nền tảng thương mại SVS được xây dựng nhằm cung cấp cho người dùng những trải nghiệm dễ dàng, an toàn và nhanh chóng</p>
                <img src={{ asset('templates/hairsalon/images/about.jpg') }} class="img-responsive" alt="Hair Salon">
                <!--Slider-->
                <div class="slider-agileits-ab">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <div class="w3l-slider-img">
                                    <img src={{ asset('templates/hairsalon/images/g1.jpg') }} class="img-responsive"
                                        alt="Hair Salon">
                                </div>

                            </li>
                            <li>
                                <div class="w3l-slider-img">
                                    <img src={{ asset('templates/hairsalon/images/g2.jpg') }} class="img-responsive"
                                        alt="Hair Salon">
                                </div>

                            </li>
                            <li>
                                <div class="w3l-slider-img">
                                    <img src={{ asset('templates/hairsalon/images/g3.jpg') }} class="img-responsive"
                                        alt="Hair Salon">
                                </div>

                            </li>
                            <li>
                                <div class="w3l-slider-img">
                                    <img src={{ asset('templates/hairsalon/images/g4.jpg') }} class="img-responsive"
                                        alt="Hair Salon">
                                </div>

                            </li>

                        </ul>

                    </div>
                    <div class="w3ls-info-about">
                        <h4>Tận hưởng phong cách mới</h4>
                        <p>Trẻ trung, năng động, tự tinh khoe cá tính. </p>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //about -->
    <!-- work-services -->
    <div class="w3l-services-agile">
        <div class="container">
            <div class="title-agileits">
                <h3 class="w3l-agile">Dịch Vụ</h3>
            </div>

        </div>
        <div class="w3layouts_work_grids">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="w3layouts_work_grid_left">
                                <img src={{ asset('templates/hairsalon/images/5.jpg') }} alt=" " class="img-responsive" />
                                <div class="w3layouts_work_grid_left_pos">
                                    <img src={{ asset('templates/hairsalon/images/6.jpg') }} alt=" "
                                        class="img-responsive" />
                                </div>
                            </div>
                            <div class="w3layouts_work_grid_right">
                                <h4>Tiệm Cắt Tóc Chuyên Nghiệp</h4>
                                <h5>Dịch Vụ Hair Salon</h5>
                                <p>Quán mang đến phong cách Hàn Quốc trẻ trung và đơn giản cho các bạn trẻ tại Sài Gòn. </p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                        <li>
                            <div class="w3layouts_work_grid_left">
                                <img src={{ asset('templates/hairsalon/images/5.jpg') }} alt=" " class="img-responsive" />
                                <div class="w3layouts_work_grid_left_pos">
                                    <img src={{ asset('templates/hairsalon/images/9.jpg') }} alt=" "
                                        class="img-responsive" />
                                </div>
                            </div>
                            <div class="w3layouts_work_grid_right">
                                <h4>Phong cách mới lạ</h4>
                                <h5>Với các chuyên gia hàng đầu</h5>
                                <p>Quán mang đến phong cách Hàn Quốc trẻ trung và đơn giản cho các bạn trẻ tại Sài Gòn. </p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                        <li>
                            <div class="w3layouts_work_grid_left">
                                <img src={{ asset('templates/hairsalon/images/5.jpg') }} alt=" " class="img-responsive" />
                                <div class="w3layouts_work_grid_left_pos">
                                    <img src={{ asset('templates/hairsalon/images/7.jpg') }} alt=" "
                                        class="img-responsive" />
                                </div>
                            </div>
                            <div class="w3layouts_work_grid_right">
                                <h4>Tiệm Cắt Tóc Chuyên Nghiệp</h4>
                                <h5>Dịch Vụ Hair Salon</h5>
                                <p>Quán mang đến phong cách Hàn Quốc trẻ trung và đơn giản cho các bạn trẻ tại Sài Gòn. </p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                        <li>
                            <div class="w3layouts_work_grid_left">
                                <img src={{ asset('templates/hairsalon/images/5.jpg') }} alt=" " class="img-responsive" />
                                <div class="w3layouts_work_grid_left_pos">
                                    <img src={{ asset('templates/hairsalon/images/8.jpg') }} alt=" "
                                        class="img-responsive" />
                                </div>
                            </div>
                            <div class="w3layouts_work_grid_right">
                                <h4>Phong cách mới lạ</h4>
                                <h5>Được cắt bởi các chuyên gia</h5>
                                <p>Quán mang đến phong cách Hàn Quốc trẻ trung và đơn giản cho các bạn trẻ tại Sài Gòn. </p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                        <li>
                            <div class="w3layouts_work_grid_left">
                                <img src={{ asset('templates/hairsalon/images/5.jpg') }} alt=" " class="img-responsive" />
                                <div class="w3layouts_work_grid_left_pos">
                                    <img src={{ asset('templates/hairsalon/images/9.jpg') }} alt=" "
                                        class="img-responsive" />
                                </div>
                            </div>
                            <div class="w3layouts_work_grid_right">
                                <h4>Professional Barber Shop</h4>
                                <h5>Dịch Vụ Hair Salon</h5>
                                <p>Quán mang đến phong cách Hàn Quốc trẻ trung và đơn giản cho các bạn trẻ tại Sài Gòn. </p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                    </ul>
                </div>
            </section>

        </div>
    </div>
    <!-- //work -->
    <!-- about-bottom -->
    <div class="price" id="price">
        <div class="col-md-6 w3l_about_bottom_right">
            <div class="title-agileits1">
                <h3>Bảng giá</h3>
            </div>
            {{--  <p>Lorem magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>  --}}
            <div class="price-list">
                <div class="wthree-grids-price">
                    <h4>Cắt tóc</h4>
                    <h5> 100.000đ</h5>
                    <div class="clearfix"> </div>
                </div>
                <div class="wthree-grids-price">
                    <h4> Cạo râu</h4>
                    <h5> 75.000đ</h5>
                    <div class="clearfix"> </div>
                </div>
                <div class="wthree-grids-price">
                    <h4>Cắt tóc + Cạo Râu</h4>
                    <h5> 200.000đ</h5>
                    <div class="clearfix"> </div>
                </div>
                <div class="wthree-grids-price">
                    <h4>Cắt + Nhuộm</h4>
                    <h5> 875.000đ</h5>
                    <div class="clearfix"> </div>
                </div>
                <div class="wthree-grids-price">
                    <h4>Cắt + Gội</h4>
                    <h5> 400.000đ</h5>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 w3l_about_bottom_left">
        </div>

        <div class="clearfix"> </div>
    </div>
    @if (Route::currentRouteName() == 'temp.hairsalon.index')
        @include('templates.hairsalon.blogsection')
    @elseif (Route::currentRouteName() == 'temp.hairsalon.about')
        @include('templates.hairsalon.experts')
    @endif
    @include('templates.hairsalon.customer')
@endsection
