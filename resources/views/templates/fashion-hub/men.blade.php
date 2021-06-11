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
		<li class="breadcrumb-item active" aria-current="page">Thời Trang Nam</li>
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
								<img src={{ asset("templates/fashion-hub/img/pm1.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Áo sơ mi đen</h5>
								<div class="card-text d-flex justify-content-between">
									<p class="text-dark font-weight-bold">1.000.000đ</p>
									<p class="line-through">1.250.000đ</p>
								</div>
							</div>
							<!-- card footer -->
							<div class="card-footer d-flex justify-content-end">
								<form action="#">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="hub_item" value="Áo sơ mi đen">
									<input type="hidden" name="amount" value="1000000">
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
								<img src={{ asset("templates/fashion-hub/img/pm2.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Áo sơ mi màu vàng nâu</h5>
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
									<input type="hidden" name="hub_item" value="Áo sơ mi màu vàng nâu">
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
					<div class="col-lg-3 col-sm-6 p-0">
						<!-- card -->
						<div class="card product-men p-3">
							<div class="men-thumb-item">
								<img src={{ asset("templates/fashion-hub/img/pm3.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Áo sơ mi màu xanh lá</h5>
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
									<input type="hidden" name="hub_item" value="Áo sơ mi màu xanh lá">
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
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="card product-men p-3">
							<div class="men-thumb-item">
								<img src={{ asset("templates/fashion-hub/img/pm9.jpg") }} alt="img" class="card-img-top">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
							</div>
							<!-- card body -->
							<div class="card-body  py-3 px-2">
								<h5 class="card-title text-capitalize">Áo sơ mi màu xanh dương</h5>
								<div class="card-text d-flex justify-content-between">
									<p class="text-dark font-weight-bold">550.000đ</p>
									<p class="line-through">650.000đ</p>
								</div>
							</div>
							<!-- card footer -->
							<div class="card-footer d-flex justify-content-end">
								<form action="#">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="hub_item" value="Áo sơ mi màu xanh dương">
									<input type="hidden" name="amount" value="550000">
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
					<!-- //card group 1-->
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
										<p class="line-through">625.000đ</p>
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
										<input type="hidden" name="hub_item" value="Áo Cưới Màu Xanh">
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
									<h5 class="card-title text-capitalize">Áo Cưới Màu Xám</h5>
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
					</div>
					<!-- //card group -->
					<!-- card group  -->
					<div class="card-group">
						<div class="col-lg-3 col-sm-6 p-0">
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
									<h5 class="card-title text-capitalize">Quần tây nam bó</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">350.000đ</p>
										<p class="line-through">475.000đ</p>
									</div>
								</div>
								<!-- card footer -->
								<div class="card-footer d-flex justify-content-end">
									<form action="#">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1">
										<input type="hidden" name="hub_item" value="Quần tây nam bó">
										<input type="hidden" name="amount" value="350000">
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
									<img src={{ asset("templates/fashion-hub/img/pt2.jpg") }} alt="img" class="card-img-top">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
										</div>
									</div>
								</div>
								<!-- card body -->
								<div class="card-body  py-3 px-2">
									<h5 class="card-title text-capitalize">Quần Jean bó</h5>
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
										<input type="hidden" name="hub_item" value="Quần Jean bó">
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
									<img src={{ asset("templates/fashion-hub/img/pt3.jpg") }} alt="img" class="card-img-top">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
										</div>
									</div>
								</div>
								<!-- card body -->
								<div class="card-body  py-3 px-2">
									<h5 class="card-title text-capitalize">Quần tay nam gold</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">350.000đ</p>
										<p class="line-through">475.000đ</p>
									</div>
								</div>
								<!-- card footer -->
								<div class="card-footer d-flex justify-content-end">
									<form action="#">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1">
										<input type="hidden" name="hub_item" value="Quần tay nam gold">
										<input type="hidden" name="amount" value="350000">
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
									<img src={{ asset("templates/fashion-hub/img/pt4.jpg") }} alt="img" class="card-img-top">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
										</div>
									</div>
								</div>
								<!-- card body -->
								<div class="card-body  py-3 px-2">
									<h5 class="card-title text-capitalize">Quần Tây Xanh</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">425.000đ</p>
										<p class="line-through">650.000đ</p>
									</div>
								</div>
								<!-- card footer -->
								<div class="card-footer d-flex justify-content-end">
									<form action="#">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1">
										<input type="hidden" name="hub_item" value="Quần Tây Xanh">
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
					<div class="card-group mt-5">
						<!-- row1-->
						<!-- card -->
						<div class="col-lg-3 col-sm-6 p-0">
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									<img src={{ asset("templates/fashion-hub/img/pt5.jpg") }} alt="img" class="card-img-top">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
										</div>
									</div>
								</div>
								<!-- card body -->
								<div class="card-body  py-3 px-2">
									<h5 class="card-title text-capitalize">Quần Jean Đen</h5>
									<div class="card-text d-flex justify-content-between">
										<p class="text-dark font-weight-bold">550.000đ</p>
										<p class="line-through">650.000đ</p>
									</div>
								</div>
								<!-- card footer -->
								<div class="card-footer d-flex justify-content-end">
									<form action="#">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1">
										<input type="hidden" name="hub_item" value="Quần Jean Đen">
										<input type="hidden" name="amount" value="550000">
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
									<img src={{ asset("templates/fashion-hub/img/pt6.jpg") }} alt="img" class="card-img-top">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
										</div>
									</div>
								</div>
								<!-- card body -->
								<div class="card-body  py-3 px-2">
									<h5 class="card-title text-capitalize">Quần Jean đen</h5>
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
										<input type="hidden" name="hub_item" value="Quần Jean đen">
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
									<img src={{ asset("templates/fashion-hub/img/pt7.jpg") }} alt="img" class="card-img-top">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
										</div>
									</div>
								</div>
								<!-- card body -->
								<div class="card-body  py-3 px-2">
									<h5 class="card-title text-capitalize">Quần jean xanh</h5>
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
										<input type="hidden" name="hub_item" value="Quần jean xanh">
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
									<img src={{ asset("templates/fashion-hub/img/pt8.jpg") }} alt="img" class="card-img-top">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href={{ route("temp.fashion-hub.mens") }} class="link-product-add-cart">Chi tiết</a>
										</div>
									</div>
								</div>
								<!-- card body -->
								<div class="card-body  py-3 px-2">
									<h5 class="card-title text-capitalize">Quần Jean Nam Màu Xanh Đậm</h5>
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
										<input type="hidden" name="hub_item" value="Quần Jean Nam Màu Xanh Đậm">
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
						<!-- //row  -->
					</div>
					<!-- //card group -->
				</div>
			</div>
		</div>
	</div>
	<!--// Shop -->
@endsection

