@extends('templates.bigstore.master')
@section('title', 'Cửa hàng thương mại điện tử trực tuyến')
@section('content')
<div class="banner-top">
    <div class="container">
        <h3>Liên hệ</h3>
        <h4><a href="{{ route('temp.bigstore.index') }}">Trang chủ</a><label>/</label>Liên hệ</h4>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="contact">
	<div class="container">
		<div class="spec ">
			<h3>Liên hệ</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>
		<div class=" contact-w3">
			<div class="col-md-5 contact-right">
				<img src="/templates/bigstore/images/cac.jpg" class="img-responsive" alt="">
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
			</div>
			<div class="col-md-7 contact-left">
				<h4>Thông tin liên hệ</h4>
				<p> Nếu bạn đang tìm kiếm một trang web để mua và bán hàng trực tuyến thì SVS là một sự lựa chọn hiệu quả dành cho bạn. SVS cho phép người mua và người bán hàng dễ dàng tương tác, trao đổi thông tin về sản phẩm và chương trình khuyến mãi của shop nên việc mua bán chở nên nhanh chóng hơn.</p>
				<ul class="contact-list">
					<li> <i class="fa fa-map-marker" aria-hidden="true"></i>Gò Vấp, Hồ Chí Minh</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a></li>
					<li> <i class="fa fa-phone" aria-hidden="true"></i>035 618 5047</li>
				</ul>
				<div id="container">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
							<li> <i class="fa fa-map-marker" aria-hidden="true"></i> </span></li>
							<li> <i class="fa fa-phone" aria-hidden="true"></i></li>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div>
								<form action="#">
									<input type="text" value="Họ tên" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
									<input type="email" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
									<textarea name="Nội dung" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nội dung';}" required="">Nội dung</textarea>
									<input type="submit" value="Gửi" >
								</form>
							</div>
							<div>
								<div class="map-grid">
								<h5>Chi nhánh</h5>
									<ul>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>220/91 Nguyễn Văn Khối, Phường 9 Quận Gò Vấp, Hồ Chí Minh</li>
										{{--  <li><i class="fa fa-arrow-right" aria-hidden="true"></i>889 diamond street, USA.</li>  --}}
										{{--  <li><i class="fa fa-arrow-right" aria-hidden="true"></i>756 global Place, New York.</li>  --}}
										{{--  <li><i class="fa fa-arrow-right" aria-hidden="true"></i>889 diamond street, USA.</li>  --}}
									</ul>
								</div>
							</div>
							<div>
								<div class="map-grid">
									<h5>Liên hê với chúng tôi</h5>
									<ul>
										<li>Số di động : 035 618 5047 </li>
										{{--  <li>Số văn phòng : +123 222 2222</li>  --}}
										{{--  <li>Số bàn : +123 456 7890</li>  --}}
										{{--  <li>Số Fax : +123 456 7890</li>  --}}
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Plug-in Initialisation-->
				<script type="text/javascript">
				$(document).ready(function() {
					//Horizontal Tab
					$('#parentHorizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});

					// Child Tab
					$('#ChildVerticalTab_1').easyResponsiveTabs({
						type: 'vertical',
						width: 'auto',
						fit: true,
						tabidentify: 'ver_1', // The tab groups identifier
						activetab_bg: '#fff', // background color for active tabs in this group
						inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
						active_border_color: '#c1c1c1', // border color for active tabs heads in this group
						active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
					});

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>

			</div>

		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!-- tabs -->
<script src={{ URL::asset("templates/bigstore/js/easyResponsiveTabs.js") }} type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true // 100% fit in a container
        });
    });
</script>
<!-- tabs -->
@endsection