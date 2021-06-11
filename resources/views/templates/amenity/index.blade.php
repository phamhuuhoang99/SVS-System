@extends('templates.amenity.master')
@section('title','Amenity')
@section('content')

<div class="callbacks_container">
    <ul class="rslides" id="slider3">
        <li class="banner1">
            <div class="container">
                <div class="slider-info-wthree">
                    <h3>Đồ Nội Thất Đẹp Tuyệt vời!</h3>
                    <p>Mọi người ai cũng mong muốn có đồ nội thất thủ công tuyệt vời tại nhà hoặc văn phòng!</p>
                    <a href={{route("temp.amenity.about") }} class="bnr-button">Xem Chi Tiết</a>
                </div>
            </div>
        </li>
        <li class="banner2">
            <div class="container">
                <div class="slider-info-wthree">
                    <h3>Đồ nội thất dành riêng cho bạn…</h3>
                    <p>Mọi người đều mong muốn có đồ nội thất thủ công tuyệt vời tại nhà hoặc văn phòng!</p>
                    <a href={{route("temp.amenity.about") }} class="bnr-button">Xem Chi Tiết</a>
                </div>
            </div>
        </li>
        <li class="banner3">
            <div class="container">
                <div class="slider-info-wthree">
                    <h3>Sắp xếp nội thất tại nhà của bạn</h3>
                    <p>Mọi người đều mong muốn có đồ nội thất thủ công tuyệt vời tại nhà hoặc văn phòng!</p>
                    <a href={{route("temp.amenity.about") }} class="bnr-button">Xem Chi Tiết</a>
                </div>
            </div>
        </li>

    </ul>


</div>
<div class="clearfix"></div>

<!-- banner-w3-agileits-btm -->
<div class="banner-w3-agileits-btm">
    <div class="container">
        <h3 class="tittle-w3layouts">Về Chúng Tôi</h3>
        <div class="banner-w3-agileits-btm-main">
            <div class="banner-w3-agileits-btm-right">
                <h4 class="sub-hdng">Đồ nội thất thủ công đẹp tuyệt vời!</h4>
                <p class="paragraph-w3-agile">Chúng tôi có nền tảng thương mại SVS được xây dựng nhằm cung cấp cho người dùng những trải nghiệm dễ dàng, an toàn và nhanh chóng.</p>
                <h6>Chất liệu tự nhiên
                    <span class="fa fa-leaf" aria-hidden="true"></span>
                </h6>
                <p class="paragraph-w3-agile">Mô hình dịch vụ khép kín và trọn gói trong lĩnh vực thiết kế, thi công và nội thất nhằm tối ưu hóa lợi ích cho khách hàng trong lĩnh vực xây dựng dân dụng.</p>
                <h6>Chất lượng cao cấp
                    <span class="fa fa-thumbs-o-up" aria-hidden="true"></span>
                </h6>
                <p class="paragraph-w3-agile">Top 10 công ty tư vấn thiết kế xây dựng biệt thự, nhà uy tín ở Hồ Chí Minh.</p>
                <h6>Giá cả hợp lý
                    <span class="fa fa-usd" aria-hidden="true"></span>
                </h6>
                <p class="paragraph-w3-agile">Chúng tôi tự hào mang đến cho khách hàng của mình giá tốt nhất.</p>
            </div>
            <div class="banner-w3-agileits-btm-left">
                <div class="banner-w3-agileits-btm-top">
                    <div class="banner-w3-agileits-btm-inner a1">
                        <h6>Bộ Sưu Tập</h6>
                        <p class="paragraph-w3-agile">Bàn ăn</p>
                        <p class="paragraph-w3-agile">Ghế & Ghế bành</p>
                        <p class="paragraph-w3-agile">Ghế Sofa & Ghế dài</p>
                        <p class="paragraph-w3-agile">Nội thất bên ngoài</p>
                        <p class="paragraph-w3-agile">Nội thất phòng ngủ</p>
                        <p class="paragraph-w3-agile">Nội thất văn phòng</p>
                        <a href={{route("temp.amenity.services") }} class="text-btn">Tìm hiểu thêm</a>
                    </div>
                    <div class="banner-w3-agileits-btm-inner a2">

                    </div>
                </div>
                <div class="banner-w3-agileits-btm-bottom">
                    <div class="banner-w3-agileits-btm-inner a3">

                    </div>
                    <div class="banner-w3-agileits-btm-inner a4">
                        <h6>Cá Loại Nội Thất</h6>
                        <p class="paragraph-w3-agile">Bàn làm việc</p>
                        <p class="paragraph-w3-agile">Bàn đứng</p>
                        <p class="paragraph-w3-agile">Ghế tựa</p>
                        <p class="paragraph-w3-agile">Ghế salon</p>
                        <p class="paragraph-w3-agile">Quầy lễ tân</p>
                        <p class="paragraph-w3-agile">Bàn ăn</p>
                        <a href={{route("temp.amenity.services") }} class="text-btn">Tìm hiểu thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //banner-w3-agileits-bottom -->
