@extends('templates.health-plus.master')
@section('title', 'Health Plus')
@section('content')
<!-- banner1 -->
	<div class="banner1 jarallax">
		<div class="container">
		</div>
	</div>

	<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="{{ route('temp.health-plus.index') }}">Trang Chủ</a><i>|</i></li>
				<li>Phòng Ban</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->


<!-- Portfolio -->
	<div class="portfolio" id="specials">
			<div class="container">
				<h2 class="w3_heade_tittle_agile">Phòng Ban Của Chúng Tôi</h2>
		    <p class="sub_t_agileits">Tận tâm, nhiệt tình</p>

			<div class="tabs tabs-style-bar">
				<nav>
					<ul>
						<li><a href="#section-bar-1" class="icon icon-box"><span>Phòng Ban 1</span></a></li>
						<li><a href="#section-bar-2" class="icon icon-display"><span>Phòng Ban 2</span></a></li>
						<li><a href="#section-bar-3" class="icon icon-upload"><span>Phòng Ban 3</span></a></li>
					</ul>
				</nav>

				<div class="content-wrap">

					<!-- Tab-1 -->
					<section id="section-bar-1" class="agileits w3layouts">
						<div class="gallery-grids">
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g1.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g1.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g2.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g2.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g3.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g3.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g4.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g4.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g5.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g5.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g6.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g6.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>

							<div class="clearfix"></div>
						</div>
					</section>
					<!-- //Tab-1 -->

					<!-- Tab-2 -->
					<section id="section-bar-2" class="agileits w3layouts">
						<div class="gallery-grids">
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g7.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g7.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g3.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g3.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g2.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g2.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g3.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g3.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g5.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g5.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g6.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g6.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>

							<div class="clearfix"></div>
						</div>
					</section>
					<!-- //Tab-2 -->

					<!-- Tab-3 -->
					<section id="section-bar-3" class="agileits w3layouts">
						<div class="gallery-grids">
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g7.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g7.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g3.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g3.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 gallery-top">
								<a href="{{asset('templates/health-plus/images/g9.jpg') }}" class="swipebox">
									<figure class="effect-apollo">
										<img src="{{asset('templates/health-plus/images/g9.jpg') }}" alt="Health Plus" class="img-responsive">
										<figcaption></figcaption>
									</figure>
								</a>
							</div>




							<div class="clearfix"></div>
						</div>
					</section>
					<!-- //Tab-3 -->

				</div><!-- //Content -->
			</div><!-- //Tabs -->

		</div>
	</div>
	<!-- //Portfolio -->


@endsection