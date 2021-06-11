<?php
    function active_menu($currentRouteName,$requestName) {
        if($currentRouteName==$requestName){
            return 'active';
        } else {
            return null;
        }
    }
?>
<!-- header -->
<div class="header" id="home">
    <div class="top_menu_w3layouts">
        <div class="container">
            <div class="header_left">
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Quận Gò Vấp, Hồ Chí Minh</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>035 618 5047</li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">smartvietsolution@gmail.com</a></li>
                </ul>
            </div>
            <div class="header_right">
                <ul class="forms_right">
                    <li><a href="{{ route('temp.clinic.appointment') }}">đặt lịch hẹn</a> </li>
                </ul>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="content white">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                    <a class="navbar-brand" href="{{ route('temp.clinic.index') }}">
                        <h1><span class="fa fa-stethoscope" aria-hidden="true"></span>New Clinic </h1>
                    </a>
                </div>
                <!--/.navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('temp.clinic.index') }}" class="{{active_menu(Route::currentRouteName(),'temp.clinic.index')}}">Trang chủ</a></li>
                            <li><a href="{{ route('temp.clinic.about') }}" class="{{active_menu(Route::currentRouteName(),'temp.clinic.about')}}">Về chúng tôi</a></li>

                            <li><a href="{{ route('temp.clinic.departments') }}" class="{{active_menu(Route::currentRouteName(),'temp.clinic.departments')}}">Chuyên khoa</a></li>
                            <li><a href="{{ route('temp.clinic.gallery') }}" class="{{active_menu(Route::currentRouteName(),'temp.clinic.gallery')}}">Bộ sưu tập</a></li>
                            <li><a href="{{ route('temp.clinic.mail') }}" class="{{active_menu(Route::currentRouteName(),'temp.clinic.mail')}}">Mail</a></li>
                        </ul>
                    </nav>
                </div>
                <!--/.navbar-collapse-->
                <!--/.navbar-->
            </div>
        </nav>
    </div>
</div>
@if($check)
<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Nội soi tiến hóa <span>"Siêu sạch".</span></h3>
                    <p>Chỉ có ở phòng khám của chúng tôi</p>
                    <h6>Dụng cụ ý tế sử dụng một lần. Đồ cá nhân riêng biệt.</h6>
                </div>
            </div>
        </div>
        <div class="item item2">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Khám <span>sức khỏe</span></h3>
                    <p>Và Tầm soát ung thư định kỳ</p>
                    <h6>Bảo vệ gia đình. Vững tin cho doanh nghiệp</h6>
                </div>
            </div>
        </div>
        <div class="item item3">
            <div class="container">
                <div class="carousel-caption">
                    <h3><span>Tư vấn</span></h3>
                    <p>Ngăn ngày bệnh tiến hóa, tiến triển của ung thư</p>
                    <h6>Miễn phí 30% Nội soi tiêu hóa.</h6>
                </div>
            </div>
        </div>
        <div class="item item4">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Bắt đúng bệnh. <span>Trị đúng đích</span></h3>
                    <p>Ung thư</p>
                    <h6>Dạ dày, thực quản, đại trực tràng</h6>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="fa fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!-- The Modal -->
</div>
<!--//banner -->
@else
<!-- banner -->
<div class="banner_inner_content_agile_w3l">

</div>
	<!--//banner -->
@endif