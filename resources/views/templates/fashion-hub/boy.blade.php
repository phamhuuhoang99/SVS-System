@extends('templates.fashion-hub.master')
@section('title','Trung tâm thời trang thương mại điện tử trực tuyến')
@section('content')
<div class="ibanner_w3 pt-sm-5 pt-3">
    <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
        <span>f</span>ashion
        <span>h</span>ub</h4>
</div>
<!-- //inner banner -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href={{route("temp.fashion-hub.index")}}>Trang Chủ</a>
        </li>
        <li class="breadcrumb-item">
            <a href={{route("temp.fashion-hub.boys")}}>Thời Trang Bé Trai</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- Single -->
<div class="innerf-pages section">
    <div class="container">
        <div class="row my-sm-5">
            <div class="col-lg-4 single-right-left">
                <div class="grid images_3_of_2">
                    <div class="flexslider1">
                        <ul class="slides">
                            <li data-thumb={{ asset("templates/fashion-hub/img/pbb1.jpg") }}>
                                <div class="thumb-image">
                                    <img src={{ asset("templates/fashion-hub/img/pbb1.jpg") }} data-imagezoom="true" alt=" " class="img-fluid"> </div>
                            </li>
                            <li data-thumb={{ asset("templates/fashion-hub/img/pbb2.jpg") }}>
                                <div class="thumb-image">
                                    <img src={{ asset("templates/fashion-hub/img/pbb2.jpg") }} data-imagezoom="true" alt=" " class="img-fluid"> </div>
                            </li>
                            <li data-thumb={{ asset("templates/fashion-hub/img/pbb3.jpg") }}>
                                <div class="thumb-image">
                                    <img src={{ asset("templates/fashion-hub/img/pbb3.jpg") }} data-imagezoom="true" alt=" " class="img-fluid"> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
                <h3>Đồ Lễ hội & Áo dự tiệc, Áo ghi lê và Quần
                </h3>
                <div class="caption">
                    <ul class="rating-single">
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                    <h6>
                        525.000đ</h6>
                </div>
                <div class="desc_single">
                    <h5>Mô tả</h5>
                    <p>Thoải mái, độ bền cao, chắc gấp hai lần vải cotton, có thể giặt tay hoặc giặt khô. Thuốc nhuộm tạo nên đường nét sắc nét, in thấm tốt, chống ăn mòn tốt.</p>
                </div>
                <div class="d-sm-flex justify-content-between">
                    <div class="occasional">
                        <h5 class="sp_title mb-3">Nổi bật</h5>
                        <ul class="single_specific">
                            <li>
                                <span> Chất liệu: </span>Cotton</li>
                            <li>
                                <span>Màu sắc :</span> Xanh dương</li>
                            <li>
                                <span> Phù hợp:</span> Bé trai</li>
                            <li>Áo Sơ Mi Đầy Đủ Áo Ghi Lê Và Quần</li>
                        </ul>

                    </div>
                    <div class="color-quality mt-sm-0 mt-4">
                        <h5 class="sp_title mb-3">Dịch vụ</h5>
                        <ul class="single_serv">
                            <li>
                                <a href="#">Hoàn trả trong 30 ngày</a>
                            </li>
                            <li class="mt-2">
                                <a href="#">Thanh toán bằng tiền mặt khi giao hàng</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="description">
                    <h5>Kiểm tra giao hàng, phương thức thanh toán và tiền ship</h5>
                    <form>
                        <input type="text" placeholder="Nhập mã" required />
                        <input type="submit" value="Kiểm tra">
                    </form>
                </div>
                <div class="occasion-cart">
                    <div class="chr single-item single_page_b">
                        <form action="#">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value=" Áo nỉ trắng">
                            <input type="hidden" name="amount" value="525000">
                            <button type="submit" class="hub-cart phub-cart btn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /new_arrivals -->
<div class="section singlep_btm pb-5">
    <div class="container">
        <div class="new_arrivals">
            <h4 class="rad-txt text-capitalize">Có thể bạn quan tâm
            </h4>
            <!-- card group  -->
            <div class="card-group my-5">
                <!-- row1-->
                <!-- card -->
                <div class="card product-men p-3">
                    <div class="men-thumb-item">
                        <img src={{ asset("templates/fashion-hub/img/pb9.jpg") }} alt="img" class="card-img-top">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href={{route("temp.fashion-hub.boy")}} class="link-product-add-cart">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body  py-3 px-2">
                        <h5 class="card-title text-capitalize">Trang phuc Lễ hội Kurta </h5>
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">450.000đ</p>
                            <p class="line-through">625.000đ</p>
                        </div>
                    </div>
                    <!-- card footer -->
                    <div class="card-footer d-flex justify-content-end">
                        <form action="#">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value="Festive Kurta And Pyjama Set">
                            <input type="hidden" name="amount" value="625000">
                            <button type="submit" class="hub-cart phub-cart btn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
                <!-- //card -->
                <!-- card -->
                <div class="card product-men p-3">
                    <div class="men-thumb-item">
                        <img src={{ asset("templates/fashion-hub/img/pb10.jpg") }} alt="img" class="card-img-top">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href={{route("temp.fashion-hub.boy")}} class="link-product-add-cart">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body  py-3 px-2">
                        <h5 class="card-title text-capitalize">Bộ Áo sơ mi dự tiệc và quần</h5>
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">1.000.000đ</p>
                            <p class="line-through">500.000đ</p>
                        </div>
                    </div>
                    <!-- card footer -->
                    <div class="card-footer d-flex justify-content-end">
                        <form action="#">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value="Bộ áo sơ mi dự tiệc và quần">
                            <input type="hidden" name="amount" value="500000">
                            <button type="submit" class="hub-cart phub-cart btn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
                <!-- //card -->
                <!-- card -->
                <div class="card product-men p-3">
                    <div class="men-thumb-item">
                        <img src={{ asset("templates/fashion-hub/img/pb11.jpg") }} alt="img" class="card-img-top">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href={{route("temp.fashion-hub.boy")}} class="link-product-add-cart">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body  py-3 px-2">
                        <h5 class="card-title text-capitalize">Áo sơ mi và quần</h5>
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">500.000đ</p>
                            <p class="line-through">250.000đ</p>
                        </div>
                    </div>
                    <!-- card footer -->
                    <div class="card-footer d-flex justify-content-end">
                        <form action="#">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value="Áo Sơ mi và quần">
                            <input type="hidden" name="amount" value="250000">
                            <button type="submit" class="hub-cart phub-cart btn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
                <!-- //card -->
                <!-- card -->
                <div class="card product-men p-3">
                    <div class="men-thumb-item">
                        <img src={{ asset("templates/fashion-hub/img/pb5.jpg") }} alt="img" class="card-img-top">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href={{route("temp.fashion-hub.boy")}} class="link-product-add-cart">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body  py-3 px-2">
                        <h5 class="card-title text-capitalize">Áo sơ mi, áo ghi lê và quần</h5>
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">350.000đ</p>
                            <p class="line-through">650.000đ</p>
                        </div>
                    </div>
                    <!-- card footer -->
                    <div class="card-footer d-flex justify-content-end">
                        <form action="#">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value="Áo sơ mi, áo ghi lê và quần">
                            <input type="hidden" name="amount" value="350000">
                            <button type="submit" class="hub-cart phub-cart btn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
                <!-- //card -->
                <!-- //row  -->
            </div>
            <!-- //card group -->
            <!--//new_arrivals-->
        </div>
    </div>
</div>
@endsection
