 <!-- header -->
<header id="home">
    <!-- top-bar -->
    <div class="top-bar py-2 bg-li">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 top-social-w3pvt-am mt-lg-1 mb-md-0 mb-1 text-lg-left text-center">
                    <div class="row">
                        <div class="col-xl-4 col-6 header-top_w3layouts border-right">
                            <p class="text-bl">
                                <span class="fa fa-map-marker mr-2"></span>HCMC, Vietnam
                            </p>
                        </div>
                        <div class="col-xl-4 col-6 header-top_w3layouts text-md-right">
                            <p class="text-bl">
                                <span class="fa fa-phone mr-2"></span>032 625 4592
                            </p>
                        </div>
                        <div class="col-xl-4"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 top-social-w3pvt-am mt-lg-0 mt-2">
                    <div class="row">
                        <div class="col-6 top-w3layouts">
                            <!-- search -->
                            {{--  <div class="search-w3layouts">
                                <form action="#" method="post" class="search-bottom-wthree d-flex my-md-0 my-2">
                                    <input class="search col" type="search" placeholder="Tìm kiếm..."
                                        required="">
                                    <button class="form-control btn col-2" type="submit"><span
                                            class="fa fa-search"></span></button>
                                </form>
                            </div>  --}}
                            <!-- //search -->
                        </div>
                        <div class="col-6 border-left mt-lg-1 socila-brek text-md-right text-center">
                            <!-- social icons -->
                            <ul class="top-right-info">
                                <li>
                                    <p class="par-so mr-3">Theo dõi:</p>
                                </li>
                                <li class="mr-1 soci-effe facebook">
                                    <a href="#" target="_blank">
                                        <span class="fa fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="mr-1 soci-effe twitter">
                                    <a href="#">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li class="mr-1 soci-effe google-plus">
                                    <a href="#">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </li>
                                <li class="soci-effe dribbble">
                                    <a href="#">
                                        <span class="fa fa-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- //social icons -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- //top-bar -->

<!-- header 2 -->
<!-- navigation -->
<div class="main-top">
	<div class="container d-lg-flex justify-content-between align-items-center">
		<!-- logo -->
		<h1 class="logo-style-res float-left">
			<a class="navbar-brand" href="#home">
                <img src={{ URL::asset("templates/baking/images/logo.png") }}
                    alt="" class="img-fluid logo-img mt-1">Baking
			</a>
		</h1>
		<!-- //logo -->
		<!-- nav -->
		<div class="nav_w3ls mx-lg-auto">
			<nav>
				<label for="drop" class="toggle">Menu</label>
				<input type="checkbox" id="drop" />
				<ul class="menu mx-lg-auto">
					<li><a href="#home" class="active">Trang chủ</a></li>
					<li><a href="#about">Về SVS</a></li>
					<li>
						<!-- First Tier Drop Down -->
						<label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
								aria-hidden="true"></span>
						</label>
						<a href="#">Phụ lục <span class="fa fa-angle-down" aria-hidden="true"></span></a>
						<input type="checkbox" id="drop-2" />
						<ul>
							<li><a href="#chefs" class="drop-text">Các đầu bếp</a></li>
							<li><a href="#blog" class="drop-text">Các bài blog</a></li>
							<li><a href="#services" class="drop-text">Dịch vụ</a></li>
							<li><a href="#what" class="drop-text">Thành tựu</a></li>
							<li><a href="#testi" class="drop-text">Nhận xét</a></li>
							<li><a href="#subscribe" class="drop-text">Đăng ký</a></li>
						</ul>
					</li>
					<li><a href="#gallery">Thư viện</a></li>
					<li><a href="#contact">Liên hệ</a></li>
				</ul>
			</nav>
		</div>
		<!-- //nav -->
		<!-- dwn -->
		<div class="text-center">
			<a href="#subscribe" class="login-button-2 text-uppercase text-wh mt-lg-0 mt-2">Mua sắm Online </a>
		</div>
		<!-- //dwn -->
	</div>
</div>
<!-- //navigation -->
<!-- //header 2 -->