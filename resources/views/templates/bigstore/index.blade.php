@extends('templates.bigstore.master')
@section('title', 'Cửa hàng thương mại điện tử trực tuyến')
@section('content')
<div data-vide-bg="/templates/bigstore/video/video">
    <div class="container">
        <div class="banner-info">
            <h3>Bán hàng online trên Big Store - Khởi đầu thành công cùng Big Store</h3>
            <div class="search-form">
                <form>
                    <input type="text" placeholder="Tìm kiếm" name="Tìm kiếm">
                    <input type="submit" value=" ">
                </form>
            </div>
        </div>
    </div>
</div>
<script src={{ URL::asset("templates/bigstore/js/jquery.vide.min.js") }}></script>
<!--content-->
<div class="content-top ">
    <div class="container ">
        <div class="speclo ">
            <h3>Ưu đãi đặc biệt</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class="tab-head ">
            <nav class="nav-sidebar">
                <ul class="nav tabs ">
                    <li class="active"><a href="#tab1" data-toggle="tab">Nguyên liệu</a></li>
                    <li class=""><a href="#tab2" data-toggle="tab">Đồ ăn nhẹ</a></li>
                    <li class=""><a href="#tab3" data-toggle="tab">Rau củ quả</a></li>
                    <li class=""><a href="#tab4" data-toggle="tab">Đồ ăn sáng & Ngũ cốc</a></li>
                </ul>
            </nav>
            <div class=" tab-content tab-content-t ">
                <div class="tab-pane active text-style" id="tab1">
                    <div class=" con-w3l">
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                    <img src="/templates/bigstore/images/of.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Đậu xanh</a>(1 kg)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>50.000đ</label><em class="item_price">37.500đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="37000" data-quantity="1" data-image="/templates/bigstore/images/of.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
                                    <img src="/templates/bigstore/images/of1.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Dầu Sunflower</a>(5 kg)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>250.000đ</label><em class="item_price">225.000đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Sunflower Oil" data-summary="summary 2" data-price="225000" data-quantity="1" data-image="/templates/bigstore/images/of1.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
                                    <img src="/templates/bigstore/images/of2.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Đậu gà</a>(1 kg)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>75.000đ</label><em class="item_price">50.000đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="50000" data-quantity="1" data-image="/templates/bigstore/images/of2.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
                                    <img src="/templates/bigstore/images/of3.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Đậu nành</a>(1 kg)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>100.000đ</label><em class="item_price">87.000đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="4" data-name="Soya Chunks" data-summary="summary 4" data-price="87000" data-quantity="1" data-image="/templates/bigstore/images/of3.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="tab-pane  text-style" id="tab2">
                    <div class=" con-w3l">
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                                    <img src="/templates/bigstore/images/of4.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Snack khoai tây</a>(100 g)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>25.000đ</label><em class="item_price">17.500đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Lays" data-summary="summary 5" data-price="18500" data-quantity="1" data-image="/templates/bigstore/images/of4.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
                                    <img src="/templates/bigstore/images/of5.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Snack Kurkure</a>(100 g)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>25.000đ</label><em class="item_price">17.000đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Kurkure" data-summary="summary 6" data-price="18500" data-quantity="1" data-image="/templates/bigstore/images/of5.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
                                    <img src="/templates/bigstore/images/of6.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Bỏng ngô</a>(250 g)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>50.000đ</label><em class="item_price">25.000đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="7" data-name="Popcorn" data-summary="summary 7" data-price="25000" data-quantity="1" data-image="/templates/bigstore/images/of6.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
                                    <img src="/templates/bigstore/images/of7.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Hạt điều</a>(250 g)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>100.000đ</label><em class="item_price">85.500đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="8" data-name="Nuts" data-summary="summary 8" data-price="87000" data-quantity="1" data-image="/templates/bigstore/images/of7.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="tab-pane  text-style" id="tab3">
                    <div class=" con-w3l">
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
                                    <img src="/templates/bigstore/images/of8.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Chuối</a>(6 quả)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>50.000đ</label><em class="item_price">37.500đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="9" data-name="Banana" data-summary="summary 9" data-price="37000" data-quantity="1" data-image="/templates/bigstore/images/of8.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
                                    <img src="/templates/bigstore/images/of9.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Hành tây</a>(1 kg)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>25.000đ</label><em class="item_price">18.500đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="10" data-name="Onion" data-summary="summary 10" data-price="18500" data-quantity="1" data-image="/templates/bigstore/images/of9.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
                                    <img src="/templates/bigstore/images/of10.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href=""> Khổ qua</a>(1 kg)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>50.000đ</label><em class="item_price">25.000đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="25000" data-quantity="1" data-image="/templates/bigstore/images/of10.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
                                    <img src="/templates/bigstore/images/of11.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Táo Mỹ</a>(1 kg)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>100.000đ</label><em class="item_price">87.500đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="12" data-name="Apples" data-summary="summary 12" data-price="87000" data-quantity="1" data-image="/templates/bigstore/images/of11.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="tab-pane text-style" id="tab4">
                    <div class=" con-w3l">
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal13" class="offer-img">
                                    <img src="/templates/bigstore/images/of12.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Mật ong</a>(500 g)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>175.000đ</label><em class="item_price">150.000đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="13" data-name="Honey" data-summary="summary 13" data-price="150000" data-quantity="1" data-image="/templates/bigstore/images/of12.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-wthree">
                            <div class="col-m ">
                                <a href="#" data-toggle="modal" data-target="#myModal14" class="offer-img">
                                    <img src="/templates/bigstore/images/of13.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Ngũ cốc</a>(250 g)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>125.000đ</label><em class="item_price">112.500đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="14" data-name="Chocos" data-summary="summary 14" data-price="112500" data-quantity="1" data-image="/templates/bigstore/images/of13.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-wthree">
                            <div class="col-m ">
                                <a href="#" data-toggle="modal" data-target="#myModal15" class="offer-img">
                                    <img src="/templates/bigstore/images/of14.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Yến mạch</a>(1 kg)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>100.000đ</label><em class="item_price">87.500đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="15" data-name="Oats" data-summary="summary 15" data-price="87000" data-quantity="1" data-image="/templates/bigstore/images/of14.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal16" class="offer-img">
                                    <img src="/templates/bigstore/images/of15.png" class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Giảm</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="">Bánh mì</a>(500 g)</h6>
                                    </div>
                                    <div class="mid-2">
                                        <p><label>25.000đ</label><em class="item_price">17.500đ</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="16" data-name="Bread" data-summary="summary 16" data-price="200000" data-quantity="1" data-image="/templates/bigstore/images/of15.png">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--content-->
