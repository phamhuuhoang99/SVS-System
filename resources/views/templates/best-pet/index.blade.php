@extends('templates.best-pet.master')
@section('title', 'Best Pet')
@section('content')

    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="col-md-4 bnr-agileitsgrids">
            <div class="agileinfo_banner_bottom_pos">
                <div class="w3_agileits_banner_bottom_pos_grid">
                    <div class="col-xs-4 wthree_banner_bottom_grid_left">
                        <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_banner_bottom_grid_right">
                        <h4>Sức Khỏe - Tiêm Phòng</h4>
                        <p>Bảo Hành 3 Ngày Toàn Diện - Bảo Hành Sức Khỏe 30 Ngày Với Các Bệnh Trong Tiêm Phòng.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 bnr-agileitsgrids w3grid1">
            <div class="agileinfo_banner_bottom_pos">
                <div class="w3_agileits_banner_bottom_pos_grid">
                    <div class="col-xs-4 wthree_banner_bottom_grid_left">
                        <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_banner_bottom_grid_right">
                        <h4>Tặng Phụ Kiên Khi Mua Cún</h4>
                        <p>Quý Khách Hàng Sẽ Được Tặng Phụ Kiện Cần Thiết Dành Riêng Cho Từng Loại Cún.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 bnr-agileitsgrids w3grid2">
            <div class="agileinfo_banner_bottom_pos">
                <div class="w3_agileits_banner_bottom_pos_grid">
                    <div class="col-xs-4 wthree_banner_bottom_grid_left">
                        <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_banner_bottom_grid_right">
                        <h4>Tư Vấn Chăm Sóc Trọn Đời</h4>
                        <p>Tư Vấn Cách Nuôi, Y Tế, Chăm Sóc, Làm Đẹp, Huấn Luyện, Phối Giống, Sinh Sản . . .</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //banner-bottom -->

    @include('templates.best-pet.welcome')

    <!-- services -->
    <div class="services jarallax">
        <div class="container">
            <h3 class="agileits-title w3title1">Dịch Vụ</h3>
            <div class="services-w3ls-row">
                <div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
                    <span class="glyphicon glyphicon-home effect-1" aria-hidden="true"></span>
                    <h5>Chó cảnh</h5>
                    <p>Hệ Thống Mua Bán Cún Cảnh Uy Tín Trên Toàn Quốc!</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
                    <span class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></span>
                    <h5>Mèo cảnh</h5>
                    <p>Hệ Thống Mua Bán Mèo Cảnh Uy Tín Trên Toàn Quốc! </p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
                    <span class="glyphicon glyphicon-tree-deciduous effect-1" aria-hidden="true"></span>
                    <h5>Phụ kiện</h5>
                    <p>Shop bán phụ kiện thức ăn cho thú cưng!</p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 services-grid">
                    <span class="glyphicon glyphicon-globe effect-1" aria-hidden="true"></span>
                    <h5>Trông giữ</h5>
                    <p>Bạn có thể gửi cún cho chúng tôi trong thời gian bạn đi du lịch, nghỉ…
                    </p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //services -->
    <!-- blog-bottom -->
    <div class="blog-bottom">
        <div class="container">
            <div class="col-sm-5 w3_agile_blog_bottom_left">
                <img src="{{ asset('templates/best-pet/images/s1.jpg') }}" alt=" " class="img-responsive" />
            </div>
            <div class="col-sm-7 w3_agile_blog_bottom_right">
                <h5>Best Pets</h5>
                <h3>Dịch Vụ Hổ Trợ Khách Hàng 24/7</h3>
                <p>Gọi ngay cho chúng tôi để được tư vấn, gửi hình ảnh, video và báo giá chi tiết.</p>
                <div class="w3l_more">
                    <a href="#" class="button button--nina" data-text="Xem thêm" data-toggle="modal" data-target="#myModal">
                        <span>Xem thêm</span>
                    </a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //blog-bottom -->

@endsection