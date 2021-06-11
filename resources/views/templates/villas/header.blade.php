<!-- main banner -->
<div class="main-top" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
                <!-- logo -->
                <div id="logo">
                    <h1><a href={{ route("temp.villas.index") }}>Villas</a></h1>
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href={{ route("temp.villas.index") }} class="active">Trang Chủ</a></li>
                            <li><a href={{ route("temp.villas.about") }}>Về SVS</a></li>
                            <li><a href={{ route("temp.villas.gallery") }}>Bộ Sưu Tập</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Xem Thêm <span class="fa fa-angle-down" aria-hidden="true"></span>
                                </label>
                                <a href="#">Xem Thêm <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    @if (!$check)
                                        <li><a href={{ route("temp.villas.index") }} class="drop-text">Dịch Vụ</a></li>
                                        <li><a href={{ route("temp.villas.index") }} class="drop-text">Blog</a></li>
                                        <li><a href={{ route("temp.villas.single") }} class="drop-text">Blog Chi Tiết</a></li>
                                        <li><a href={{ route("temp.villas.index") }} class="drop-text">Sản Phẩm</a></li>
                                        <li><a href={{ route("temp.villas.index") }} class="drop-text">Bảng Giá</a></li>
                                        <li><a
                                            @if(Route::currentRouteName()!='temp.villas.about')
                                                href={{ route("temp.villas.index") }}
                                            @else
                                                href="#testi"
                                            @endif

                                            class="drop-text">Đánh Giá</a></li>
                                        <li><a href={{ route("temp.villas.book") }} class="drop-text">Đặt Phòng</a></li>
                                    @else
                                        <li><a href="#services" class="drop-text">Dịch Vụ</a></li>
										<li><a href="#blog" class="drop-text">Blog</a></li>
                                        <li><a href={{ route("temp.villas.single") }} class="drop-text">Blog Chi Tiết</a></li>
										<li><a href="#why" class="drop-text">Sản Phẩm</a></li>
										<li><a href="#price" class="drop-text">Bảng Giá</a></li>
										<li><a href="#testi" class="drop-text">Đánh Giá</a></li>
										<li><a href={{ route("temp.villas.book") }} class="drop-text">Đặt Phòng</a></li>

                                    @endif
                                </ul>
                            </li>
                            <li><a href={{ route("temp.villas.contact") }}>Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>
    <!-- //header -->

    <!-- banner -->
    <div class="banner_w3lspvt-2">
        @if($check)
        @include('templates.villas.banner');

        @endif
    </div>
    <!-- //banner -->
</div>
<!-- //main banner -->