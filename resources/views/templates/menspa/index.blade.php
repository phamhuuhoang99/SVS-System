@extends('templates.menspa.master')
@section('title','Men Spa')
@section('content')
<!-- banner -->
<div class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1"/>
		<input type="radio" name="slides" id="slides_2"/>
		<input type="radio" name="slides" id="slides_3"/>
		<input type="radio" name="slides" id="slides_4"/>

		<ul class="banner_slide_bg">
			<li>
				<div class="slider-info bg1">
					<div class="bs-slider-overlay">
						<div class="banner-text">
							<div class="container">
								<h2 class="movetxt agile-title text-capitalize">Chúng Tôi Tạo Ra Và Đổi Mới Xu Hướng Kiểu Tóc</h2>
								<p>SVS tin tưởng & nỗ lực mỗi ngày để kết nối bàn tay tài hoa của người thợ Việt cùng quy trình khoa học</p>
								<a href={{ route("temp.menspa.contact") }} class="btn"> Đặt Chỗ Ngay </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg2">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h4 class="movetxt agile-title text-capitalize">Chúng tôi giúp bạn mọc tóc cũng như râu </h4>
								<p>SVS tin tưởng & nỗ lực mỗi ngày để kết nối bàn tay tài hoa của người thợ Việt cùng quy trình khoa học.</p>
								<a href={{ route("temp.menspa.contact") }} class="btn">Đặt Chỗ Ngay </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg3">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
							<h2 class="movetxt agile-title text-capitalize">Chúng tối thiết kế và tạo ra kiểu tóc mới</h2>
							<p>SVS tin tưởng & nỗ lực mỗi ngày để kết nối bàn tay tài hoa của người thợ Việt cùng quy trình khoa học.</p>
								<a href={{ route("temp.menspa.contact") }} class="btn"> Đặt Chỗ Ngay</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="slider-info bg4">
					<div class="bs-slider-overlay1">
						<div class="banner-text">
							<div class="container">
								<h4 class="movetxt agile-title text-capitalize">thiết kế những kiểu cắt tóc theo xu hướng mới nhất</h4>
								<p>SVS tin tưởng & nỗ lực mỗi ngày để kết nối bàn tay tài hoa của người thợ Việt cùng quy trình khoa học.</p>
								<a href={{ route("temp.menspa.contact") }} class="btn"> Đặt Chỗ Ngay </a>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="navigation">
			<div>
			  <label for="slides_1"></label>
			  <label for="slides_2"></label>
			  <label for="slides_3"></label>
			  <label for="slides_4"></label>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
 <!-- banner bottom grids -->
    <section class="content-info py-5" id="about">
        <div class="container py-md-5">
		<h3 class="heading text-center mb-3 mb-sm-5">về chúng tôi</h3>

            <div class="info-w3pvt-mid text-center px-lg-5">

                <div class="title-desc text-center px-lg-5">
					<img src={{ asset("templates/menspa/images/about1.png") }} alt="news image" class="img-fluid">
                    <p class="px-lg-5">SVS tin tưởng & nỗ lực mỗi ngày để kết nối bàn tay tài hoa của người thợ Việt cùng quy trình khoa học 30 phút nhằm đem đến cho phái mạnh toàn cầu kiểu tóc đẹp trai, làn da khoẻ mạnh cuốn hút phái đẹp; tinh thần thư giãn để bứt phá trong sự nghiệp.</p>
                    <a class="btn mt-lg-4 mt-3 read scroll" href="#services" role="button">Xem Thêm</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner bottom grids -->

 <!-- /services -->
    <section class="services py-5" id="services">
        <div class="container py-md-5">
		<h3 class="heading text-center mb-3 mb-sm-5">Dịch Vụ</h3>
            <div class="row ab-info">
                <div class="col-md-6 ab-content ab-content1">
                    <div class="ab-content-inner">
                        <a href={{ route("temp.menspa.single") }}><img src={{ asset("templates/menspa/images/services2.jpg") }} alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4> Cắt tóc</h4>
                            <a href={{ route("temp.menspa.single") }} class="read-more two btn m-0 px-3"><span class="fa fa-arrow-circle-o-right"> </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ab-content ab-content1">
                    <div class="ab-content-inner">
                        <a href={{ route("temp.menspa.single") }}><img src={{ asset("templates/menspa/images/services1.jpg") }} alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4>Cạo Râu</h4>
                            <a href={{ route("temp.menspa.single") }} class="read-more two btn m-0 px-3"><span class="fa fa-arrow-circle-o-right"> </span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ab-info second mt-lg-4">
                <div class="col-md-3 ab-content">
                    <div class="ab-content-inner">
                        <a href={{ route("temp.menspa.single") }}><img src={{ asset("templates/menspa/images/ser3.jpg") }} alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4>Nhuộm Tóc</h4>
                            <a href={{ route("temp.menspa.single") }} class="read-more two btn m-0 px-3"><span class="fa fa-arrow-circle-o-right"> </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ab-content">
                    <div class="ab-content-inner">
                        <a href={{ route("temp.menspa.single") }}><img src={{ asset("templates/menspa/images/ser4.jpg") }} alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4>Gội Đầu</h4>
                            <a href={{ route("temp.menspa.single") }} class="read-more two btn m-0 px-3"><span class="fa fa-arrow-circle-o-right"> </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ab-content">
                    <div class="ab-content-inner">
                        <a href={{ route("temp.menspa.single") }}><img src={{ asset("templates/menspa/images/ser5.jpg") }} alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4>Sấy Tóc</h4>
                            <a href={{ route("temp.menspa.single") }} class="read-more two btn m-0 px-3"><span class="fa fa-arrow-circle-o-right"> </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ab-content">
                    <div class="ab-content-inner">
                        <a href={{ route("temp.menspa.single") }}><img src={{ asset("templates/menspa/images/ser6.jpg") }} alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4>Bôi Kem</h4>
                            <a href={{ route("temp.menspa.single") }} class="read-more two btn m-0 px-3"><span class="fa fa-arrow-circle-o-right"> </span></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- /services -->

	<!-- pricing -->
