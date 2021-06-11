@extends('templates.downyshoes.master')
@section('title','Downy Shoes')
@section('content')
<div class="banner_top innerpage" id="home">
	<!-- /banner_inner -->
	<div class="services-breadcrumb_w3ls_agileinfo">
		<div class="inner_breadcrumb_agileits_w3">
			<ul class="short">
				<li><a href={{ route("temp.downyshoes.index") }}>Trang Chủ</a><i>|</i></li>
				<li>Shop</li>
			</ul>
		</div>
	</div>
	<!-- //banner_inner -->
</div>
<!-- //banner -->
<!-- top Products -->
<div class="ads-grid_shop">
<div class="shop_inner_inf">
	<!-- tittle heading -->

	<!-- //tittle heading -->
	<!-- product left -->
	<div class="side-bar col-md-3">
		<div class="search-hotel">
			<h3 class="agileits-sear-head">Tìm kiếm..</h3>
			<form>
				<input type="search" placeholder="Tên sản phẩm..." name="search" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<!-- price range -->
		<div class="range">
			<h3 class="agileits-sear-head">Giá</h3>
			<ul class="dropdown-menu6">
				<li>

					<div id="slider-range"></div>
					<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
				</li>
			</ul>
		</div>
		<!-- //price range -->
		<!--preference -->
		<div class="left-side">
			<h3 class="agileits-sear-head">Danh mục sản phẩm</h3>
			<ul>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">Đi chơi<span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">Dự tiệc</span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">Đám cưới</span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">Thể thao</span>
				</li>
			</ul>
		</div>
		<!-- // preference -->
		<!-- discounts -->
		<div class="left-side">
			<h3 class="agileits-sear-head">Giảm giá</h3>
			<ul>
				<li>
					<input type="checkbox" class="checked">
					<span class="span"> >= 5%</span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span"> >= 10% </span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span"> >= 20% </span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span"> >= 30% </span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span"> >= 50% </span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span"> >= 60% </span>
				</li>
			</ul>
		</div>
		<!-- //discounts -->
		<!-- reviews -->
		<div class="customer-rev left-side">
			<h3 class="agileits-sear-head">Đánh giá của khách hàng</h3>
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<span>5.0</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<span>4.0</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-half-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<span>3.5</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<span>3.0</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-half-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<span>2.5</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- //reviews -->
		<!-- deals -->
		<div class="deal-leftmk left-side">
			<h3 class="agileits-sear-head">Khuyến mãi đặc biệt</h3>
			<div class="special-sec1">
				<div class="col-xs-4 img-deals">
					<img src={{ asset("templates/downyshoes/img/s4.jpg") }} alt="">
				</div>
				<div class="col-xs-8 img-deal1">
					<h3>Giày Cao Gót Heels</h3>
					<a href={{ route("temp.downyshoes.single") }}>4.500.000đ</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="special-sec1">
				<div class="col-xs-4 img-deals">
					<img src={{ asset("templates/downyshoes/img/s2.jpg") }} alt="">
				</div>
				<div class="col-xs-8 img-deal1">
					<h3>Giày Thanh Lịch</h3>
					<a href={{ route("temp.downyshoes.single") }}>2.475.000đ</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="special-sec1">
				<div class="col-xs-4 img-deals">
					<img src={{ asset("templates/downyshoes/img/s1.jpg") }} alt="">
				</div>
				<div class="col-xs-8 img-deal1">
					<h3>Bella Toes</h3>
					<a href={{ route("temp.downyshoes.single") }}>4.125.000đ</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="special-sec1">
				<div class="col-xs-4 img-deals">
					<img src={{ asset("templates/downyshoes/img/s5.jpg") }} alt="">
				</div>
				<div class="col-xs-8 img-deal1">
					<h3>Giày Búp Bê Đỏ</h3>
					<a href={{ route("temp.downyshoes.single") }}>5.625.000đ</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="special-sec1">
				<div class="col-xs-4 img-deals">
					<img src={{ asset("templates/downyshoes/img/s3.jpg") }} alt="">
				</div>
				<div class="col-xs-8 img-deal1">
					<h3>(SRV) Sneakers</h3>
					<a href={{ route("temp.downyshoes.single") }}>4.225.000đ</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //deals -->

	</div>
	<!-- //product left -->
	<!-- product right -->
	<div class="left-ads-display col-md-9">
		<div class="wrapper_top_shop">
			<div class="col-md-6 shop_left">
				<img src={{ asset("templates/downyshoes/img/banner3.jpg") }} alt="">
				<h6>Giảm 40%</h6>
			</div>
			<div class="col-md-6 shop_right">
				<img src={{ asset("templates/downyshoes/img/banner2.jpg") }} alt="">
				<h6>Giảm 50%</h6>
			</div>
			<div class="clearfix"></div>
			<!-- product-sec1 -->
			<div class="product-sec1">
				<!--/mens-->
				<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src={{ asset("templates/downyshoes/img/s1.jpg") }} alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.downyshoes.single") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
								<span class="product-new-top">Mới</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href={{ route("temp.downyshoes.single") }}>Bella Toes </a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">16.875.000đ</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Bella Toes">
											<input type="hidden" name="amount" value="16875000">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src={{ asset("templates/downyshoes/img/s2.jpg") }} alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.downyshoes.single") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
								<span class="product-new-top">Mới</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href={{ route("temp.downyshoes.single") }}>Giày Thanh Lịch </a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">10.125.000đ</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Giày Thanh Lịch">
											<input type="hidden" name="amount" value="10125000">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src={{ asset("templates/downyshoes/img/s3.jpg") }} alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.downyshoes.single") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
								<span class="product-new-top">Mới</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href={{ route("temp.downyshoes.single") }}>(SRV) Sneakers </a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">9.375.000đ</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="(SRV) Sneakers">
											<input type="hidden" name="amount" value="9375000">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- //mens -->
				<!-- /womens -->
				<div class="col-md-4 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src={{ asset("templates/downyshoes/img/s4.jpg") }} alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.downyshoes.single") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
								<span class="product-new-top">Mới</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href={{ route("temp.downyshoes.single") }}>Giày Cao Gót Heels </a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">14.375.000đ</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Giày Cao Gót Heels">
											<input type="hidden" name="amount" value="14375000">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src={{ asset("templates/downyshoes/img/s5.jpg") }} alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.downyshoes.single") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
								<span class="product-new-top">Mới</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href={{ route("temp.downyshoes.single") }}>Giày Búp Bê Đỏ </a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">8.125.000đ</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Giày Búp Bê Đỏ">
											<input type="hidden" name="amount" value="8125000">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src={{ asset("templates/downyshoes/img/s6.jpg") }} alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.downyshoes.single") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
								<span class="product-new-top">Mới</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href={{ route("temp.downyshoes.single") }}>Giày Sandan</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">10.625.000đ</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Giày Sandan">
											<input type="hidden" name="amount" value="10625000">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- //womens -->
				<!-- /mens -->
				<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src={{ asset("templates/downyshoes/img/s7.jpg") }} alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.downyshoes.single") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
								<span class="product-new-top">Mới</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href={{ route("temp.downyshoes.single") }}>Giày Chạy Bộ</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">21.875.000đ</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Giày Chạy Bộ">
											<input type="hidden" name="amount" value="21875000">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src={{ asset("templates/downyshoes/img/s8.jpg") }} alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.downyshoes.single") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
								<span class="product-new-top">Mới</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href={{ route("temp.downyshoes.single") }}>Giày Sukun</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">12.625.000đ</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Giày Sukun">
											<input type="hidden" name="amount" value="12625000">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src={{ asset("templates/downyshoes/img/s9.jpg") }} alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href={{ route("temp.downyshoes.single") }} class="link-product-add-cart">Chi tiết</a>
									</div>
								</div>
								<span class="product-new-top">Mới</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href={{ route("temp.downyshoes.single") }}>Bank Sneakers</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">15.875.000đ</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Bank Sneakers">
											<input type="hidden" name="amount" value="15875000">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- //mens -->
				<div class="clearfix"></div>

			</div>

			<!-- //product-sec1 -->
			<div class="col-md-6 shop_left shp">
				<img src={{ asset("templates/downyshoes/img/banner4.jpg") }} alt="">
				<h6>Giảm 21%</h6>
			</div>
			<div class="col-md-6 shop_right shp">
				<img src={{ asset("templates/downyshoes/img/banner1.jpg") }} alt="">
				<h6>Giảm 31%</h6>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
</div>
@include('templates.downyshoes.anotherexam')
@endsection