<div class="content-mid">
    <div class="container">
        <div class="col-md-4 m-w3ls">
            <div class="col-md1 ">
                <a href="{{ route('temp.bigstore.kitchen') }}">
                    <img src="/templates/bigstore/images/co1.jpg" class="img-responsive img" alt="">
                    <div class="big-sa">
                        <h6>Bộ sưu tập mới</h6>
                        <h3>Gia <span>vị </span></h3>
                        <p>Ưu đãi và voucher khủng<br><h6 style="font-size: 20px">Giảm đến 91%</h6><br></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 m-w3ls1">
            <div class="col-md ">
                <a href="">
                    <img src="/templates/bigstore/images/co.jpg" class="img-responsive img" alt="">
                    <div class="big-sale">
                        <div class="big-sale1">
                            <h3>Bán <span>chạy</span></h3>
                            <p>Hot deal trong ngày, Shopping thả ga </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 m-w3ls">
            <div class="col-md2 ">
                <a href="{{ route('temp.bigstore.kitchen') }}">
                    <img src="/templates/bigstore/images/co2.jpg" class="img-responsive img1" alt="">
                    <div class="big-sale2">
                        <h3>Dầu <span>ăn</span></h3>
                        <p>SEAL SẬP SÀN, MUA ĐI CHỜ CHI </p>
                    </div>
                </a>
            </div>
            <div class="col-md3 ">
                <a href="">
                    <img src="/templates/bigstore/images/co3.jpg" class="img-responsive img1" alt="">
                    <div class="big-sale3">
                        <h3>Rau <span>củ</span></h3>
                        <p>Rau an toàn, không thuốc trừ sâu, chất tăng trưởng </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--content-->
<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="{{ route('temp.bigstore.kitchen') }}"> <img class="first-slide" style="width: 100%" src="/templates/bigstore/images/ba.jpg" alt="First slide"></a>
        </div>
        <div class="item">
            <a href="#"> <img class="second-slide " style="width: 100%" src="/templates/bigstore/images/ba1.jpg" alt="Second slide"></a>
        </div>
        <div class="item">
            <a href=""><img class="third-slide " style="width: 100%" src="/templates/bigstore/images/ba2.jpg" alt="Third slide"></a>
        </div>
    </div>
</div>
<!-- carousel -->

<!--content-->
<div class="product">
    <div class="container">
        <div class="spec ">
            <h3>Khuyến mãi đặc biệt</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class=" con-w3l">
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                        <img src="/templates/bigstore/images/of16.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Kem dưỡng ẩm</a>(500 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>175.000đ</label><em class="item_price">150.000đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add add-2">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="150000" data-quantity="1" data-image="/templates/bigstore/images/of16.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal18" class="offer-img">
                        <img src="/templates/bigstore/images/of17.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">  Đậu bắp</a>(250 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>150.00đ</label><em class="item_price">115.000đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="112500" data-quantity="1" data-image="/templates/bigstore/images/of17.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal19" class="offer-img">
                        <img src="/templates/bigstore/images/of18.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Lụa Ribbon</a>(1 cuộn)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>200.000đ</label><em class="item_price">190.000đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="87000" data-quantity="1" data-image="/templates/bigstore/images/of18.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal20" class="offer-img">
                        <img src="/templates/bigstore/images/of19.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Nho</a>(500 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>25.000đ</label><em class="item_price">20.000đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="200000" data-quantity="1" data-image="/templates/bigstore/images/of19.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal21" class="offer-img">
                        <img src="/templates/bigstore/images/of20.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Kẹp</a>(1 gói)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>175.000đ</label><em class="item_price">150.000đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="150000" data-quantity="1" data-image="/templates/bigstore/images/of20.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal22" class="offer-img">
                        <img src="/templates/bigstore/images/of21.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Dầu dưỡng tóc</a>(250 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>125.000đ</label><em class="item_price">112.500đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="112500" data-quantity="1" data-image="/templates/bigstore/images/of21.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal23" class="offer-img">
                        <img src="/templates/bigstore/images/of22.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Nước lau kính</a>(250 kg)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>100.000đ</label><em class="item_price">90.000đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="87000" data-quantity="1" data-image="/templates/bigstore/images/of22.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal24" class="offer-img">
                        <img src="/templates/bigstore/images/of23.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Gel rửa mặt</a>(150 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>25.000đ</label><em class="item_price">20.000đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="200000" data-quantity="1" data-image="/templates/bigstore/images/of23.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection