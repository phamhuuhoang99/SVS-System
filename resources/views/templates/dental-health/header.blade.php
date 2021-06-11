<!-- top header -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <ul class="d-lg-flex header-w3_pvt">
                    <li class="mr-lg-3">
                        <span class="fa fa-envelope-open"></span>
                        <a href="smartvietsolution@gmail.com" class="">smartvietsolution@gmail.com</a>
                    </li>
                    <li>
                        <span class="fa fa-phone"></span>
                        <p class="d-inline">Gọi: 035 618 5047</p>
                    </li>
                </ul>
            </div>
            <div class="col-sm-7 header-right-w3_pvt">
                <ul class="d-lg-flex header-w3_pvt justify-content-lg-end">
                    <li class="mr-lg-7">
                        <span class=""><span class="fa fa-clock-o"></span>Thứ 2 - Thứ 6 : 8:30am - 9:30pm</span>
                    </li>
                    <li class="">
                        <span class=""><span class="fa fa-clock-o"></span>Thứ 7 & Chủ Nhật : 9:00am - 6:00pm</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- //top header -->

<!-- //header -->
<header class="py-3">
    <div class="container">
        <div id="logo">
            <h1> <a href="{{ route('temp.detal-health.index') }}"><span class="fa fa-stethoscope" aria-hidden="true"></span> Dental Health</a></h1>
        </div>
        <!-- nav -->
        <nav class="d-lg-flex">

            <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
            <input type="checkbox" id="drop" />
            <ul class="menu mt-2 ml-auto">
                <li class="active"><a href="{{ route('temp.detal-health.index') }}">Trang Chủ</a></li>
                <li class=""><a href="{{ route('temp.detal-health.about') }}">Về Chúng Tôi</a></li>
                <li class=""><a href="{{ route('temp.detal-health.services') }}">Dịch Vụ</a></li>
                <li class=""><a href="{{ route('temp.detal-health.gallery') }}">Bộ Sưu Tập</a></li>
                <li class=""><a href="{{ route('temp.detal-health.blog') }}">Blog</a></li>
                <li class=""><a href="{{ route('temp.detal-health.contact') }}">Liên Hệ</a></li>
            </ul>
            <div class="login-icon ml-2">
                <a class="user" href="{{ route('temp.detal-health.contact') }}">Đặt Lịch</a>
            </div>
        </nav>
        <div class="clear"></div>
        <!-- //nav -->
    </div>
</header>
<!-- //header -->
