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
		<li class="breadcrumb-item active" aria-current="page">Thời Trang Nữ</li>
	</ol>
</nav>
<!-- //breadcrumbs -->
<!-- Shop -->
<div class="innerf-pages section">
	<div class="fh-container mx-auto">
		<div class="row my-lg-5 mb-5">
			@include('templates.fashion-hub.leftside')
			<!-- grid right -->
			<div class="col-lg-9 mt-lg-0 mt-5 right-product-grid">
				<!-- card group  -->
				<div class="card-group">
					<!-- card -->
					<div class="col-lg-3 col-sm-6 p-0">
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
								<h5 class="card-title text-capitalize">Áo dài tự thiết kế</h5>
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
									<input type="hidden" name="hub_item" value="Áo dài tự thiết kế">
									<input type="hidden" name="amount" value="700000">
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
								<img src={{ asset("templates/fashion-hub/img/pf2.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Áo dài thêu</h5>
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
									<input type="hidden" name="hub_item" value="Áo dài thêu">
									<input type="hidden" name="amount" value="625000">
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
									<p class="text-dark font-weight-bold">500.000đ</p>
									<p class="line-through">675.000đ</p>
								</div>
							</div>
							<!-- card footer -->
							<div class="card-footer d-flex justify-content-end">
								<form action="#">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="hub_item" value="Áo Nữ Ngắn Tay">
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
								<img src={{ asset("templates/fashion-hub/img/pf4.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Áo Nữ Dài Tay</h5>
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
									<input type="hidden" name="hub_item" value="Áo Nữ Dài Tay">
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
					<!-- //row  -->
				</div>
				<!-- //card group 1-->
				<!-- card group 2 -->
				<div class="card-group my-5">
					<!-- row2 -->
					<!-- card -->
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="card product-men p-3 out_w3">
							<div class="men-thumb-item position-relative">
								<img src={{ asset("templates/fashion-hub/img/pf7.jpg") }} alt="img" class="card-img-top">
								<span class="px-2 position-absolute">hết hàng</span>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Áo Nữ Moderno</h5>
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
					<!-- card -->
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="card product-men p-3">
							<div class="men-thumb-item">
								<img src={{ asset("templates/fashion-hub/img/pf5.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Áo Vàng Dài 3/4  Tay Áo</h5>
								<div class="card-text d-flex justify-content-between">
									<p class="text-dark font-weight-bold">600.000đ</p>
									<p class="line-through">750.000đ</p>
								</div>
							</div>
							<!-- card footer -->
							<div class="card-footer d-flex justify-content-end">
								<form action="#">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="hub_item" value="Áo Vàng Dài 3/4  Tay Áo">
									<input type="hidden" name="amount" value="600000">
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
								<img src={{ asset("templates/fashion-hub/img/pf6.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Áo thun nữ</h5>
								<div class="card-text d-flex justify-content-between">
									<p class="text-dark font-weight-bold">325.000đ</p>
									<p class="line-through">500.000đ</p>
								</div>
							</div>
							<!-- card footer -->
							<div class="card-footer d-flex justify-content-end">
								<form action="#">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="hub_item" value="Blue Wedding Formal Blazer">
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
					<div class="col-lg-3 col-sm-6 p-0">
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
								<h5 class="card-title text-capitalize">Áo Nữ Hoa Dài 3/4 Tay Áo</h5>
								<div class="card-text d-flex justify-content-between">
									<p class="text-dark font-weight-bold">475.000đ</p>
									<p class="line-through">625.000đ</p>
								</div>
							</div>
							<!-- card footer -->
							<div class="card-footer d-flex justify-content-end">
								<form action="#">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="hub_item" value="Áo Nữ Hoa Dài 3/4 Tay Áo">
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
					<!-- //card 2 -->
				</div>
				<!-- //card group -->
				<!-- card group  -->
				<div class="card-group">
					<!-- row1-->
					<!-- card -->
					<div class="col-lg-3 col-sm-6 p-0">
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
								<h5 class="card-title text-capitalize">Quần Jeans xanh mỏng</h5>
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
									<input type="hidden" name="hub_item" value="Men's Hooded Blue T-Shirt">
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
								<img src={{ asset("templates/fashion-hub/img/pf10.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Quần Jeans đen mỏng</h5>
								<div class="card-text d-flex justify-content-between">
									<p class="text-dark font-weight-bold">625.000đ</p>
									<p class="line-through">825.000đ</p>
								</div>
							</div>
							<!-- card footer -->
							<div class="card-footer d-flex justify-content-end">
								<form action="#">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="hub_item" value="Quần Jeans đen mỏng">
									<input type="hidden" name="amount" value="625000">
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
								<img src={{ asset("templates/fashion-hub/img/pf11.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Quần Jeans xanh xước mỏng</h5>
								<div class="card-text d-flex justify-content-between">
									<p class="text-dark font-weight-bold">375.000đ</p>
									<p class="line-through">450.000đ</p>
								</div>
							</div>
							<!-- card footer -->
							<div class="card-footer d-flex justify-content-end">
								<form action="#">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="hub_item" value="Quần Jeans xanh xước mỏng">
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
					<!-- card -->
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="card product-men p-3">
							<div class="men-thumb-item">
								<img src={{ asset("templates/fashion-hub/img/pf12.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Quần Jeans đen mỏng</h5>
								<div class="card-text d-flex justify-content-between">
									<p class="text-dark font-weight-bold">425.000đ</p>
									<p class="line-through">625.000đ</p>
								</div>
							</div>
							<!-- card footer -->
							<div class="card-footer d-flex justify-content-end">
								<form action="#">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="hub_item" value="Quần Jeans đen mỏng">
									<input type="hidden" name="amount" value="425000">
									<button type="submit" class="hub-cart phub-cart btn">
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>
							</div>
						</div>
					</div>
					<!-- //card -->
					<!-- //row  -->
				</div>
				<!-- //card group -->
				<!-- card group  -->
				<div class="card-group">
					<!-- row1-->
					<!-- card -->
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="card product-men p-3">
							<div class="men-thumb-item">
								<img src={{ asset("templates/fashion-hub/img/pf13.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Quần Jeans xanh rách gối</h5>
								<div class="card-text d-flex justify-content-between">
									<p class="text-dark font-weight-bold">425.000đ</p>
									<p class="line-through">500.000đ</p>
								</div>
							</div>
							<!-- card footer -->
							<div class="card-footer d-flex justify-content-end">
								<form action="#">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="hub_item" value="Quần Jeans xanh rách gối">
									<input type="hidden" name="amount" value="425000">
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
								<img src={{ asset("templates/fashion-hub/img/pf14.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Quần Jean xanh nhạt mỏng </h5>
								<div class="card-text d-flex justify-content-between">
									<p class="text-dark font-weight-bold">500.000đ</p>
									<p class="line-through">800.000đ</p>
								</div>
							</div>
							<!-- card footer -->
							<div class="card-footer d-flex justify-content-end">
								<form action="#">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="hub_item" value="Quần Jeans xanh nhạt mỏng">
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
								<img src={{ asset("templates/fashion-hub/img/pf15.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Quần Jeans xanh đậm mỏng</h5>
								<div class="card-text d-flex justify-content-between">
									<p class="text-dark font-weight-bold">300.000đ</p>
									<p class="line-through">450.000đ</p>
								</div>
							</div>
							<!-- card footer -->
							<div class="card-footer d-flex justify-content-end">
								<form action="#">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="hub_item" value="Quần Jeans xanh đậm mỏng">
									<input type="hidden" name="amount" value="300000">
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
								<img src={{ asset("templates/fashion-hub/img/pf16.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.womens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Quần Jean vàng mỏng </h5>
								<div class="card-text d-flex justify-content-between">
									<p class="text-dark font-weight-bold">375.000đ</p>
									<p class="line-through">450.000đ</p>
								</div>
							</div>
							<!-- card footer -->
							<div class="card-footer d-flex justify-content-end">
								<form action="#">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="hub_item" value="Quần Jean vàng mỏng ">
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
					<!-- //row  -->
				</div>
				<!-- //card group -->
			</div>
		</div>
	</div>
</div>
@endsection