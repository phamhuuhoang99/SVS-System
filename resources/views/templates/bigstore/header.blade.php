<div class="header">
    <div class="container">
        <div class="logo">
            <h1><a href="{{ route('temp.bigstore.index') }}"><b>T<br>H<br>E</b>Big Store</h1>
        </div>
        <div class="head-t">
            <ul class="card">
                {{-- <li><a href="wishlist.html"><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li> --}}
                <li><a href="{{ route('temp.bigstore.login') }}"><i class="fa fa-user" aria-hidden="true"></i>Đăng nhập</a></li>
                <li><a href="{{ route('temp.bigstore.register') }}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Đăng ký</a></li>
                {{-- <li><a href="about.html"><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
                <li><a href="shipping.html"><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li> --}}
            </ul>
        </div>
        <div class="header-ri">
            <ul class="social-top">
                <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
                <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
                <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
            </ul>
        </div>
        <div class="nav-top">
            <nav class="navbar navbar-default">
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav ">
                        <li class=" active"><a href="{{ route('temp.bigstore.index') }}" class="hyper "><span>Trang chủ</span></a></li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown"><span>Nhà bếp<b class="caret"></b></span></a>
                            <ul class="dropdown-menu multi">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Nước & Đồ uống</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Rau củ quả</a></li>
                                            <li>
                                                <a href="{{ route('temp.bigstore.kitchen') }}"> <i class="fa fa-angle-right" aria-hidden="true"></i>Nguyên liệu</a>
                                            </li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Nhãn hàng nổi tiếng</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Đồ ăn sáng &amp; Ngũ cốc</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Đồ ăn nhẹ</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Gia vị</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Bánh quy</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Đồ ngọt</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Đồ chua</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Đồ hộp</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Thực phẩm khô</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Trà &amp; Cà phê</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3 w3l">
                                        <a href="{{ route('temp.bigstore.kitchen') }}"><img src="/templates/bigstore/images/me.png" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span> Chăm sóc cá nhân<b class="caret"></b></span></a>
                            <ul class="dropdown-menu multi multi1">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i> Ayurvedic </a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Chăm sóc trẻ em</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Mỹ phẩm</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Khử mùi & Nước hoa</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="{{ route('temp.bigstore.kitchen') }}"> <i class="fa fa-angle-right" aria-hidden="true"></i>Chăm sóc tóc</a>
                                            </li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Chăm sóc răng miệng</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Vệ sinh cá nhân</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Chăm sóc da</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Phụ kiện thời trang</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Dụng cụ cắt tóc</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Chăm sóc râu</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Nhu cầu vệ sinh</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3 w3l">
                                        <a href="{{ route('temp.bigstore.kitchen') }}"><img src="/templates/bigstore/images/me1.png" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span>Hộ gia đình<b class="caret"></b></span></a>
                            <ul class="dropdown-menu multi multi2">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Dụng cụ vệ sinh</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Dụng cụ nấú ăn</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Chất tẩy rửa</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Dụng cụ làm vườn</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Bếp & Phòng ăn</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Đồ dùng nấu bếp</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Chăm sóc thú cưng</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Đồ dùng nhựa</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Phụ kiện thơm phòng</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Phục vụ bàn ăn</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Dụng cụ bảo vệ</a></li>
                                            <li><a href="{{ route('temp.bigstore.kitchen') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Phụ kiện trang trí</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3 w3l">
                                        <a href="{{ route('temp.bigstore.kitchen') }}"><img src="/templates/bigstore/images/me2.png" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <li><a href="{{ route('temp.bigstore.contact') }}" class="hyper"><span>Liên hệ SVS</span></a></li>
                    </ul>
                </div>
            </nav>
            <div class="cart">
                <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>