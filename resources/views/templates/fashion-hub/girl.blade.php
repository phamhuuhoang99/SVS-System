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
            <a href={{ route("temp.fashion-hub.girls") }}>Thời Trang Bé Gái</a>
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
                            <li data-thumb={{ asset("templates/fashion-hub/img/pgg1.jpg") }}>
                                <div class="thumb-image">
                                    <img src={{ asset("templates/fashion-hub/img/pgg1.jpg") }} data-imagezoom="true" alt=" " class="img-fluid"> </div>
                            </li>
                            <li data-thumb={{ asset("templates/fashion-hub/img/pgg2.jpg") }}>
                                <div class="thumb-image">
                                    <img src={{ asset("templates/fashion-hub/img/pgg2.jpg") }} data-imagezoom="true" alt=" " class="img-fluid"> </div>
                            </li>
                            <li data-thumb={{ asset("templates/fashion-hub/img/pgg3.jpg") }}>
                                <div class="thumb-image">
                                    <img src={{ asset("templates/fashion-hub/img/pgg3.jpg") }} data-imagezoom="true" alt=" " class="img-fluid"> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
             <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
                <h3>Đầm dự tiệc cho bé gái (Xanh dương, ngắn tay)
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
                    <h6>500.000đ</h6>
                </div>
                <div class="desc_single">
                    <h5>Mô tả</h5>
                    <p>chất net rất thoáng mát,chất cực đẹp,thấm hút mồ hôi,sản xuất theo công nghê Hàn Quốc - Hàng xuất Hàn. Vải nhập tuyển chọn chất lượng cao, mềm min, siêu nhẹ, an toàn cho da bé, các Mẹ hoàn toàn yên tâm sử dụng cho con yêu.</p>
                </div>
              <div class="d-sm-flex justify-content-between">
                    <div class="occasional">
                        <h5 class="sp_title mb-3">Nổi bật</h5>
                        <ul class="single_specific">
                            <li>
                                <span>Chất liệu</span> Net</li>
                            <li>
                                <span>Màu sắc :</span> Xanh dương</li>
                            <li>
                                <span>Loại :</span> Áo choàng</li>
                            <li>
                                Đầm dài
                        </ul>

                    </div>
                    <div class="color-quality mt-sm-0 mt-4">
                        <h5 class="sp_title mb-3">Dịch vụ</h5>
                        <ul class="single_serv">
                            <li>
                                <a href="#">Hoàn trả sau 30 ngày</a>
                            </li>
                            <li class="mt-2">
                                <a href="#">Thanh toán bằng tiền mặt khi giao hàng</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="description">
                    <h5>Kiểm tra giao hàng, phương thức thanh toán và tiền ship</h5>
                    <form action="#">
                        <input type="text" placeholder="Nhập mã" required>
                        <input type="submit" value="Kiểm Tra">
                    </form>
                </div>
                <div class="occasion-cart">
                    <div class="chr single-item single_page_b">
                        <form action="#">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value=" Fầm dự tiệc cho bé gái">
                            <input type="hidden" name="amount" value="500.000đ">
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
            <!-- card group 2 -->
            <div class="card-group my-5">
                <!-- row2 -->
                <!-- card -->
                <div class="card product-men p-3">
                    <div class="men-thumb-item">
                        <img src={{asset("templates/fashion-hub/img/pg1.jpg") }} alt="img" class="card-img-top">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body  py-3 px-2">
                        <h5 class="card-title text-capitalize">đầm trắng tinh khôi</h5>
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">2.250.000đ</p>
                            <p class="line-through">3.000.000đ</p>
                        </div>
                    </div>
                    <!-- card footer -->
                    <div class="card-footer d-flex justify-content-end">
                        <form action="#">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value="đầm trắng tinh khôi">
                            <input type="hidden" name="amount" value="2250000">
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
                        <img src={{  asset("templates/fashion-hub/img/pg2.jpg") }} alt="img" class="card-img-top">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body  py-3 px-2">
                        <h5 class="card-title text-capitalize">Blue Wedding Formal Blazer</h5>
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">1.875.000đ</p>
                            <p class="line-through">2.150.000đ</p>
                        </div>
                    </div>
                    <!-- card footer -->
                    <div class="card-footer d-flex justify-content-end">
                        <form action="#">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value="Blue Wedding Formal Blazer">
                            <input type="hidden" name="amount" value="1875000">
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
                        <img src={{  asset("templates/fashion-hub/img/pg3.jpg") }} alt="img" class="card-img-top">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body  py-3 px-2">
                        <h5 class="card-title text-capitalize">Gray Wedding Formal Blazer</h5>
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">1.475.000đ</p>
                            <p class="line-through">1.875.000đ</p>
                        </div>
                    </div>
                    <!-- card footer -->
                    <div class="card-footer d-flex justify-content-end">
                        <form action="#">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value="Gray Wedding Formal Blazer">
                            <input type="hidden" name="amount" value="1475000">
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
                        <img src={{  asset("templates/fashion-hub/img/pg5.jpg") }} alt="img" class="card-img-top">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body  py-3 px-2">
                        <h5 class="card-title text-capitalize">Đầm Blazer nữ</h5>
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">1.625.000đ</p>
                            <p class="line-through">$2.125.000đ</p>
                        </div>
                    </div>
                    <!-- card footer -->
                    <div class="card-footer d-flex justify-content-end">
                        <form action="#">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value="Đầm Blazer nữ">
                            <input type="hidden" name="amount" value="1625000">
                            <button type="submit" class="hub-cart phub-cart btn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
                <!-- //card -->
                <!-- //card 2 -->
            </div>
            <!-- //card group -->
            <!--//new_arrivals-->
        </div>
    </div>
</div>
<!--// Single -->
@endsection

