@extends('templates.downyshoes.master')
@section('title','Downy Shoes')
@section('content')
<div class="banner_top innerpage" id="home">
	<!-- /banner_inner -->
	<div class="services-breadcrumb_w3ls_agileinfo">
		<div class="inner_breadcrumb_agileits_w3">
			<ul class="short">
				<li><a href={{ route("temp.downyshoes.index") }}>Trang Chủ</a><i>|</i></li>
				<li>404</li>
			</ul>
		</div>
	</div>
	<!-- //banner_inner -->
</div>
<div class="ads-grid_shop">
	<div class="shop_inner_inf">
		<div class="error_page">
			<h4>404</h4>
			<p>link dead</p>
			<form>
				<input class="serch" type="search" name="serch" placeholder="Tìm kiếm" required="">
				<button class="btn1"><i class="fa fa-search" aria-hidden="true"></i></button>
				<div class="clearfix"> </div>
			</form>
			<ul class="social-nav model-3d-0 footer-social social two">
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
			</ul>
			<a class="b-home" href={{ route("temp.downyshoes.index") }}>Quay về trang chủ</a>
		</div>
	</div>
</div>
@endsection
