@extends('templates.downyshoes.master')
@section('title','Downy Shoes')
@section('content')
<div class="banner_top innerpage" id="home">
	<!-- /banner_inner -->
	<div class="services-breadcrumb_w3ls_agileinfo">
		<div class="inner_breadcrumb_agileits_w3">
			<ul class="short">
				<li><a href={{ route("temp.downyshoes.index") }}>Trang Chủ</a><i>|</i></li>
				<li>sản phẩm</li>
			</ul>
		</div>
	</div>
	<!-- //banner_inner -->
</div>
<!-- //banner -->
<!-- top Products -->
<div class="ads-grid_shop">
	<div class="shop_inner_inf">
		<div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb={{ asset("templates/downyshoes/img/d2.jpg") }}>
							<div class="thumb-image"> <img src={{ asset("templates/downyshoes/img/d2.jpg") }} data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb={{ asset("templates/downyshoes/img/d1.jpg") }}>
							<div class="thumb-image"> <img src={{ asset("templates/downyshoes/img/d1.jpg") }} data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb={{ asset("templates/downyshoes/img/d3.jpg") }}>
							<div class="thumb-image"> <img src={{ asset("templates/downyshoes/img/d3.jpg") }} data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
			<h3>Giày thể thao Sneakers (Màu xanh)</h3>
			<p><span class="item_price">16.250.000đ</span>
				<del>17.500.000đ</del>
			</p>
			<div class="rating1">
				<ul class="stars">
					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="description">
				<h5>Kiểm tra giao hàng, tùy chọn thanh toán và chi phí tại địa điểm nhận hàng</h5>
				<form>
					<input type="text" value="Nhập code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}"
						required="">
					<input type="submit" value="Kiểm tra">
				</form>
			</div>
			<div class="color-quality">
				<div class="color-quality-right">
					<h5>Chất lượng :</h5>
					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
							<option value="null">5 Qty</option>
							<option value="null">6 Qty</option>
							<option value="null">7 Qty</option>
							<option value="null">10 Qty</option>
						</select>
				</div>
			</div>
			<div class="occasional">
				<h5>Loại :</h5>
				<div class="colr ert">
					<label class="radio"><input type="radio" name="radio" checked=""><i></i>Giày thông thường</label>
				</div>
				<div class="colr">
					<label class="radio"><input type="radio" name="radio"><i></i>Sneakers </label>
				</div>
				<div class="colr">
					<label class="radio"><input type="radio" name="radio"><i></i>Giày dự tiệc</label>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="occasion-cart">
				<div class="shoe single-item single_page_b">
					<form action="#">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="shoe_item" value="Chikku Loafers">
						<input type="hidden" name="amount" value="405.00">
						<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button add">

						<a href="#" data-toggle="modal" data-target="#myModal1"></a>
					</form>

				</div>

			</div>
			<ul class="social-nav model-3d-0 footer-social social single_page">
				<li class="share">Chia sẻ: </li>
				<li>
					<a href="#" class="facebook">
						<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="twitter">
						<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="instagram">
						<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="pinterest">
						<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
					</a>
				</li>
			</ul>

		</div>
		<div class="clearfix"> </div>
		<!--/tabs-->
		<div class="responsive_tabs">
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Mô Tả</li>
					<li>Đánh Giá</li>
					<li>Thông Tin</li>
				</ul>
				<div class="resp-tabs-container">
					<!--/tab_one-->
					<div class="tab1">

						<div class="single_page">
							<h6>Chất liệu cao cấp</h6>
							<p>- Giày Thể thao Sneaker được làm từ chất liệu cao cấp, rất mềm mại và êm ái, tạo cảm giác thoải mái cho từng bước đi. Phần đế làm bằng cao su tổng hợp với phần rãnh chống trơn trượt, đảm bảo sự an toàn cho người mang.
								Kiểu dáng tinh tế, hợp xu hướng..</p>
							<p class="para">- Giày thể thao Sneaker được thiết kế theo phong cách hiện đại, giày chú trọng phom dáng với từng đừơng may chắn chắn, làm toát lên nét trẻ trung, thanh lịch.</p>
						</div>
					</div>
					<!--//tab_one-->
					<div class="tab2">

						<div class="single_page">
							<div class="bootstrap-tab-text-grids">
								<div class="bootstrap-tab-text-grid">
									<div class="bootstrap-tab-text-grid-left">
										<img src={{ asset("templates/downyshoes/img/t1.jpg") }} alt=" " class="img-responsive">
									</div>
									<div class="bootstrap-tab-text-grid-right">
										<ul>
											<li><a href="#">Quản trị viên</a></li>
											<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Phản hồi</a></li>
										</ul>
										<p>Chúng tôi có nền tảng thương mại SVS được xây dựng nhằm cung cấp cho người dùng những trải nghiệm dễ dàng, an toàn và nhanh chóng khi mua hàng trực tuyến thông qua hệ thống hổ trợ và vận hành vững mạnh.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="add-review">
									<h4>Thêm một vài đánh giá</h4>
									<form action="#">
										<input type="text" name="Name" required="Name" placeholder="Họ tên">
										<input type="email" name="Email" required="Email" placeholder="Email">
										<textarea name="Message" required="" placeholder="Nội dung"></textarea>
										<input type="submit" value="GỬI">
									</form>
								</div>
							</div>

						</div>
					</div>
					<div class="tab3">

						<div class="single_page">
							<h6>Giày Thể Thao Sneakers (Màu Xanh)</h6>
							<p>Giày Thể thao Sneaker là một “item” đa năng khi có thể dễ dàng phối với bất kì trang phục nào. Chỉ cần một chút nhấn nhá với các phụ kiện, bạn đã có ngay một set đồ hoàn hảo để tự tin đến nơi công sở hoặc dạo phố.</p>
							<p class="para">Giày thể thao nam Sneaker với thiết kế đơn giản mang lại vẻ đẹp tao nhã, tự do, phóng khoáng nhưng đầy cuốn hút.
								- Đây là một sản phẩm của MWC , sản phẩm có thiết kế hoàn hảo để bạn dễ dàng phối hợp cùng mọi loại trang phục.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//tabs-->
		<!-- /new_arrivals -->
		<div class="new_arrivals">
			<h3>Sản phẩm có liên quan</h3>
			<!-- /womens -->
			<div class="col-md-3 product-men women_two">
				<div class="product-shoe-info shoe">
					<div class="men-pro-item">
						<div class="men-thumb-item">
							<img src={{ asset("templates/downyshoes/img/s4.jpg") }} alt="">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href={{ route("temp.downyshoes.single") }} class="link-product-add-cart">chi tiết</a>
								</div>
							</div>
							<span class="product-new-top">Mới</span>
						</div>
						<div class="item-info-product">
							<h4>
								<a href={{ route("temp.downyshoes.single") }}>Giày Cao Gót </a>
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
										<input type="hidden" name="shoe_item" value="Giày Cao Gót">
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
			<div class="col-md-3 product-men women_two">
				<div class="product-shoe-info shoe">
					<div class="men-pro-item">
						<div class="men-thumb-item">
							<img src={{ asset("templates/downyshoes/img/s5.jpg") }} alt="">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href={{ route("temp.downyshoes.single") }} class="link-product-add-cart">chi tiết</a>
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
			<div class="col-md-3 product-men women_two">
				<div class="product-shoe-info shoe">
					<div class="men-pro-item">
						<div class="men-thumb-item">
							<img src={{ asset("templates/downyshoes/img/s7.jpg") }} alt="">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href={{ route("temp.downyshoes.single") }} class="link-product-add-cart">chi tiết</a>
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
			<div class="col-md-3 product-men women_two">
				<div class="product-shoe-info shoe">
					<div class="men-pro-item">
						<div class="men-thumb-item">
							<img src={{ asset("templates/downyshoes/img/s8.jpg") }} alt="">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href={{ route("temp.downyshoes.single") }} class="link-product-add-cart">chi tiết</a>
								</div>
							</div>
							<span class="product-new-top">Mới</span>
						</div>
						<div class="item-info-product">
							<h4>
								<a href={{ route("temp.downyshoes.single") }}>Giày Sukun Nam</a>
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
										<input type="hidden" name="shoe_item" value="Giày Sukun Nam">
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

			<!-- //womens -->
			<div class="clearfix"></div>
		</div>
		<!--//new_arrivals-->


	</div>
</div>
@include('templates.downyshoes.anotherexam')
@endsection