<section class="pricing py-5">
	<div class="container py-md-5">
		<h3 class="heading text-capitalize text-center mb-3 mb-sm-5"> Bảng Giá</h3>
		<div class="row pricing-grids">
			<div class="col-lg-6  mb-lg-0 mb-5">
				<div class="padding">
					 <h3>GIÁ CẠO RÂU</h3>
					<!-- Item starts -->
					<div class="menu-item">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Cạo Râu Loại 1</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>100.000đ</h6>
							</div>
						</div>

					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item my-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Cạo Râu Loại 2</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>250.000đ</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Cạo Râu Loại 3</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>300.000đ</h6>
							</div>
						</div>

					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item mt-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Cạo Râu Loại 4</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>300.000đ</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item mt-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Cạo Râu Loại 5</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>500.000đ</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item mt-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Cạo Râu Loại 6</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>600.000đ</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
				</div>
			</div>
			<div class="col-lg-6  mb-lg-0 mb-5">
				<div class="padding">
					<h3>CẮT TÓC VÀ CẠO RÂU</h3>
					<!-- Item starts -->
					<div class="menu-item">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Nhuộm Và Cắt Loại 1</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>700.000đ</h6>
							</div>
						</div>

					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item my-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Nhuộm Và Cắt Loại 2</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>550.000đ</h6>
							</div>
						</div>

					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Nhuộm Và Cắt Loại 3</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>600.000đ</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item mt-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Nhuộm Và Cắt Loại 4</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>450.000đ</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item mt-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Nhuộm Và Cắt Loại 5</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>600.000đ</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
					<!-- Item starts -->
					<div class="menu-item mt-4">
						<div class="row border-dot no-gutters">
							<div class="col-8 menu-item-name">
								<h6>Nhuộm Và Cắt Loại 6</h6>
							</div>
							<div class="col-4 menu-item-price text-right">
								<h6>800.000đ</h6>
							</div>
						</div>
					</div>
					<!-- Item ends -->
				</div>
			</div>

		</div>
	</div>
</section>
<!-- //pricing -->
  <!--/order-now-->
    <section class="order-sec py-5">
        <div class="container py-md-5">
            <div class="test-info text-center">
                <h3 class="tittle order">
                    <span>GỌI CHÚNG TÔI ĐỂ ĐẶT LỊCH</span>Quán chúng tôi hổ trợ 24/7</h3>
                <h4 class="tittle my-2">035 618 5047</h4>

                <div class="read-more mx-auto m-0 text-center">
                    <a href={{ route("temp.menspa.contact") }} class="read-more scroll btn">Đặt Lịch</a> </div>
            </div>
        </div>
    </section>
    <!--//order-now-->

 <!--/testimonials-->
	@include('templates.menspa.review')

<!--//testimonials-->
<!-- subscribe -->
<section class="subscribe" id="subscribe">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 d-flex subscribe-left p-lg-5 py-sm-5 py-4">
				<div class="news-icon mr-3">
					<span class="fa fa-paper-plane" aria-hidden="true"></span>
				</div>
				<div class="text">
					<h3>Đăng ký nhận thông tin khuyến mãi</h3>
				</div>
			</div>
			<div class="col-md-7 subscribe-right p-lg-5 py-sm-5 py-4">
				<form>
					<input type="email" name="email" placeholder="Email..." required="">
					<button class="btn1"><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
				</form>
				<p>Chúng tôi bảo mật email cho bạn</p>
			</div>
		</div>
	</div>
</section>
@endsection
