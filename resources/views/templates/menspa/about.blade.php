@extends('templates.menspa.master')
@section('title','Men Spa')
@section('content')
<!-- banner -->
<section class="inner-page-banner" id="home">
</section>
<!-- //banner -->
<!-- page details -->
<div class="breadcrumb-agile">
	<ol class="breadcrumb mb-0">
		<li class="breadcrumb-item">
			<a href={{ route("temp.menspa.index") }}>Trang Chủ</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Về Chúng Tôi</li>
	</ol>
</div>
<!-- //page details -->
	<!--about-mid -->
    <section class="banner-bottom py-5" id="exp">
        <div class="container py-md-5">
	<h3 class="heading text-center mb-3 mb-sm-5">Giới Thiệu Thêm</h3>
            <div class="row mid-grids mt-lg-5 mt-3">
                <div class="col-md-5 content-w3pvt-img">
                    <img src={{ asset("templates/menspa/images/ab1.jpg") }} alt="" class="img-fluid">
                </div>
                <div class="col-md-7 content-left-bottom entry-w3ls-info text-left mt-3">
                    <h5 class="mt-1">KIỂU TÓC CỔ ĐIỂN</h5>
                    <h4>real men go to
                        <br>real Men spas</h4>
                    <p class="mt-2 text-left">20 năm để mãi 1 mái tóc, đã đến lúc bạn hãy lột xác. Đội ngũ Stylist chuyên nam đẳng cấp VN tự tin sáng tạo cho bạn những kiểu tóc vượt xa mong đợi.</p>

                </div>


            </div>
            <div class="row mid-grids mt-lg-5 mt-3 py-3">

                <div class="col-md-7 content-left-bottom entry-w3ls-info text-left mt-3">
                    <h5 class="mt-1">KIỂU RÂU CỔ ĐIỂN</h5>
                    <h4>Tạo kiểu râu
                        <br>tuyệt vời nhất</h4>
                    <p class="mt-2 text-left">Cạo mặt êm ái giúp da sáng mịn. Gội xả kỹ càng sau cắt để bạn luôn hoàn hảo trước mỗi buổi hẹn quan trọng. Không lo tóc con bám dính nhờ giấy cuốn cổ đặc biệt, chẳng cần lo lắng gội xả lại khi về nhà.</p>

                </div>
                <div class="col-md-5 content-w3pvt-img mt-lg-0 mt-3">
                    <img src={{ asset("templates/menspa/images/ab2.jpg") }} alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- //about-mid -->
<!-- states -->
  <section class="stats-count">
  <div class="overlay py-5">
    <div class="container py-md-5">
      <div class="row text-center">
        <div class="col-lg-3 col-md-3 col-sm-3 col-6 my-3 number-wthree-info ">
          <h5>700</h5>
          <h6 class="pt-2">Khách Hàng</h6>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-6 my-3 number-wthree-info">
          <h5>250 +</h5>
          <h6 class="pt-2">Giải thưởng</h6>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-6 my-3 number-wthree-info">
          <h5>150</h5>
          <h6 class="pt-2">Phong Cách</h6>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-6 my-3 number-wthree-info">
          <h5>125</h5>
          <h6 class="pt-2">Spa Nam</h6>
        </div>
      </div>
    </div>
	</div>
  </section>
  <!--//states -->

 <!--//team -->
    <section class="banner-bottom  py-5">
        <div class="container py-md-5">
			<h3 class="heading text-center mb-3 mb-sm-5">Đội Ngũ</h3>
            <div class="row mt-lg-5 mt-4">
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <img src={{ asset("templates/menspa/images/t1.jpg") }} class="img-fluid" alt="user-image">
                    </div>
                    <div class="team-info">
                        <h3 class="mt-md-4 mt-3">JAMES Men spa</h3>

                        <ul class="list-unstyled team-icons mt-4">
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-dribbble"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-4 team-gd second text-center my-md-0 my-5">
                    <div class="team-img mb-4">
                        <img src={{ asset("templates/menspa/images/t2.jpg") }} class="img-fluid" alt="user-image">
                    </div>
                    <div class="team-info">
                        <h3 class="mt-md-4 mt-3">DEEN MUSTACHIO</h3>

                        <ul class="list-unstyled team-icons mt-4">
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-dribbble"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <img src={{ asset("templates/menspa/images/t3.jpg") }} class="img-fluid" alt="user-image">
                    </div>
                    <div class="team-info">
                        <h3 class="mt-md-4 mt-3"> CLINT HAIRISTA</h3>

                        <ul class="list-unstyled team-icons mt-4">
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="t-icon">
                                    <span class="fa fa-dribbble"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--//team -->
@endsection

