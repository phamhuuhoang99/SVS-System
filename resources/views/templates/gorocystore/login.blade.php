@extends('templates.gorocystore.master')
@section('title', 'Cửa hàng tạp hóa điện tử trực tuyến')
@section('content')
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('temp.gorocystore.index') }}">Trang chủ</a><span>|</span></li>
            <li>Đăng nhập & Đăng ký</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    @include('templates.gorocystore.leftbanner')
    <div class="w3l_banner_nav_right">
        <!-- login -->
        <div class="w3_login">
            <h3>Đăng nhập & Đăng ký</h3>
            <div class="w3_login_module">
                <div class="module form-module">
                    <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                        <div class="tooltip">Click đây</div>
                    </div>
                    <div class="form">
                        <h2>Đăng nhập</h2>
                        <input type="text" name="Username" placeholder="Tài khoản" required=" ">
                        <input type="password" name="Password" placeholder="Mật khẩu" required=" ">
                        <input type="submit" value="Đăng nhập">
                    </div>
                    <div class="form">
                        <h2>Đăng ký</h2>
                        <input type="text" name="Username" placeholder="Tên đăng nhập" required=" ">
                        <input type="password" name="Password" placeholder="Mật khâu" required=" ">
                        <input type="email" name="Email" placeholder="Email" required=" ">
                        <input type="text" name="Phone" placeholder="Số điện thoại" required=" ">
                        <input type="submit" value="Đăng ký">
                    </div>
                    <div class="cta"><a href="#">Quên mật khẩu?</a></div>
                </div>
            </div>
            <script>
                $('.toggle').click(function() {
                    // Switches the Icon
                    $(this).children('i').toggleClass('fa-pencil');
                    // Switches the forms
                    $('.form').animate({
                        height: "toggle",
                        'padding-top': 'toggle',
                        'padding-bottom': 'toggle',
                        opacity: "toggle"
                    }, "slow");
                });
            </script>
        </div>
        <!-- //login -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->
<div class="newsletter-top-serv-btm">
    <div class="container">
        <div class="col-md-4 wthree_news_top_serv_btm_grid">
            <div class="wthree_news_top_serv_btm_grid_icon">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <h3>Giỏ hàn</h3>
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