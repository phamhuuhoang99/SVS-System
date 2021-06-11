<!-- header -->
<div class="header">
    <div class="header-grid">
        <div class="container">
            <div class="header-left">
                <ul>
                    <li><i class="glyphicon glyphicon-headphones"></i><a href="#">Hổ Trợ 24/7</a></li>
                    <li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone"></i>035 618 5047</li>

                </ul>
            </div>
            <div class="header-right">
                <div class="header-right1 ">
                    <ul>

                        <li><i class="glyphicon glyphicon-log-in"></i><a href={{ route('temp.classicstyle.login') }}>Đăng Nhập</a></li>
                        <li><i class="glyphicon glyphicon-book"></i><a
                                href={{ route('temp.classicstyle.register') }}>Đăng Ký</a></li>
                    </ul>
                </div>
                <div class="header-right2">
                    <div class="cart box_1">
                        <a href={{ route('temp.classicstyle.checkout') }}>
                            <h3>
                                <div class="total">
                                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> sp)</div>
                                <img src={{ asset('templates/classicstyle/img/cart.png') }} alt="" />
                            </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty" style="margin-top: 8px">Làm Trống Giỏ</a></p>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
                </di v>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="container">
            <div class="logo-nav">

                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand logo-nav-left ">
                            <h1><a href={{ route('temp.classicstyle.index') }}>Classic<span>Style</span></a></h1>
                        </div>

                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href={{ route('temp.classicstyle.index') }} class="act">Trang Chủ</a>
                            </li>
                            <!-- Mega Menu -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Đồ Nữ <b class="caret"></b></a>
                                <ul class="dropdown-menu multi">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Balo Túi</h6>

                                                <li><a href={{ route('temp.classicstyle.products') }}>Phụ Kiện</a></li>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Balo</a></li>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Mũ</a></li>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Hoodies & Áo
                                                        nỉ</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Quần Áo</h6>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Áo khoác</a></li>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Quần Jean</a></li>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Đồ trang sức</a>
                                                </li>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Jumpers &
                                                        Cardigans</a></li>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Áo khoác da</a>
                                                </li>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Áo thun dài
                                                        tay</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Phụ Kiện</h6>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Áo sơ mi</a></li>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Giày</a></li>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Kính mát</a></li>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Quần bó</a></li>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Đồ Bơi</a></li>
                                                <li><a href={{ route('temp.classicstyle.products') }}>Quần & Chinos</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="row-top">
                                        <div class="col-sm-6 row1">
                                            <a href={{ route('temp.classicstyle.products') }}><img
                                                    src={{ asset('templates/classicstyle/img/me.jpg') }} alt=""
                                                    class="img-responsive"></a>
                                        </div>
                                        <div class=" col-sm-6 row2">
                                            <a href={{ route('temp.classicstyle.products') }}><img
                                                    src={{ asset('templates/classicstyle/img/me1.jpg') }} alt=""
                                                    class="img-responsive"></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Đồ Nam <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi multi1">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Balo Túi</h6>

                                                <li><a href={{ route('temp.classicstyle.products1') }}>Phụ Kiện</a></li>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Balo</a></li>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Mũ</a></li>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Hoodies & Áo nỉ</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Quần Áo</h6>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Áo khoác</a></li>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Quần Jean</a></li>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Đồ trang sức</a>
                                                </li>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Jumpers & Cardigans</a></li>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Áo khoác da</a>
                                                </li>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Áo thun dài tay</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Phụ Kiện</h6>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Áo sơ mi</a></li>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Giày</a></li>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Kính mát</a></li>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Quần bó</a></li>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Đồ Bơi</a></li>
                                                <li><a href={{ route('temp.classicstyle.products1') }}>Quần & Chinos</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="row-top">
                                        <div class="col-sm-6 row1">
                                            <a href={{ route('temp.classicstyle.products1') }}><img
                                                    src={{ asset('templates/classicstyle/img/me2.jpg') }} alt=""
                                                    class="img-responsive"></a>
                                        </div>
                                        <div class=" col-sm-6 row2">
                                            <a href={{ route('temp.classicstyle.products1') }}><img
                                                    src={{ asset('templates/classicstyle/img/me3.jpg') }} alt=""
                                                    class="img-responsive"></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href={{ route('temp.classicstyle.contact') }}>Liên Hệ</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
	</div>
</div>
	<!-- //header -->

