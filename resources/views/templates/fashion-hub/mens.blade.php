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
            <a href={{ route("temp.fashion-hub.index") }}>Trang Chủ</a>
        </li>
        <li class="breadcrumb-item">
            <a href={{ route("temp.fashion-hub.men") }}>Thời Trang Nam</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- Single -->
<div class="innerf-pages section py-5">
    <div class="container">
        <div class="row my-sm-5">
            <div class="col-lg-4 single-right-left">
                <div class="grid images_3_of_2">
                    <div class="flexslider1">
                        <ul class="slides">
                            <li data-thumb={{ asset("templates/fashion-hub/img/ms1.jpg") }}>
                                <div class="thumb-image">
                                    <img src={{ asset("templates/fashion-hub/img/ms1.jpg") }} data-imagezoom="true" alt=" " class="img-fluid"> </div>
                            </li>
                            <li data-thumb={{ asset("templates/fashion-hub/img/ms2.jpg") }}>
                                <div class="thumb-image">
                                    <img src={{ asset("templates/fashion-hub/img/ms2.jpg") }} data-imagezoom="true" alt=" " class="img-fluid"> </div>
                            </li>
                            <li data-thumb={{ asset("templates/fashion-hub/img/ms3.jpg") }}>
                                <div class="thumb-image">
                                    <img src={{ asset("templates/fashion-hub/img/ms3.jpg") }} data-imagezoom="true" alt=" " class="img-fluid"> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
                <h3>Áo Vest nam</h3>
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
                        875.000đ</h6>
                </div>
                <div class="desc_single">
                    <h5>Mô tả</h5>
                    <p>Áo Vest nam đã trở thành món đồ không thể thiếu, giúp tôn lên vẻ đẹp, sức cuốn hút của phái mạnh. Một bộ Vest hoàn hảo giúp tôn lên vóc dáng, vẻ lịch lãm sẽ giúp các chàng trai  thêm tự tin và thu hút..</p>
                </div>
                <div class="d-sm-flex justify-content-between">
                    <div class="occasional">
                        <h5 class="sp_title mb-3">Nổi bật</h5>
                        <ul class="single_specific">
                            <li>
                                <span>Chất liệu: </span> Poly-Viscose</li>
                            <li>
                                <span>Hoa văn :</span> Rắn</li>
                            <li>
                                <span>Loại:</span> Đơn ngực</li>
                            <li>
                                <span>Phù hợp :</span> Mỏng</li>
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
                        <input type="text" placeholder="Nhập code" required />
                        <input type="submit" value="Kiểm tra">
                    </form>
                </div>
                <div class="occasion-cart">
                    <div class="chr single-item single_page_b">
                        <form action="#">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value=" Blazer nam trang trọng">
                            <input type="hidden" name="amount" value="400000">
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
            <h4 class="rad-txt text-capitalize">có thể bạn quan tâm
            </h4>
            <!-- card group 2 -->
            <div class="card-group my-5">
                <!-- card -->
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src={{ asset("templates/fashion-hub/img/pm11.jpg") }} alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Blazer Đen Nam</h5>
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
                                <input type="hidden" name="hub_item" value="Blazer Đen Nam">
                                <input type="hidden" name="amount" value="500000">
                                <button type="submit" class="hub-cart phub-cart btn">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                                <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //card -->
                <!-- card -->
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src={{ asset("templates/fashion-hub/img/pm12.jpg") }} alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Áo cưới màu xanh</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">875.000đ</p>
                                <p class="line-through">1.125.000đ</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Áo cưới màu xanh">
                                <input type="hidden" name="amount" value="875000">
                                <button type="submit" class="hub-cart phub-cart btn">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                                <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //card -->
                <!-- card -->
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="card product-men p-3 out_w3">
                        <div class="men-thumb-item position-relative">
                            <img src={{ asset("templates/fashion-hub/img/pm7.jpg") }} alt="img" class="card-img-top">
                            <span class="px-2 position-absolute">hết hàng</span>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Áo cưới màu xám</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">625.000đ</p>
                                <p class="line-through">700.000đ</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="hub-cart phub-cart btn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //card -->
                <!-- card -->
                <div class="col-lg-3 col-sm-6 p-0">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src={{ asset("templates/fashion-hub/img/pm13.jpg") }} alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Blazer Xanh Nam</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">750.000đ</p>
                                <p class="line-through">875.000đ</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Casual Men's Blazer">
                                <input type="hidden" name="amount" value="750000">
                                <button type="submit" class="hub-cart phub-cart btn">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                                <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //card -->
            </div>
            <!-- //card group -->
            <!--//new_arrivals-->
        </div>
    </div>
</div>
<!--// Single -->
@endsection
