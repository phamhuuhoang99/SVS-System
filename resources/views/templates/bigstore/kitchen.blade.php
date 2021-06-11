@extends('templates.bigstore.master')
@section('title', 'Cửa hàng thương mại điện tử trực tuyến')
@section('content')
<!-- Carousel-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="{{ route('temp.bigstore.kitchen') }}"><img class="first-slide" style="width: 100%" src="/templates/bigstore/images/ba.jpg" alt="First slide"></a>
        </div>
        <div class="item">
            <a href="#"> <img class="second-slide " style="width: 100%" src="/templates/bigstore/images/ba1.jpg" alt="Second slide"></a>
        </div>
        <div class="item">
            <a href=""><img class="third-slide " style="width: 100%" src="/templates/bigstore/images/ba2.jpg" alt="Third slide"></a>

        </div>
    </div>
</div>
<!--carousel -->
<!--content-->
<div class="kic-top ">
    <div class="container ">
        <div class="kic ">
            <h3>Danh mục phổ biến</h3>
        </div>
        <div class="col-md-4 kic-top1">
            <a href="">
                <img src="/templates/bigstore/images/ki.jpg" class="img-responsive" alt="">
            </a>
            <h6>Đậu Lăng vàng</h6>
            <p>Giảm đến 60%</p>
        </div>
        <div class="col-md-4 kic-top1">
            <a href="">
                <img src="/templates/bigstore/images/ki1.jpg" class="img-responsive" alt="">
            </a>
            <h6>Đồ ăn nhẹ</h6>
            <p>Giảm đến 50%</p>
        </div>
        <div class="col-md-4 kic-top1">
            <a href="">
                <img src="/templates/bigstore/images/ki2.jpg" class="img-responsive" alt="">
            </a>
            <h6>Gia vị</h6>
            <p>Giảm đến 30%</p>
        </div>
    </div>
</div>
<div class="product">
    <div class="container">
        <div class="spec ">
            <h3>Sản phẩm</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class=" con-w3l agileinf">
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                        <img src="/templates/bigstore/images/of24.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Lúa mì</a>(500 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>175.000đ</label><em class="item_price">150.000đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="24" data-name="Wheat" data-summary="summary 24" data-price="150000" data-quantity="1" data-image="/templates/bigstore/images/of24.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
                        <img src="/templates/bigstore/images/of25.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href=""> Đào tươi</a>(250 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>125.000đ</label><em class="item_price">112.500đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="25" data-name="Peach Halves" data-summary="summary 25" data-price="112500" data-quantity="1" data-image="/templates/bigstore/images/of25.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
                        <img src="/templates/bigstore/images/of26.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Chuối</a>(1 kg)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>100.000đ</label><em class="item_price">87.500đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="26" data-name="Banana" data-summary="summary 26" data-price="87500" data-quantity="1" data-image="/templates/bigstore/images/of26.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
                        <img src="/templates/bigstore/images/of27.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Gạo</a>(500 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>25.000đ</label><em class="item_price">20.000đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="27" data-name="Rice" data-summary="summary 27" data-price="20000" data-quantity="1" data-image="/templates/bigstore/images/of27.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                        <img src="/templates/bigstore/images/of28.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Dầu ăn</a>(500 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>175.000đ</label><em class="item_price">150.000đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="28" data-name="Oil" data-summary="summary 28" data-price="150000" data-quantity="1" data-image="/templates/bigstore/images/of28.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
                        <img src="/templates/bigstore/images/of29.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Bánh quy</a>(250 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>125.000đ</label><em class="item_price">112.500đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="29" data-name="Biscuits" data-summary="summary 29" data-price="112500" data-quantity="1" data-image="/templates/bigstore/images/of29.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
                        <img src="/templates/bigstore/images/of30.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Đậu</a>(1 kg)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>100.000đ</label><em class="item_price">87.500đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="30" data-name="Nuts" data-summary="summary 30" data-price="87500" data-quantity="1" data-image="/templates/bigstore/images/of30.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
                        <img src="/templates/bigstore/images/of31.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Gạo</a>(500 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>25.000đ</label><em class="item_price">20.000đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="31" data-name="Rice" data-summary="summary 31" data-price="20000" data-quantity="1" data-image="/templates/bigstore/images/of31.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
                        <img src="/templates/bigstore/images/of32.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Mì sợi</a>(500 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>175.000đ</label><em class="item_price">150.000đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="32" data-name="Noodles" data-summary="summary 32" data-price="150000" data-quantity="1" data-image="/templates/bigstore/images/of32.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
                        <img src="/templates/bigstore/images/of33.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Trà</a>(250 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>125.000đ</label><em class="item_price">112.500đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="33" data-name="Tea" data-summary="summary 33" data-price="112500" data-quantity="1" data-image="/templates/bigstore/images/of33.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
                        <img src="/templates/bigstore/images/of34.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Hải sản</a>(1 kg)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>100.000đ</label><em class="item_price">87.500đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="34" data-name="Seafood" data-summary="summary 34" data-price="87500" data-quantity="1" data-image="/templates/bigstore/images/of34.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
                        <img src="/templates/bigstore/images/of35.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="">Nước yến Idli</a>(500 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>25.000đ</label><em class="item_price">20.000đ</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="35" data-name="Oats Idli" data-summary="summary 35" data-price="20000" data-quantity="1" data-image="/templates/bigstore/images/of35.png">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection