
<!-- //breadcrumbs -->
<!--services-->
<div class="agileits-services" id="services">
    <div class="no-gutters agileits-services-row row">
        <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
            <span class="fas fa-sync-alt p-4"></span>
            <h4 class="mt-2 mb-3">Hoàn trả trong 30 ngày</h4>
        </div>
        <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
            <span class="fas fa-gift p-4"></span>
            <h4 class="mt-2 mb-3">Thẻ quà tặng</h4>
        </div>

        <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
            <span class="fas fa-lock p-4"></span>
            <h4 class="mt-2 mb-3">Thanh toán an toàn</h4>
        </div>
        <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
            <span class="fas fa-shipping-fast p-4"></span>
            <h4 class="mt-2 mb-3">free ship</h4>
        </div>
    </div>
</div>
<!-- //services-->
<!-- about -->
<div class="row no-gutters pb-5">
    <div class="col-sm-4">
        <div class="hovereffect">
            <img class="img-fluid" src={{ asset("templates/fashion-hub/img/a1.jpg") }} alt="">
            <div class="overlay">
                <h5>Thời trang nữ</h5>
                <a class="info" href={{ route("temp.fashion-hub.women") }}>Mua Ngay</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="hovereffect">
            <img class="img-fluid" src={{ asset("templates/fashion-hub/img/a2.jpg") }} alt="">
            <div class="overlay">
                <h5>thời trang nam</h5>
                <a class="info" href={{ route("temp.fashion-hub.men") }}>Mua Ngay</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="hovereffect">
            <img class="img-fluid" src={{ asset("templates/fashion-hub/img/a3.jpg") }} alt="">
            <div class="overlay">
                <h5>Thời trang trẻ em</h5>
                <a class="info" href={{ route("temp.fashion-hub.girls") }}>Mua Ngay</a>
            </div>
        </div>
    </div>
</div>
<!-- //about -->
   <!-- product tabs -->
<section class="tabs_pro py-md-5 pt-sm-3 pb-5">
    <h5 class="head_agileinfo text-center text-capitalize pb-5">
        <span>Sản</span> phẩm hot</h5>
    <div class="tabs tabs-style-line pt-md-5">
        <nav class="container">
            <ul id="clothing-nav" class="nav nav-tabs tabs-style-line" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#women" id="women-tab" role="tab" data-toggle="tab" aria-controls="women" aria-expanded="true">Thời trang nữ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#men" role="tab" id="men-tab" data-toggle="tab" aria-controls="men">Thời gian nam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#girl" role="tab" id="girl-tab" data-toggle="tab" aria-controls="girl">Thời trang bé gái</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#boy" role="tab" id="boy-tab" data-toggle="tab" aria-controls="boy">Thời trang bé trai</a>
                </li>
            </ul>
        </nav>
        <!-- Content Panel -->
        <div id="clothing-nav-content" class="tab-content py-sm-5">
            <div role="tabpanel" class="tab-pane fade show active" id="women" aria-labelledby="women-tab">
                <div id="owl-demo" class="owl-carousel text-center">
                    <div class="item">
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
                                <h5 class="card-title text-capitalize">Áo dài nữ tự thiết kế</h5>
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
                                    <input type="hidden" name="hub_item" value="Self Design Women's Tunic">
                                    <input type="hidden" name="amount" value="700000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
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
                                <h5 class="card-title text-capitalize">Áo dài thêu nữ</h5>
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
                                    <input type="hidden" name="hub_item" value="Áo dài thêu nữ">
                                    <input type="hidden" name="amount" value="625000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
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
                                <h5 class="card-title text-capitalize">Áo nữ ngắn tay</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">525.000đ</p>
                                    <p class="line-through">625.000đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Áo nữ ngắn tay">
                                    <input type="hidden" name="amount" value="525000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>

                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pf9.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Quần jean xanh nhạt nữ</h5>
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
                                    <input type="hidden" name="hub_item" value="Quần jean xanh nhạt nữ">
                                    <input type="hidden" name="amount" value="500000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pf11.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Quần jean xanh đậm nữ mỏng</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">$14.99</p>
                                    <p class="line-through">$18.99</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Quần jean xanh đậm nữ mỏng">
                                    <input type="hidden" name="amount" value="14.99">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <div class="product-men p-3 text-center">
                            <img src={{ asset("templates/fashion-hub/img/p2.png") }} class="img-responsive" alt="" />
                            <a href={{ route("temp.fashion-hub.women") }} class="btn btn-lg bg-info text-white">xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="men" aria-labelledby="men-tab">
                <div id="owl-demo1" class="owl-carousel text-center">
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pm1.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Áo đen trang trọng</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">1.000.000đ</p>
                                    <p class="line-through">1.500.000đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Áo đen trang trọng">
                                    <input type="hidden" name="amount" value="1000000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pm2.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Áo sơ mi màu nâu</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">750.000đ</p>
                                    <p class="line-through">900.000đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Áo sơ mi màu nâu">
                                    <input type="hidden" name="amount" value="750000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <!-- card -->
                    <div class="item">
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
                                <h5 class="card-title text-capitalize">Áo nam đen giản dị</h5>
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
                                    <input type="hidden" name="hub_item" value="Áo nam đen giản dị">
                                    <input type="hidden" name="amount" value="500000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pt1.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Quần tây nam</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">375.000đ</p>
                                    <p class="line-through">475.000đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Quần tây nam">
                                    <input type="hidden" name="amount" value="375000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pt2.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Quần jean nam bó</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">625.000đ</p>
                                    <p class="line-through">900.000đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Quần jean nam bó">
                                    <input type="hidden" name="amount" value="625000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class=" card product-men p-3 ">
                            <div class="men-thumb-item ">
                                <img src={{ asset("templates/fashion-hub/img/pt3.jpg") }} alt="img " class="card-img-top ">
                                <div class="men-cart-pro ">
                                    <div class="inner-men-cart-pro ">
                                        <a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart ">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body py-3 px-2 ">
                                <h5 class="card-title text-capitalize ">Quần vàng nam bó</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold ">375.000đ</p>
                                    <p class="line-through ">475.000đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Quần vàng nam bó">
                                    <input type="hidden" name="amount" value="375000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">

                        <div class="product-men p-3 text-center">
                            <img src={{ asset("templates/fashion-hub/img/p2.png") }} class="img-responsive" alt="">
                            <a href={{ route("temp.fashion-hub.men") }} class="btn btn-lg bg-info text-white">xem thêm</a>
                        </div>
                        <!-- //card -->
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="girl" aria-labelledby="girl-tab">
                <div id="owl-demo2" class="owl-carousel text-center">
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pg1.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.girl") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Váy dài đến gối</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">500.000đ</p>
                                    <p class="line-through">999.999đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Váy dài đến gối">
                                    <input type="hidden" name="amount" value="500000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pg2.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.girl") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Váy dài đến gối</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">625.000đ</p>
                                    <p class="line-through">875.000đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Váy dài đến gối">
                                    <input type="hidden" name="amount" value="625000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pg3.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.girl") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Đầm dự tiệc dài</h5>
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
                                    <input type="hidden" name="hub_item" value="Đầm dự tiệc dài">
                                    <input type="hidden" name="amount" value="375000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3 out_w3">
                            <div class="men-thumb-item position-relative">
                                <img src={{ asset("templates/fashion-hub/img/pg7.jpg") }} alt="img" class="card-img-top">
                                <span class="px-2 position-absolute">hết hàng</span>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">bộ Váy dự tiệc cho bé gái</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">475.000đ</p>
                                    <p class="line-through">625.000đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="hub-cart phub-cart btn">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
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
                                <h5 class="card-title text-capitalize">Đầm dài dự tiệc cho bé gái </h5>
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
                                    <input type="hidden" name="hub_item" value="Đầm dài dự tiệc cho bé gái ">
                                    <input type="hidden" name="amount" value="500000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
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
                                <h5 class="card-title text-capitalize">Đầm dự tiệc dài đến gối</h5>
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
                                    <input type="hidden" name="hub_item" value="Đầm dự tiệc dài đến gối">
                                    <input type="hidden" name="amount" value="450000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <div class="product-men p-3 text-center">
                            <img src={{ asset("templates/fashion-hub/img/p2.png") }} class="img-responsive" alt="" />
                            <a href={{ route("temp.fashion-hub.girls") }} class="btn btn-lg bg-info text-white">xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="boy" aria-labelledby="boy-tab">
                <div id="owl-demo3" class="owl-carousel text-center">
                    <div class="item">
                        <!-- card -->
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
                                <h5 class="card-title text-capitalize">Áo sơ mi, áo ghi lê và quần</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">525.000đ</p>
                                    <p class="line-through">1.000.000đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Áo sơ mi, áo ghi lê và quần">
                                    <input type="hidden" name="amount" value="525000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pb2.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.boy") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Nguyên bộ Lễ hội Kurta </h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">500.000đ</p>
                                    <p class="line-through">750.000đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Nguyên bộ Lễ hội Kurta">
                                    <input type="hidden" name="amount" value="500000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pb3.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.boy") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Áo sơ mi và quần jean bé trai</h5>
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
                                    <input type="hidden" name="hub_item" value="Áo sơ mi và quần jean bé trai">
                                    <input type="hidden" name="amount" value="450000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3 out_w3">
                            <div class="men-thumb-item position-relative">
                                <img src={{ asset("templates/fashion-hub/img/pb7.jpg") }} alt="img" class="card-img-top">
                                <span class="px-2 position-absolute">hết hàng</span>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Nguyên bộ áo Blazer và quần</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">450.000đ</p>
                                    <p class="line-through">650.000đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="hub-cart phub-cart btn">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pb4.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.boy") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Dungaree Casual Solid Denim</h5>
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
                                    <input type="hidden" name="hub_item" value="Dungaree Casual Solid Denim">
                                    <input type="hidden" name="amount" value="500000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pb5.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.boy") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Áo thun bé trai màu xanh</h5>
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
                                    <input type="hidden" name="hub_item" value="Áo thun bé trai màu xanh">
                                    <input type="hidden" name="amount" value="375000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pb6.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.boy") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Áo thun bé trai màu xám</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">250.000đ</p>
                                    <p class="line-through">625.000đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Áo thun bé trai màu xám">
                                    <input type="hidden" name="amount" value="250000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src={{ asset("templates/fashion-hub/img/pb8.jpg") }} alt="img" class="card-img-top">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href={{ route("temp.fashion-hub.boy") }} class="link-product-add-cart">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">Áo sơ mi và quần jean Denim</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">400.000đ</p>
                                    <p class="line-through">650.000đ</p>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer d-flex justify-content-end">
                                <form action="#">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="hub_item" value="Áo sơ mi và quần jean Denim">
                                    <input type="hidden" name="amount" value="400000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <!-- card -->
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
                                <h5 class="card-title text-capitalize">Nguyên bộ Lễ hội Kurta</h5>
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
                                    <input type="hidden" name="hub_item" value="Nguyên bộ Lễ hội Kurta">
                                    <input type="hidden" name="amount" value="450000">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                </form>
                            </div>
                        </div>
                        <!-- //card -->
                    </div>
                    <div class="item">
                        <div class="product-men p-3 text-center">
                            <img src={{ asset("templates/fashion-hub/img/p2.png") }} class="img-responsive" alt="" />
                            <a href={{ route("temp.fashion-hub.boys") }} class="btn btn-lg bg-info text-white">xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- //product tabs -->

<!-- insta posts -->
<section class="py-lg-5">
    <!-- insta posts -->
    <h5 class="head_agileinfo text-center text-capitalize pb-5">
        <span>M</span>ua bán trên Insta</h5>
    <div class="gallery row no-gutters pt-lg-5">
        <div class="col-lg-2 col-sm-4 col-6 gallery-item">
            <img src={{ asset("templates/fashion-hub/img/i1.jpg") }} class="img-fluid" alt="" />
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes">
                        <i class="fas fa-heart"></i> 56</li>
                    <li class="gallery-item-comments">
                        <i class="fas fa-comment"></i> 2</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6 gallery-item">
            <img src={{ asset("templates/fashion-hub/img/i2.jpg") }} class="img-fluid" alt="" />
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes">
                        <i class="fas fa-heart"></i> 89</li>
                    <li class="gallery-item-comments">
                        <i class="fas fa-comment"></i> 5</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6 gallery-item">
            <img src={{ asset("templates/fashion-hub/img/i3.jpg") }} class="img-fluid" alt="" />
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes">
                        <i class="fas fa-heart"></i> 42</li>
                    <li class="gallery-item-comments">
                        <i class="fas fa-comment"></i> 1</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6 gallery-item">
            <img src={{ asset("templates/fashion-hub/img/i4.jpg") }} class="img-fluid" alt="" />
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes">
                        <i class="fas fa-heart"></i> 38</li>
                    <li class="gallery-item-comments">
                        <i class="fas fa-comment"></i> 0</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6 gallery-item">
            <img src={{ asset("templates/fashion-hub/img/i5.jpg") }} class="img-fluid" alt="" />
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes">
                        <i class="fas fa-heart"></i> 38</li>
                    <li class="gallery-item-comments">
                        <i class="fas fa-comment"></i> 0</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6 gallery-item">
            <img src={{ asset("templates/fashion-hub/img/i6.jpg") }} class="img-fluid" alt="" />
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes">
                        <i class="fas fa-heart"></i> 38</li>
                    <li class="gallery-item-comments">
                        <i class="fas fa-comment"></i> 0</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="gallery row no-gutters pb-5">
        <div class="col-lg-2 col-sm-4 col-6 gallery-item">
            <img src={{ asset("templates/fashion-hub/img/i7.jpg") }} class="img-fluid" alt="" />
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes">
                        <i class="fas fa-heart"></i> 56</li>
                    <li class="gallery-item-comments">
                        <i class="fas fa-comment"></i> 2</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6 gallery-item">
            <img src={{ asset("templates/fashion-hub/img/i8.jpg") }} class="img-fluid" alt="" />
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes">
                        <i class="fas fa-heart"></i> 89</li>
                    <li class="gallery-item-comments">
                        <i class="fas fa-comment"></i> 5</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6 gallery-item">
            <img src={{ asset("templates/fashion-hub/img/i9.jpg") }} class="img-fluid" alt="" />
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes">
                        <i class="fas fa-heart"></i> 42</li>
                    <li class="gallery-item-comments">
                        <i class="fas fa-comment"></i> 1</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6 gallery-item">
            <img src={{ asset("templates/fashion-hub/img/i10.jpg") }} class="img-fluid" alt="" />
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes">
                        <i class="fas fa-heart"></i> 38</li>
                    <li class="gallery-item-comments">
                        <i class="fas fa-comment"></i> 0</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6 gallery-item">
            <img src={{ asset("templates/fashion-hub/img/i11.jpg") }} class="img-fluid" alt="" />
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes">
                        <i class="fas fa-heart"></i> 38</li>
                    <li class="gallery-item-comments">
                        <i class="fas fa-comment"></i> 0</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6 gallery-item">
            <img src={{ asset("templates/fashion-hub/img/i12.jpg") }} class="img-fluid" alt="" />
            <div class="gallery-item-info">
                <ul>
                    <li class="gallery-item-likes">
                        <i class="fas fa-heart"></i> 38</li>
                    <li class="gallery-item-comments">
                        <i class="fas fa-comment"></i> 0</li>
                </ul>
            </div>
        </div>
    </div>
</section>