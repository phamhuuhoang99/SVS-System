@extends('templates.learning.master')
@section('title', 'Learning')
@section('content')

<!--about start here-->
<div class="about">
	<div class="container">
		<div class="about-main">
			<div class="about-top">
				<h2>Về Chúng Tôi</h2>
				<p>Đào tạo phù hợp với mục tiêu học: Học để lấy Bằng, Học để đi làm, Học để biết, Học kỹ năng CNTT, Học nâng cao trình độ.</p>
			</div>
			<div class="about-bottom">
				<div class="col-md-6 about-bott-left">
					<img src="{{ asset('templates/learning/images/ab.jpg') }}" alt="" class="img-responsive">
				</div>
				<div class="col-md-6 about-bott-right">
					 <!-- Elliptic -->
					  <div class="colorful-tab-wrapper" id="colorful-elliptic">
					    <ul class="colorful-tab-menu">
					      <li class="colorful-tab-menu-item active" tab-color="#C9003C"><a href="#elp-0">Học Bổng</a></li>
					      <li class="colorful-tab-menu-item" tab-color="#00A566"><a href="#elp-1">Giảng Viên</a></li>
					      <li class="colorful-tab-menu-item" tab-color="#8021D3"><a href="#elp-2">Thư Viện</a></li>
					      <li class="colorful-tab-menu-item" tab-color="#E54400"><a href="#elp-3">Nhà Trọ</a></li>

					    </ul>
					    <div class="colorful-tab-container">
					      <div class="colorful-tab-content active" id="elp-0">
					        <p>SVS tự hào là "siêu thị" các khóa học trực tuyến ngắn hạn lớn nhất Đông Nam Á với hàng nghìn khóa học thuộc mọi lĩnh vực, đội ngũ giảng viên chuyên nghiệp, giàu kinh nghiệm và mạng lưới học viên rộng khắp cả nước. SVS - nơi bạn học mọi kĩ năng làm chủ tương lai. Giúp người học trải nghiệm và trang bị kỹ năng học chủ động, để có thể kiếm tiền bằng nghề/kiến thức mà mình theo học.</p>
					      </div>
					      <div class="colorful-tab-content" id="elp-1">
                            <p>SVS tự hào là "siêu thị" các khóa học trực tuyến ngắn hạn lớn nhất Đông Nam Á với hàng nghìn khóa học thuộc mọi lĩnh vực, đội ngũ giảng viên chuyên nghiệp, giàu kinh nghiệm và mạng lưới học viên rộng khắp cả nước. SVS - nơi bạn học mọi kĩ năng làm chủ tương lai. Giúp người học trải nghiệm và trang bị kỹ năng học chủ động, để có thể kiếm tiền bằng nghề/kiến thức mà mình theo học.</p>
					      </div>
					      <div class="colorful-tab-content" id="elp-2">
					        <p>SVS tự hào là "siêu thị" các khóa học trực tuyến ngắn hạn lớn nhất Đông Nam Á với hàng nghìn khóa học thuộc mọi lĩnh vực, đội ngũ giảng viên chuyên nghiệp, giàu kinh nghiệm và mạng lưới học viên rộng khắp cả nước. SVS - nơi bạn học mọi kĩ năng làm chủ tương lai. Giúp người học trải nghiệm và trang bị kỹ năng học chủ động, để có thể kiếm tiền bằng nghề/kiến thức mà mình theo học.</p>
					      </div>
					      <div class="colorful-tab-content" id="elp-3">
					        <p>SVS tự hào là "siêu thị" các khóa học trực tuyến ngắn hạn lớn nhất Đông Nam Á với hàng nghìn khóa học thuộc mọi lĩnh vực, đội ngũ giảng viên chuyên nghiệp, giàu kinh nghiệm và mạng lưới học viên rộng khắp cả nước. SVS - nơi bạn học mọi kĩ năng làm chủ tương lai. Giúp người học trải nghiệm và trang bị kỹ năng học chủ động, để có thể kiếm tiền bằng nghề/kiến thức mà mình theo học.</p>
					      </div>

					    </div>
					  </div>
					  <!-- Elliptic -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--about end here-->
