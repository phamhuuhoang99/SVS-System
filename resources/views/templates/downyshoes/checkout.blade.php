
@extends('templates.downyshoes.master')
@section('title','Downy Shoes')
@section('content')
<div class="banner_top innerpage" id="home">
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">
				<ul class="short">
					<li><a href={{ route("temp.downyshoes.index") }}>Trang Chủ</a><i>|</i></li>
					<li>Kiểm Tra</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
</div>
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Thanh <span>Toán</span></h3>

				<div class="checkout-right">
					<h4>Giỏ hàng của bạn có: <span>3 sản phẩm</span></h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>STT</th>
								<th>Sản phẩm</th>
								<th>Số lượng </th>
								<th>Tên sản phẩm</th>

								<th>Giá</th>
								<th>Gỡ bỏ</th>
							</tr>
						</thead>
						<tbody>
							<tr class="rem1">
								<td class="invert">1</td>
								<td class="invert-image"><a href={{ route("temp.downyshoes.single") }}><img src={{ asset("templates/downyshoes/img/s1.jpg") }} alt=" " class="img-responsive"></a></td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Bella Toes</td>

								<td class="invert">16.875.000đ</td>
								<td class="invert">
									<div class="rem">
										<div class="close1"> </div>
									</div>

								</td>
							</tr>
							<tr class="rem2">
								<td class="invert">2</td>
								<td class="invert-image"><a href={{ route("temp.downyshoes.single") }}><img src={{ asset("templates/downyshoes/img/s5.jpg") }} alt=" " class="img-responsive"></a></td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Giày Búp Bê Đỏ</td>

								<td class="invert">8.125.000đ</td>
								<td class="invert">
									<div class="rem">
										<div class="close2"> </div>
									</div>

								</td>
							</tr>
							<tr class="rem3">
								<td class="invert">3</td>
								<td class="invert-image"><a href={{ route("temp.downyshoes.single") }}><img src={{ asset("templates/downyshoes/img/s2.jpg") }} alt=" " class="img-responsive"></a></td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Giày Thanh Lịch</td>

								<td class="invert">10.125.000đ</td>
								<td class="invert">
									<div class="rem">
										<div class="close3"> </div>
									</div>

								</td>
							</tr>

						</tbody>
					</table>
				</div>
				<div class="checkout-left">
					<div class="col-md-4 checkout-left-basket">
						<h4>Xem lại giỏ hàng</h4>
						<ul>
							<li>Sản phẩm 1 <i>-</i> <span>16.875.000đ </span></li>
							<li>Sản phẩm 2 <i>-</i> <span>8.125.000đ </span></li>
							<li>Sản phẩm 3 <i>-</i> <span>10.125.000 </span></li>
							<li>Tổng chi phí dịch vụ <i>-</i> <span>1.375.000đ</span></li>
							<li>Tổng tiền <i>-</i> <span>35.125.000đ</span></li>
						</ul>
					</div>
					<div class="col-md-8 address_form">
						<h4>Địa chỉ giao hàng</h4>
						<form action={{ route("temp.downyshoes.payment") }} class="creditly-card-form agileinfo_form">
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Họ tên: </label>
											<input class="billing-address-name form-control" type="text" name="name" placeholder="Họ tên">
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Số điện thoại:</label>
													<input class="form-control" type="text" placeholder="Số điện thoại">
												</div>
											</div>
											<div class="card_number_grid_right">
												<div class="controls">
													<label class="control-label">Địa chỉ: </label>
													<input class="form-control" type="text" placeholder="Địa chỉ">
												</div>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="controls">
											<label class="control-label">Thành phố: </label>
											<input class="form-control" type="text" placeholder="Thành phố">
										</div>
										<div class="controls">
											<label class="control-label">Loại địa chỉ: </label>
											<select class="form-control option-w3ls">
												<option>Văn phòng</option>
												<option>Nhà riêng</option>
												<option>Doanh nghiệp</option>
											</select>
										</div>
									</div>
									<button class="submit check_out">Giao hàng tới địa chỉ này</button>
								</div>
							</section>
						</form>
						<div class="checkout-right-basket">
							<a href={{ route("temp.downyshoes.payment") }}>Thanh toán </a>
						</div>
					</div>

					<div class="clearfix"> </div>


					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- //top products -->
@include('templates.downyshoes.anotherexam')
@endsection

