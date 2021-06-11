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
        <a href={{ route("temp.fashion-hub.women") }}>Thời trang nữ</a>
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
                        <li data-thumb={{ asset("templates/fashion-hub/img/mff1.jpg") }}>
                            <div class="thumb-image">
                                <img src={{ asset("templates/fashion-hub/img/mff1.jpg") }} data-imagezoom="true" alt=" " class="img-fluid"> </div>
                        </li>
                        <li data-thumb={{ asset("templates/fashion-hub/img/mff2.jpg") }}>
                            <div class="thumb-image">
                                <img src={{ asset("templates/fashion-hub/img/mff2.jpg") }} data-imagezoom="true" alt=" " class="img-fluid"> </div>
                        </li>
                        <li data-thumb={{ asset("templates/fashion-hub/img/mff3.jpg") }}>
                            <div class="thumb-image">
                                <img src={{ asset("templates/fashion-hub/img/mff3.jpg") }} data-imagezoom="true" alt=" " class="img-fluid"> </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
            <h3> Áo kiểu tay loe thời trang
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
                    450.000đ</h6>
            </div>
            <div class="desc_single">
                <h5>Mô tả</h5>
                <p>Áo kiểu tay loe thời trang được may từ chất liệu vải cao cấp, thiết kế thời thượng cùng đường chỉ may tinh tế sẽ là gợi ý hoàn hảo cho những cô nàng sành điệu xuống phố. Bên cạnh đó, sản phẩm với gam màu trung tính, giúp bạn nữ dễ phối cùng các phụ kiện khác làm tăng thêm sự sành điệu trong phong cách thời trang của mình.</p>
            </div>
            <div class="d-sm-flex justify-content-between">
                <div class="occasional">
                    <h5 class="sp_title mb-3">Nổi bật</h5>
                    <ul class="single_specific">
                        <li>
                            <span>Tay áo </span>dài 3/4</li>
                        <li> Chất liệu:
                            <span>Polyester</span>
                            <li> Mẫu:
                                <span>In Hoa </span>
                            </li>

                    </ul>

                </div>
                <div class="color-quality mt-sm-0 mt-4">
                    <h5 class="sp_title mb-3">dịch vụ</h5>
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
                    <input type="text" placeholder="Nhập code" required>
                    <input type="submit" value="Kiểm Tra">
                </form>
            </div>
            <div class="occasion-cart">
                <div class="chr single-item single_page_b">
                    <form action="#">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="hub_item" value="Floral Print Women's Top">
                        <input type="hidden" name="amount" value="450000">
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
        <div class="card-group my-5">
            <!-- card -->
            <div class="card product-men p-3">
                <div class="men-thumb-item">
                    <img src={{ asset("templates/fashion-hub/img/pf1.jpg") }} alt="img" class="card-img-top">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-body  py-3 px-2">
                    <h5 class="card-title text-capitalize">Áo Nữ Tự Thiết Kế</h5>
                    <div class="card-text d-flex justify-content-between">
                        <p class="text-dark font-weight-bold">700.000đ</p>
                        <p class="line-through">900.000đ</p>
                    </div>
                </div>
                <!-- card footer -->
                <div class="card-footer d-flex justify-content-end">
                    <form action="#">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="hub_item" value="Áo Nữ Tự Thiết Kế">
                        <input type="hidden" name="amount" value="700000">
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
                    <img src={{ asset("templates/fashion-hub/img/pf2.jpg") }} alt="img" class="card-img-top">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-body  py-3 px-2">
                    <h5 class="card-title text-capitalize">Áo Dài Thêu Nữ</h5>
                    <div class="card-text d-flex justify-content-between">
                        <p class="text-dark font-weight-bold">625.000đ</p>
                        <p class="line-through">750.000đ</p>
                    </div>
                </div>
                <!-- card footer -->
                <div class="card-footer d-flex justify-content-end">
                    <form action="#">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="hub_item" value="Áo Dài Thêu Nữ">
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
                    <img src={{ asset("templates/fashion-hub/img/pf3.jpg") }} alt="img" class="card-img-top">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-body  py-3 px-2">
                    <h5 class="card-title text-capitalize">Áo Nữ Ngắn Tay</h5>
                    <div class="card-text d-flex justify-content-between">
                        <p class="text-dark font-weight-bold">525.000đ</p>
                        <p class="line-through">675.000đ</p>
                    </div>
                </div>
                <!-- card footer -->
                <div class="card-footer d-flex justify-content-end">
                    <form action="#">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="hub_item" value="Áo Nữ Ngắn Tay">
                        <input type="hidden" name="amount" value="525000">
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
                    <img src={{ asset("templates/fashion-hub/img/pf4.jpg") }} alt="img" class="card-img-top">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-body  py-3 px-2">
                    <h5 class="card-title text-capitalize">Áo nữ dài tay</h5>
                    <div class="card-text d-flex justify-content-between">
                        <p class="text-dark font-weight-bold">375.000đ</p>
                        <p class="line-through">500.000đ</p>
                    </div>
                </div>
                <!-- card footer -->
                <div class="card-footer d-flex justify-content-end">
                    <form action="#">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="hub_item" value="Áo nữ dài tay">
                        <input type="hidden" name="amount" value="375000">
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
        <!--//new_arrivals-->
    </div>
</div>
</div>
@endsection