<!--about layer1-->
<div class="about-layer1">
	<div class="container">
		<div class="about-agile">
			<h4>HỌC MỌI LÚC, MỌI NƠI</h4>
			<p>Nếu bạn có đam mê với giáo dục, hãy cùng Chúng tôi tạo nên những đột phá mới để thay đổi thực tại và kiến tạo tương lai!</p>
			<p> </p>
		</div>
	</div>
</div>
<!--about layer1-->
<!--team start here-->
<div class="team">
	<div class="container">
		<div class="team-main">
			  <div class="team-top">
			  	<h3>Đội Ngũ Của Chúng Tôi</h3>
			  </div>
              <div class="team-bottom">
                <div class="col-md-3 agileinfo">
                  <!-- normal -->
                  <div class="ih-item circle effect13 bottom_to_top"><a href="#">
                      <div class="img"><img src="{{ asset('templates/learning/images/t1.jpg') }}" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                          <h3>Phong Khoa</h3>
                          <p>Founder</p>


                        </div>
                      </div></a></div>
                  <!-- end normal -->
                  <div class="team-icons">
			        	  <ul>
			        	  	<li><a href="#" class="fa"> </a></li>
			        	  	<li><a href="#" class="tw"> </a></li>
			        	  	<li><a href="#" class="g"> </a></li>
			        	  </ul>
		             </div>
                </div>
                <div class="col-md-3 agileinfo">
                  <!-- normal -->
                  <div class="ih-item circle effect13 bottom_to_top"><a href="#">
                      <div class="img"><img src="{{ asset('templates/learning/images/t2.jpg') }}" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                          <h3>Lê Quy</h3>
                          <p>Giáo Viên</p>
                        </div>
                      </div></a></div>
                  <!-- end normal -->
                  <div class="team-icons">
			        	  <ul>
			        	  	<li><a href="#" class="fa"> </a></li>
			        	  	<li><a href="#" class="tw"> </a></li>
			        	  	<li><a href="#" class="g"> </a></li>
			        	  </ul>
		             </div>
                </div>
                <div class="col-md-3 agileinfo">
                  <!-- normal -->
                  <div class="ih-item circle effect13 bottom_to_top"><a href="#">
                      <div class="img"><img src="{{ asset('templates/learning/images/t3.jpg') }}" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                          <h3>Khánh Hạ</h3>
                          <p>CEO</p>
                        </div>
                      </div></a></div>
                  <!-- end normal -->
                  <div class="team-icons">
			        	  <ul>
			        	  	<li><a href="#" class="fa"> </a></li>
			        	  	<li><a href="#" class="tw"> </a></li>
			        	  	<li><a href="#" class="g"> </a></li>
			        	  </ul>
		             </div>
                </div>
                <div class="col-md-3 agileinfo">
                  <!-- normal -->
                  <div class="ih-item circle effect13 bottom_to_top"><a href="#">
                      <div class="img"><img src="{{ asset('templates/learning/images/t4.jpg') }}" alt="img"></div>
                      <div class="info">
                        <div class="info-back">
                          <h3>Hoàng Nhân</h3>
                          <p>Giáo Viên</p>
                        </div>
                      </div></a></div>
                  <!-- end normal -->
                  <div class="team-icons">
			        	  <ul>
			        	  	<li><a href="#" class="fa"> </a></li>
			        	  	<li><a href="#" class="tw"> </a></li>
			        	  	<li><a href="#" class="g"> </a></li>
			        	  </ul>
		             </div>
                </div>

              </div>
              <!-- end Bottom to top -->
		</div>
	</div>
</div>
<!--team end here-->
@endsection
