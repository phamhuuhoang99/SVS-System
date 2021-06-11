@extends('templates.amenity.master')
@section('title','Amenity')
@section('content')

<!--Breadcrumb-->
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">
        <ul class="short_ls">
            <li>
                <a href={{route("temp.amenity.index") }}>Trang Chủ</a>
                <span>| |</span>
            </li>
            <li>Về SVS</li>
        </ul>
    </div>
</div>
<!--//Breadcrumb-->
<!-- Choose Us -->
<div class="advantages">
    <div class="container">
        <h3 class="tittle-w3layouts">Tại sao bạn nên chọn chúng tôi</h3>
    </div>
    <div class="advntge-main">
        <div class="advntge-left-sctn">
            <div class="advntge-inner-info">
                <h6>Nguyên liệu tự nhiên</h6>
                <p class="paragraph-w3-agile">Mô hình dịch vụ khép kín và trọn gói trong lĩnh vực thiết kế, thi công và nội thất nhằm tối ưu hóa lợi ích cho khách hàng trong lĩnh vực xây dựng dân dụng.</p>
            </div>
            <div class="advntge-inner-info">
                <p class="paragraph-w3-agile text-right">Khẳng định uy tín cũng như đẳng cấp hàng đầu, cửa hàng chỉ nhập khẩu và phân phối sản phẩm chính hãng. Luôn đi đầu xu hướng và liên tục cập nhật những thiết kế mới, hiện đại nhất trên thế giới.</p>
                <h6 class="text-right">Chất lượng cao cấp</h6>
            </div>
        </div>
        <div class="advntge-right-sctn">
            <div class="advntge-inner-info">
                <h6>Giá cả hợp lý</h6>
                <p class="paragraph-w3-agile">Chúng tôi tự hào mang đến cho khách hàng của mình giá tốt nhất.</p>
            </div>
            <div class="advntge-inner-info">
                <p class="paragraph-w3-agile text-right">Chúng tôi tự hào mang đến cho quý khách hàng những giải pháp tối ưu cho không gian nhà bếp và sản phẩm nội thất cùng các thương hiệu hàng đầu thế giới</p>
                <h6 class="text-right">Ưu đãi tốt</h6>
            </div>
        </div>
    </div>
</div>
<!--// Choose Us -->
<!-- What-we-do -->
<div class="what-wedo-w3ls">
    <div class="container">
        <h3 class="tittle-w3layouts">Chúng Tôi Đã Làm Gì</h3>
        <div class="wedo-main">
            <div class="wedo-left">
                <h4 class="sub-hdng">Bộ Sưu Tập</h4>
                <p class="paragraph-w3-agile">
                    <span class="fa fa-check" aria-hidden="true"></span>Ghế Dài</p>
                <p class="paragraph-w3-agile">
                    <span class="fa fa-check" aria-hidden="true"></span>Giường ngủ</p>
                <p class="paragraph-w3-agile">
                    <span class="fa fa-check" aria-hidden="true"></span>Sofa</p>
                <p class="paragraph-w3-agile">
                    <span class="fa fa-check" aria-hidden="true"></span>Ghế tựa</p>
                <h4 class="sub-hdng top-mrgn">Dịch vụ tư vấn các loại Nội thất</h4>
                <p class="paragraph-w3-agile">Thu Anh cung cấp dịch vụ tư vấn nội thất miễn phí, mang đến cho quý khách hàng những thông tin hữu ích và những giải pháp tốt nhất cho không gian nội thất của bạn.</p>
            </div>
            <div class="wedo-right inn-img-margn">
                <img src={{ asset("templates/amenity/images/bb2.jpg") }} alt=" " class="img-responsive second-img">
            </div>
        </div>
    </div>
</div>
<!--// What-we-do -->
<!-- stats -->
<div class="stats">
    <div class="container-fluid">
        <h3 class="tittle-w3layouts white-clr">Mặt hàng bán chạy</h3>
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
                    <h3>Ghế Tựa</h3>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //stats -->
<!-- Team -->
<div class="team" id="team">
    <div class="container">
        <h3 class="tittle-w3layouts">Đội Ngũ</h3>
        <div class="col-md-6 team-left">
            <div class="team1">
                <div class="col-md-4 team-img1">
                    <img src={{ asset("templates/amenity/images/team1.jpg") }} alt="">
                </div>
                <div class="col-md-4 team-info">
                    <h4>Khoa Đăng</h4>
                    <p>Quản Lý</p>
                    <div class="social-icons">
                        <a href="#">
                            <span class="fa fa-facebook" aria-hidden="true"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-linkedin" aria-hidden="true"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-google-plus" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="team2">
                <div class="col-md-4 team-img2">
                    <img src={{ asset("templates/amenity/images/team2.jpg") }} alt="">
                </div>
                <div class="col-md-4 team-info">
                    <h4>Phong Khoa</h4>
                    <p>Nhân Viên</p>
                    <div class="social-icons">
                        <a href="#">
                            <span class="fa fa-facebook" aria-hidden="true"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-linkedin" aria-hidden="true"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-google-plus" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 team-right">
            <div class="team3">
                <div class="col-md-4 team-img1">
                    <img src={{ asset("templates/amenity/images/team3.jpg") }} alt="">
                </div>
                <div class="col-md-4 team-info">
                    <h4>Tấn Hưng</h4>
                    <p>Nhân Viên</p>
                    <div class="social-icons">
                        <a href="#">
                            <span class="fa fa-facebook" aria-hidden="true"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-linkedin" aria-hidden="true"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-google-plus" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="team4">
                <div class="col-md-4 team-img2">
                    <img src={{ asset("templates/amenity/images/team4.jpg") }} alt="">
                </div>
                <div class="col-md-4 team-info">
                    <h4>Lê Quy</h4>
                    <p>Quản Lý</p>
                    <div class="social-icons">
                        <a href="#">
                            <span class="fa fa-facebook" aria-hidden="true"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-linkedin" aria-hidden="true"></span>
                        </a>
                        <a href="#">
                            <span class="fa fa-google-plus" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--// Team -->
@endsection