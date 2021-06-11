@extends('templates.villas.master')
@section('title','Villas')
@section('content')

<!-- banner bottom -->
<div class="banner-bottom py-5">
    <div class="d-md-flex container py-xl-3 py-lg-3">
        <div class="banner-left-bottom-w3ls">
            <h6 class="text-wh let">Đặt phòng ngay bây giờ!</h6>
            <h3 class="text-wh my-3">Chào mừng bạn đến với Villas</h3>
            <p>Tận Hưởng Từng Giây Phút Cùng Gia Đình, Bạn bè Của Bạn Tại Villa.<br> Với Những Ưu đãi Tuyệt vời nhất.
            </p>
        </div>
        <div class="button offset-lg-2 offset-md-1">
            <a href={{ route("temp.villas.about") }} class="btn w3ls-button-mobamu">Xem Thêm</a>
        </div>
    </div>
</div>
<!-- //banner bottom -->

@include('templates.villas.sectionabout')

<!-- price -->
<div class="rooms-w3ls bg-li py-5" id="price">
    <div class="container-fluid py-xl-5 py-lg-3">
        <h3 class="tittle text-center text-bl font-weight-bold">Bảng Giá</h3>
        <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Ưu đãi Chớp nhoáng - Đặc biệt cuối tuần. Siêu khuyến mãi đặc biệt</p>
        <div class="row">
            <div class="col-lg-4 price-mobamus">
                <div class="price-top">
                    <a href={{ route("temp.villas.single") }}>
                        <img src={{ asset("templates/villas/images/price1.jpg") }} alt="" class="img-fluid" />
                    </a>
                </div>
                <div class="price-w3ls-bottom p-4">
                    <h4 class="my-2"><a href={{ route("temp.villas.single") }}>Phòng Thượng Hạng</a></h4>
                    <div class="lm-item-price">
                        <h6>

                            <span class="price-midd-head">4.500</span>
                            <span class="price-top-head">K</span>
                            <span class="price-right-head">/ 1 tháng</span>
                        </h6>
                    </div>
                    <ul class="style-lists">
                        <li>Chỉ có 5 phòng trống </li>
                        <li>Bao gồm bữa sáng </li>
                        <li>Giá chưa bao gồm VAT & phí dịch vụ </li>
                    </ul>
                    <a href={{ route("temp.villas.book") }} class="btn button-style-2 mt-sm-5 mt-4">Đặt Ngay</a>
                </div>
            </div>
            <div class="col-lg-4 price-mobamus my-lg-0 my-5">
                <div class="price-top">
                    <a href={{ route("temp.villas.single") }}>
                        <img src={{ asset("templates/villas/images/price2.jpg") }} alt="" class="img-fluid" />
                    </a>
                </div>
                <div class="price-w3ls-bottom p-4">
                    <h4 class="my-2"><a href={{ route("temp.villas.single") }}>Phòng Hạng Sang</a></h4>
                    <div class="lm-item-price">
                        <h6>

                            <span class="price-midd-head">3.500</span>
                            <span class="price-top-head">K</span>
                            <span class="price-right-head">/ 1 tháng</span>
                        </h6>
                    </div>
                    <ul class="style-lists">
                        <li>Phù hợp cho các cặp đôi đi du lịch </li>
                        <li>Bao gồm bữa sáng </li>
                        <li>Dịch vụ phục vụ đặc biệt </li>
                    </ul>
                    <a href={{ route("temp.villas.book") }} class="btn button-style-2 mt-sm-5 mt-4">Đặt Ngay</a>
                </div>
            </div>
            <div class="col-lg-4 price-mobamus">
                <div class="price-top">
                    <a href={{ route("temp.villas.single") }}>
                        <img src={{ asset("templates/villas/images/price3.jpg") }} alt="" class="img-fluid" />
                    </a>
                </div>
                <div class="price-w3ls-bottom p-4">
                    <h4 class="my-2"><a href={{ route("temp.villas.single") }}>Phòng Gia Đình</a></h4>
                    <div class="lm-item-price">
                        <h6>

                            <span class="price-midd-head">2.000</span>
                            <span class="price-top-head">K</span>
                            <span class="price-right-head">/ 1 tháng</span>
                        </h6>
                    </div>
                    <ul class="style-lists">
                        <li>Hai giường đôi </li>
                        <li>Dụng cụ trông trẻ</li>
                        <li>1 giường miễn phí theo yêu cầu</li>
                    </ul>
                    <a href={{ route("temp.villas.book") }} class="btn button-style-2 mt-sm-5 mt-4">Đặt Ngay</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //price -->

