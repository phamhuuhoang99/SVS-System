<!-- header -->
<header id="home">
    <!-- top-bar -->
    <div class="top-bar py-2 border-bottom">
        <div class="container">
            <div class="row middle-flex">
                <div class="col-xl-7 col-md-5 top-social-agile mb-md-0 mb-1 text-lg-left text-center">
                    <div class="row">
                        <div class="col-xl-3 col-6 header-top_w3layouts">
                            <p class="text-da">
                                <span class="fa fa-map-marker mr-2"></span>HCMC, Vietnam
                            </p>
                        </div>
                        <div class="col-xl-3 col-6 header-top_w3layouts">
                            <p class="text-da">
                                <span class="fa fa-phone mr-2"></span>032 625 4592
                            </p>
                        </div>
                        <div class="col-xl-6"></div>
                    </div>
                </div>
                <div class="col-xl-5 col-md-7 top-social-agile text-md-right text-center pr-sm-0 mt-md-0 mt-2">
                    <div class="row middle-flex">
                        <div class="col-lg-5 col-4 top-w3layouts p-md-0 text-right">
                            <!-- login -->
                            <a href={{ URL::route("temp.tasty-burger.login") }} class="btn login-button-2 text-uppercase text-wh">
                                <span class="fa fa-sign-in mr-2"></span>ĐĂNG NHẬP</a>
                            <!-- //login -->
                        </div>
                        <div class="col-lg-7 col-8 social-grid-w3">
                            <!-- social icons -->
                            <ul class="top-right-info">
                                <li>
                                    <p>Theo dõi:</p>
                                </li>
                                <li class="facebook-w3">
                                    <a href="#facebook">
                                        <span class="fa fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="twitter-w3">
                                    <a href="#twitter">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li class="google-w3">
                                    <a href="#google">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </li>
                                <li class="dribble-w3">
                                    <a href="#dribble">
                                        <span class="fa fa-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- //social icons -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- //top-bar -->

<!-- header 2 -->
<!-- navigation -->
<div class="main-top py-1">
    <div class="container">
        <div class="nav-content">
            <!-- logo -->
            <h1>
                <a id="logo" class="logo" href={{ URL::route("temp.tasty-burger.index") }}>
                    <img src={{ URL::asset("templates/tasty-burger/images/logo.png") }} alt="" class="img-fluid"><span>Tasty</span> Burger
                </a>
            </h1>
            <!-- //logo -->
            <!-- nav -->
            <div class="nav_web-dealingsls">
                <nav>
                    <label for="drop" class="toggle">Thực đơn</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li><a href={{ URL::route("temp.tasty-burger.index") }}>Trang chủ</a></li>
                        <li><a href={{ URL::route("temp.tasty-burger.about") }}>Về chúng tôi</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-3" class="toggle toogle-2">
                                Phụ lục <span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#pages">
                                Phụ lục <span class="fa fa-angle-down" aria-hidden="true"></span>
                            </a>
                            <input type="checkbox" id="drop-3" />
                            <ul>
                                <li><a class="drop-text" href="#services">Dịch vụ</a></li>
                                <li><a class="drop-text" href={{ URL::route("temp.tasty-burger.about") }}>Các đầu bếp</a></li>
                                <li><a class="drop-text" href="#blog">Blog</a></li>
                                <li><a class="drop-text" href={{ URL::route("temp.tasty-burger.single") }}>Báo tường</a></li>
                                <li><a class="drop-text" href={{ URL::route("temp.tasty-burger.login") }}>Đăng nhập</a></li>
                                <li><a class="drop-text" href={{ URL::route("temp.tasty-burger.register") }}>Đăng ký</a></li>
                            </ul>
                        </li>
                        <li><a href={{ URL::route("temp.tasty-burger.menu") }}>Thực đơn</a></li>
                        <li><a href={{ URL::route("temp.tasty-burger.contact") }}>Liên hệ</a></li>
                        <li>
                            <!-- login -->
                            {{-- <a href="https://w3layouts.com/" target="_blank" class="dwn-button ml-lg-5">
                                <span class="fa fa-cloud-download mt-lg-0 mt-4" aria-hidden="true"></span>
                            </a> --}}
                            <!-- //login -->
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- //nav -->
        </div>
    </div>
</div>
<!-- //navigation -->
<!-- //header 2 -->