@extendS('templates.fashion-hub.master')
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
            <a href={{ route("temp.fashion-hub.index") }}>Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Shop</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- Shop -->
<div class="innerf-pages section">
    <div class="container">
        <!-- grid right -->
        <div class="py-sm-5 py-3 right-product-grid">
            <!-- card group 2 -->
            <h5 class="shop_w3 text-capitalize">
                Bộ sưu tập Thời trang nam</h5>
            <div class="row card-group my-sm-5 mt-5">
                <!-- row2 -->
                <!-- card -->
                <div class="col-lg-3 col-sm-6 col-12">
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
                            <h5 class="card-title text-capitalize">Blazer Đen Nam </h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">500.000đ</p>
                                <p class="line-through">625.000đ</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Blazer Đen Nam ">
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
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
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
                            <h5 class="card-title text-capitalize">Áo Cưới Màu Xanh</h5>
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
                                <input type="hidden" name="hub_item" value="Blue Wedding Formal Blazer">
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
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5">
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
                                <input type="hidden" name="hub_item" value="Blazer Xanh Nam">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="card py-sm-5 border-0">
                        <a class="btn-lg btn-secondary text-center m-5" href={{ route("temp.fashion-hub.men") }}>Xem thêm</a>
                    </div>
                </div>
                <!-- //card 2 -->
            </div>
            <!-- //card group -->

            <!-- card group 2 -->
            <h5 class="shop_w3 text-capitalize">
               Bộ sưu tập thời trang nữ</h5>
            <div class="row card-group my-sm-5 mt-5">
                <!-- row2 -->
                <!-- card -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src={{ asset("templates/fashion-hub/img/pf6.jpg") }} alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Áo Thun Polo Nữ Thông Thường</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">325.000đ</p>
                                <p class="line-through">525.000đ</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Áo Thun Polo Nữ Thông Thường">
                                <input type="hidden" name="amount" value="325000">
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
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src={{ asset("templates/fashion-hub/img/pf8.jpg") }} alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Tay áo dài 3/4</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">475.000đ</p>
                                <p class="line-through">675.000đ</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Tay áo dài 3/4">
                                <input type="hidden" name="amount" value="475000">
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
                <div class="col-lg-3 col-sm-6  mt-lg-0 mt-5">
                    <div class="card product-men p-3 out_w3">
                        <div class="men-thumb-item position-relative">
                            <img src={{ asset("templates/fashion-hub/img/pf7.jpg") }} alt="img" class="card-img-top">
                            <span class="px-2 position-absolute">hết hàng</span>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Áo Dài Nữ Moderno</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">675.000đ</p>
                                <p class="line-through">875.000đ</p>
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
                <div class="col-lg-3 col-sm-6">
                    <div class="card py-sm-5 border-0">
                        <a class="btn-lg btn-secondary text-center m-5" href={{ route("temp.fashion-hub.women") }}>Xem thêm</a>
                    </div>
                </div>
                <!-- //card 2 -->
            </div>
            <!-- //card group -->

            <!-- card group 2 -->
            <h5 class="shop_w3 text-capitalize">
                Bộ sưu tập thời trang bé gái</h5>
            <div class="card-group my-sm-5 mt-5">
                <!-- row2 -->
                <!-- card -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src={{ asset("templates/fashion-hub/img/pg4.jpg") }} alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href={{ route("temp.fashion-hub.girl") }} class="link-product-add-cart">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Đầm Dự Tiệc Cho Bé Gái </h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">500.000đ</p>
                                <p class="line-through">875.000đ</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Đầm Dự Tiệc Cho Bé Gái">
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
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src={{ asset("templates/fashion-hub/img/pg5.jpg") }} alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href={{ route("temp.fashion-hub.girl") }} class="link-product-add-cart">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Đầm Dự Tiệc Dài đến Đầu Gối</h5>
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
                                <input type="hidden" name="hub_item" value="Đầm Dự Tiệc Dài Đến Đầu Gối">
                                <input type="hidden" name="amount" value="450000">
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
                <div class="col-lg-3 col-sm-6  mt-lg-0 mt-5">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src={{ asset("templates/fashion-hub/img/pg8.jpg") }} alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href={{ route("temp.fashion-hub.girl") }} class="link-product-add-cart">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Đầm Dự Tiệc Dài Đến Đầu Gối</h5>
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
                                <input type="hidden" name="hub_item" value="Đầm Dự Tiệc Dài Đến Đầu Gối">
                                <input type="hidden" name="amount" value="375000">
                                <button type="submit" class="hub-cart phub-cart btn">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                                <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //card -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card py-sm-5 border-0">
                        <a class="btn-lg btn-secondary text-center m-5" href={{ route("temp.fashion-hub.girls") }}>Xem thêm</a>
                    </div>
                </div>
            </div>
            <!-- //card group -->
            <!-- card group  -->
            <h5 class="row shop_w3 text-capitalize">
                Bộ sưu tập thời trang bé trai</h5>
            <div class="card-group my-5">
                <!-- row1-->
                <!-- card -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src={{ asset("templates/fashion-hub/img/pb9.jpg") }} alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href={{ route("temp.fashion-hub.boy") }} class="link-product-add-cart">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Nguyên bộ Lễ Hội Kurta </h5>
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
                                <input type="hidden" name="hub_item" value="Nguyên bộ Lễ Hội Kurta">
                                <input type="hidden" name="amount" value="450000">
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
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src={{ asset("templates/fashion-hub/img/pb10.jpg") }} alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href={{ route("temp.fashion-hub.boy") }} class="link-product-add-cart">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Áo Sơ Mi Dự Tiệc Và Quần</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">775.000đ</p>
                                <p class="line-through">1.150.000đ</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Áo Sơ Mi Dự Tiệc Và Quần">
                                <input type="hidden" name="amount" value="775000">
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
                <div class="col-lg-3 col-sm-6  mt-lg-0 mt-5">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src={{ asset("templates/fashion-hub/img/pb1.jpg") }} alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href={{ route("temp.fashion-hub.boy") }} class="link-product-add-cart">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">Áo Sơ Mi, Áo Ghi Lê Và Quần</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">375.000đ</p>
                                <p class="line-through">675.000đ</p>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Áo Sơ Mi, Áo Ghi Lê Và Quần">
                                <input type="hidden" name="amount" value="375000">
                                <button type="submit" class="hub-cart phub-cart btn">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                                <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //card -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card py-sm-5 border-0">
                        <a class="btn-lg btn-secondary text-center m-5" href={{ route("temp.fashion-hub.boys") }}>Xem thêm</a>
                    </div>
                    <!-- //row  -->
                </div>
            </div>
            <!-- //card group -->

        </div>
    </div>
</div>
@endsection