<!-- why -->
<div class="serives py-5" id="why">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center text-bl font-weight-bold">Tại Sao Chọn Villas </h3>
        <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Khách sạn mới, sạch sẽ, nhân viên thân thiện. Có nhà hàng phục vụ cơm trưa và tối, ăn ngon, giá hợp lý.</p>
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 ser-grid">
                <span class="fa fa-cutlery"></span>
                <h4>Nhà Hàng</h4>
                {{--  <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>  --}}
            </div>
            <div class="col-lg-3 col-md-6 ser-grid mt-md-0 mt-5">
                <span class="fa fa-money"></span>
                <h4>Giá Rẻ</h4>
                {{--  <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>  --}}
            </div>
            <div class="col-lg-3 col-md-6 ser-grid mt-lg-0 mt-5">
                <span class="fa fa-user-secret"></span>
                <h4>Khu An Ninh</h4>
                {{--  <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>  --}}
            </div>
            <div class="col-lg-3 col-md-6 ser-grid mt-lg-0 mt-5">
                <span class="fa fa-car"></span>
                <h4>Đặt Xe</h4>
                {{--  <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>  --}}
            </div>
        </div>
    </div>
</div>
<!-- why -->

<!-- stats -->
<div class="stats py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="row stats-mobamu py-5">
            <div class="col-lg-4 col-md-6">
                <div class="stats-grid">
                    <div class="row">
                        <div class="col-4 text-center">
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="col-8">
                            <h4 class="numscroller">6000</h4>
                            <p>Xếp Hạng Xuất Xắc</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="stats-grid">
                    <div class="row">
                        <div class="col-4 text-center">
                            <span class="fa fa-smile-o"></span>
                        </div>
                        <div class="col-8">
                            <h4 class="numscroller">25k</h4>
                            <p>Khách Hàng Ấn Tượng</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mx-lg-0 mx-md-auto mt-lg-0 mt-4">
                <div class="stats-grid">
                    <div class="row">
                        <div class="col-4 text-center">
                            <span class="fa fa-cutlery"></span>
                        </div>
                        <div class="col-8">
                            <h4 class="numscroller">150</h4>
                            <p>Loại Thức Ăn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //stats -->

<!-- blog -->
<div class="blog-w3ls py-5" id="blog">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center text-bl font-weight-bold">Blog</h3>
        <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3"></p>
        <div class="row package-grids">
            <div class="col-lg-4 posts-mobamus">
                <div class="posts-top">
                    <a href={{ route("temp.villas.single") }}>
                        <img src={{ asset("templates/villas/images/blog1.jpg") }} alt="" class="img-fluid" />
                    </a>
                    <h3>13
                        <span>Tháng 2</span>
                    </h3>
                </div>
                <div class="posts-w3ls-bottom py-4">
                    <h4 class="mb-2"><a href={{ route("temp.villas.single") }}>Blog 1</a></h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <span class="fa fa-thumbs-up mr-1"></span>20 Thích</a>
                        </li>
                        <li class="mx-3">
                            <a href="#">
                                <span class="fa fa-comments mr-1"></span>48 Bình luận</a>
                        </li>
                    </ul>
                    <p class="mt-3">Thuê biệt thự villa nguyên căn, trung tâm view đẹp, có sân vườn, giá rẻ cho gia đình.</p>
                </div>
            </div>
            <div class="col-lg-4 posts-mobamus my-lg-0 my-4">
                <div class="posts-top">
                    <a href={{ route("temp.villas.single") }}>
                        <img src={{ asset("templates/villas/images/blog2.jpg") }} alt="" class="img-fluid" />
                    </a>
                    <h3>16
                        <span>Tháng 3</span>
                    </h3>
                </div>
                <div class="posts-w3ls-bottom py-4">
                    <h4 class="mb-2"><a href={{ route("temp.villas.single") }}>Blog 2</a></h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <span class="fa fa-thumbs-up mr-1"></span>20 Thích</a>
                        </li>
                        <li class="mx-3">
                            <a href="#">
                                <span class="fa fa-comments mr-1"></span>48 Bình luận</a>
                        </li>
                    </ul>
                    <p class="mt-3">Thuê biệt thự villa nguyên căn, trung tâm view đẹp, có sân vườn, giá rẻ cho gia đình.</p>
                </div>
            </div>
            <div class="col-lg-4 posts-mobamus">
                <div class="posts-top">
                    <a href={{ route("temp.villas.single") }}>
                        <img src={{ asset("templates/villas/images/blog3.jpg") }} alt="" class="img-fluid" />
                    </a>
                    <h3>20
                        <span>Tháng 7</span>
                    </h3>
                </div>
                <div class="posts-w3ls-bottom py-4">
                    <h4 class="mb-2"><a href={{ route("temp.villas.single") }}>Blog 3</a></h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <span class="fa fa-thumbs-up mr-1"></span>20 Thích</a>
                        </li>
                        <li class="mx-3">
                            <a href="#">
                                <span class="fa fa-comments mr-1"></span>48 Bình luận</a>
                        </li>
                    </ul>
                    <p class="mt-3">Công ty chúng tôi tại địa phương chất lượng, uy tín, chuyên tổ chức các tour du lịch. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //blog -->

