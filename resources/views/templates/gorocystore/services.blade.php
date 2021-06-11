@extends('templates.gorocystore.master')
@section('title', 'Cửa hàng tạp hóa điện tử trực tuyến')
@section('content')
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('temp.gorocystore.index') }}">Trang chủ</a><span>|</span></li>
            <li>Dịch vụ</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    @include('templates.gorocystore.leftbanner')
    <div class="w3l_banner_nav_right">
    <!-- services -->
    <div class="services">
        <h3>Dịch vụ</h3>
        <div class="w3ls_service_grids">
            <div class="col-md-5 w3ls_service_grid_left">
                <h4>Chăm sóc khách hàng</h4>
                <p>Chất lượng sản phẩm luôn là yếu tố được SVS chú trọng nhất bởi SVS hiểu rõ những băn khoăn của khách hàng khi mua sắm qua mạng. Tiki cam kết các sản phẩm trên website đều được cung cấp từ những thương hiệu uy tín, đảm bảo sản phẩm chính hãng, chất lượng. Ngoài việc cung cấp các sản phẩm chất lượng, Tiki cũng xây dựng những chính sách dịch vụ chu đáo với tiêu chí luôn ưu tiên lợi ích của khách hàng.</p>
            </div>
            <div class="col-md-7 w3ls_service_grid_right">
                <div class="col-md-4 w3ls_service_grid_right_1">
                    <img src="/templates/gorocystore/images/18.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-4 w3ls_service_grid_right_1">
                    <img src="/templates/gorocystore/images/19.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-4 w3ls_service_grid_right_1">
                    <img src="/templates/gorocystore/images/20.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3ls_service_grids1">
            <div class="col-md-6 w3ls_service_grids1_left">
                <img src="/templates/gorocystore/images/4.jpg" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-6 w3ls_service_grids1_right">
                <ul>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Quy trình dành cho người mua</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Quy trình dành cho người bán</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Chính sách giao nhận vận chuyển</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Chính sách bảo trì, bảo hành</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Chính sách Trả tiền/ Hoàn tiền</li>
                </ul>
                <a href="{{ route('temp.gorocystore.single') }}">Mua ngay</a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //services -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- services-bottom -->
<div class="services-bottom">
    <div class="container">
        <div class="col-md-3 about_counter_left">
            <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
            <p class="counter">89,147</p>
            <h3>Người theo dõi</h3>
        </div>
        <div class="col-md-3 about_counter_left">
            <i class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></i>
            <p class="counter">54,598</p>
            <h3>Tiết kiệm</h3>
        </div>
        <div class="col-md-3 about_counter_left">
            <i class="glyphicon glyphicon-export" aria-hidden="true"></i>
            <p class="counter">83,983</p>
            <h3>Hổ trợ</h3>
        </div>
        <div class="col-md-3 about_counter_left">
            <i class="glyphicon glyphicon-bullhorn" aria-hidden="true"></i>
            <p class="counter">45,894</p>
            <h3>Phổ biến</h3>
        </div>
        <div class="clearfix"> </div>
        <!-- Stats-Number-Scroller-Animation-JavaScript -->
            <script src="/templates/gorocystore/js/waypoints.min.js"></script>
            <script src="/templates/gorocystore/js/counterup.min.js"></script>
            <script>
                jQuery(document).ready(function( $ ) {
                    $('.counter').counterUp({
                        delay: 10,
                        time: 1000
                    });
                });
            </script>
        <!-- //Stats-Number-Scroller-Animation-JavaScript -->

    </div>
</div>
<!-- //services-bottom -->
<!-- newsletter-top-serv-btm -->
<div class="newsletter-top-serv-btm">
    <div class="container">
        <div class="col-md-4 wthree_news_top_serv_btm_grid">
            <div class="wthree_news_top_serv_btm_grid_icon">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <h3>Giỏ hàng</h3>
            <p>Cơ chế tiếp nhận và giải quyết khiếu nại của khách hàng khi thông tin cá nhân bị sử dụng sai mục đích hoặc phạm vi.</p>
        </div>
        <div class="col-md-4 wthree_news_top_serv_btm_grid">
            <div class="wthree_news_top_serv_btm_grid_icon">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
            </div>
            <h3>Chính sách</h3>
            <p>Danh mục sản phẩm hạn chế không áp dụng Trả hàng, Quy trình thanh toán, Đảm bảo an toàn giao dịch.</p>
        </div>
        <div class="col-md-4 wthree_news_top_serv_btm_grid">
            <div class="wthree_news_top_serv_btm_grid_icon">
                <i class="fa fa-truck" aria-hidden="true"></i>
            </div>
            <h3>Giao hàng</h3>
            <p>Thời gian giao hàng được bắt đầu tính từ lúc đơn hàng được Người Bán giao cho đơn vị vận chuyển thành công tới khi đơn vị vận chuyển liên hệ lần đầu tiên với Người Mua để giao hàng.</p>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //newsletter-top-serv-btm -->
@endsection