@extends('templates.downyshoes.master')
@section('title','Downy Shoes')
@section('content')
<div class="banner_top innerpage" id="home">
	<!-- /banner_inner -->
	<div class="services-breadcrumb_w3ls_agileinfo">
		<div class="inner_breadcrumb_agileits_w3">
			<ul class="short">
				<li><a href={{ route("temp.downyshoes.index") }}>Trang Chủ</a><i>|</i></li>
				<li>Về SVS</li>
			</ul>
		</div>
	</div>
	<!-- //banner_inner -->
</div>
<div class="ads-grid_shop">
	<div class="shop_inner_inf">
		<h3 class="head">Về chúng tôi</h3>
		<p class="head_para">Thêm một số thông tin</p>
		<div class="inner_section_w3ls">
			<div class="col-md-6 news-left">
				<img src={{ asset("templates/downyshoes/img/ab.jpg") }} alt=" " class="img-responsive">
			</div>
			<div class="col-md-6 news-right">
				<h4>Chào mừng bạn đến Downy Shoes Của Chúng Tôi</h4>
				<p class="sub_p">Chúng tôi cũng đã và đang là những người tiêu dùng nên chúng tôi hiểu rất rõ tầm quan trọng của một đôi giày. Đó có thể là một đôi giày thể thao chạy bộ, đi chơi hay giày đá banh nhưng tựu chung lại thứ chúng ta cần vẫn là sự thoải mái và tự tin khi mang đôi giày vào. Với một đôi chân khỏe, một đôi giày tốt bạn có thể bước qua những chướng ngại, có thể thoải mái thể hiện mình, thoải mái vận động với những dòng thể thao hay thoải mái chưng diện với những dòng Sneaker kinh điển.</p>
				<p>Từ niềm cảm hứng bất tận với giày, đội ngũ chúng tôi đã cho ra đời đứa con tinh thần Downy Shoes. Với mong muốn mang đến cho khách hàng những đôi giày "chất nhất" đến từ các thương hiệu hàng đầu thế giới như Nike, Adidas, Puma, Reebok, Fila, Converse, New Balance, Asics,… với mức giá vô cùng hợp lý. Từ giày bóng đá, tennis, cầu lông cho đến giày sneaker, running, training...</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

</div>
<div class="mid_services">
	<div class="col-md-6 according_inner_grids">
		<h3 class="heading two">Chúng tôi là ai</h3>
		<div class="according_info">
			<div class="panel-group about_panel" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title asd">
							<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
								aria-controls="collapseOne">
						  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Phương châm
						</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body panel_text">
							Chúng tôi có nền tảng thương mại SVS được xây dựng nhằm cung cấp cho người dùng những trải nghiệm dễ dàng, an toàn và nhanh chóng khi mua hàng trực tuyến thông qua hệ thống hổ trợ và vận hành vững mạnh.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title asd">
							<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						  	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Vị trí của chúng tôi</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body panel_text">
							Đối với người dùng trong khu vực, SVS mang đến trải nghiệm mua sắm tích hợp với vô số sản phẩm đa dạng chủng loại, cộng đồng người dùng năng động và chuỗi dịch vụ liền mạch.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title asd">
							<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
								aria-controls="collapseThree">
						  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Mục tiêu của chúng tôi
						</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="panel-body panel_text">
							Chúng tôi thật sự tin tưởng vào sức mạnh khai triển của công nghệ và mong muốn góp phần làm cho thế giới trở nên tốt đẹp hơn bằng việc kết nối cộng đồng người mua và người bán thông qua việc cung cấp một nền tảng thương mại điện tử.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingFour">
						<h4 class="panel-title asd">
							<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false"
								aria-controls="collapseFour">
						  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Chúng tôi có thể làm bạn hài lòng nhất
						</a>
						</h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						<div class="panel-body panel_text">
							Giá ưu đãi, miễn phí giao hàng, tận tình tư vấn đưa ra gợi ý phù hợp với khách hàng thông qua các kênh Facebook, Zalo.
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="col-md-6 mid_services_img">
		<div class="bar-grids">
			<h3 class="heading two three">Kỹ năng của chúng tôi</h3>
			<div class="skill_info">
				<h6>Phát triển<span> 95% </span></h6>
				<div class="progress">
					<div class="progress-bar progress-bar-striped active" style="width: 95%">
					</div>
				</div>
				<h6>Giá cả<span> 85% </span></h6>
				<div class="progress">
					<div class="progress-bar progress-bar-striped active" style="width: 85%">
					</div>
				</div>
				<h6>Sản xuất <span>90% </span></h6>
				<div class="progress">
					<div class="progress-bar progress-bar-striped active" style="width: 90%">
					</div>
				</div>
				<h6>Quảng cáo <span>86% </span></h6>
				<div class="progress prgs-last">
					<div class="progress-bar progress-bar-striped active" style="width: 86%">
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="clearfix"> </div>
</div>
@include('templates.downyshoes.anotherexam')
@endsection