<!-- services -->
<div class="serives-mobamu py-5" id="services">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center text-wh font-weight-bold">Dịch Vụ</h3>
        <p class="sub-tittle text-center text-li mt-2 mb-sm-5 mb-4 pb-xl-3">Công ty chúng tôi tại địa phương chất lượng, uy tín, chuyên tổ chức các tour du lịch.</p>
        <div class="row welcome-bottom text-center">
            <div class="col-lg-3 col-sm-6 px-2">
                <div class="welcome-grid bg-wh py-5 px-4">
                    <img src={{ asset("templates/villas/images/wh1.jpg") }} alt="" class="img-fluid">
                    <h4 class="mt-4 mb-3 text-bl">Dịch Vụ 01</h4>
                    {{--  <p>Quis nostrum ullam corporis suscipit.</p>  --}}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5 px-2">
                <div class="welcome-grid bg-wh py-5 px-4">
                    <img src={{ asset("templates/villas/images/wh2.jpg") }} alt="" class="img-fluid">
                    <h4 class="mt-4 mb-3 text-bl">Dịch Vụ 02</h4>
                    {{--  <p>Quis nostrum ullam corporis suscipit.</p>  --}}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 px-2">
                <div class="welcome-grid bg-wh py-5 px-4">
                    <img src={{ asset("templates/villas/images/wh3.jpg") }} alt="" class="img-fluid">
                    <h4 class="mt-4 mb-3 text-bl">Dịch Vụ 03</h4>
                    {{--  <p>Quis nostrum ullam corporis suscipit.</p>  --}}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 px-2">
                <div class="welcome-grid bg-wh py-5 px-4">
                    <img src={{ asset("templates/villas/images/wh4.jpg") }} alt="" class="img-fluid">
                    <h4 class="mt-4 mb-3 text-bl">Dịch Vụ 04</h4>
                    {{--  <p>Quis nostrum ullam corporis suscipit.</p>  --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //services -->

@include('templates.villas.review')

<!-- middle -->
<div class="middle py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="welcome-left text-center py-md-5 py-3">
            <h3>Tận Hưởng Mọi Khoảnh Khắc Tuyệt Vời Bên Gia Đình Trong Villas</h3>
            <a href={{ route("temp.villas.book") }} class="btn button-style button-style mt-sm-5 mt-4">Đặt Ngay</a>
        </div>
    </div>
</div>
<!-- //middle -->

<!-- newsletter -->
<div class="newsletter_w3w3pvt py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center text-bl font-weight-bold">Đăng Ký Nhận Tin</h3>
        <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Đăng ký để nhận những thông tin khuyến mãi mới nhất</p>
        <div class="newsletter">
            <form>
                <div class="form-group mb-0 w-100">
                    <input class="email" type="email" name="email" placeholder="Email..." required="">
                </div>
                <button type="submit" class="btn">Đăng Ký</button>
            </form>
        </div>
    </div>
</div>
<!-- //newsletter -->
@endsection