<!-- stats -->
<div class="stats">
    <div class="container-fluid">
        <h3 class="tittle-w3layouts white-clr">Mặt Hàng Bán Chạy</h3>
        <div class="stats-inner-agileits-w3layouts">
            <div class="col-md-3 col-sm-6 stat-grids">
                <div class="stats-text">
                    <p class="counter">1,546</p>
                    <h3>Bàn</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 stat-grids">
                <div class="stats-text">
                    <p class="counter">2,879</p>
                    <h3>Ghế & Ghế Bành</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 stat-grids">
                <div class="stats-text">
                    <p class="counter">1,546</p>
                    <h3>Sofa & Ghế Salon</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 stat-grids">
                <div class="stats-text">
                    <p class="counter">953</p>
                    <h3>Ghế tựa</h3>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //stats -->
<!-- What-we-do -->
<div class="what-wedo-w3ls">
    <div class="container">
        <h3 class="tittle-w3layouts">Đánh giá khách hàng</h3>
        <div class="wedo-main">
            <div class="wedo-left">
                <!-- Clients -->
                <h4 class="sub-hdng">Khách hàng nói về chúng tôi</h4>
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="banner-w3-agileits-bottom-2">
                                <div class="footer-w3-gridsd-main">
                                    <img src={{ asset("templates/amenity/images/t11.jpg" ) }} alt=" " class="img-responsive">
                                    <h4>Hoàng Nhân</h4>
                                    <p class="paragraph-w3-agile"> Quy trình chăm sóc khách hàng rất tốt, luôn quan tâm tới nhu cầu và ý kiến khách hàng.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="banner-w3-agileits-bottom-2">
                                <div class="footer-w3-gridsd-main">
                                    <img src={{ asset("templates/amenity/images/t22.jpg" ) }} alt=" " class="img-responsive">
                                    <h4>Lê Quy</h4>
                                    <p class="paragraph-w3-agile"> Tôi rất hài lòng về cách tư vấn thiết kế nhà mà Công ty đã triển khai, không chỉ tư vấn tận tình mà còn thiết kế mẫu nhà rất đẹp.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="banner-w3-agileits-bottom-2">
                                <div class="footer-w3-gridsd-main">
                                    <img src={{ asset("templates/amenity/images/t33.jpg" ) }} alt=" " class="img-responsive">
                                    <h4>Phong Khoa</h4>
                                    <p class="paragraph-w3-agile"> Chữ tín là hàng, chất lượng là trên hết, mang lại sự tin tưởng, hài lòng và niềm tin cho khách hàng.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clear"> </div>
                <!--// Clients -->
            </div>
            <div class="wedo-right">
                <img src={{ asset("templates/amenity/images/c1.jpg" ) }} alt=" " class="img-responsive first-img">
                <img src={{ asset("templates/amenity/images/bb2.jpg" ) }} alt=" " class="img-responsive second-img">
            </div>
        </div>
    </div>
</div>
<!--// What-we-do -->

@endsection
