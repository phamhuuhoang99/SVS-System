@extends('templates.hairsalon.master')
@section('title', 'Hair Salon')
@section('content')

<div class="w3_breadcrumb">
    <div class="breadcrumb-inner">
        <ul>
            <li><a href={{ route("temp.hairsalon.index") }}>Trang Chủ</a><i>//</i></li>

            <li>Sản Phẩm</li>
        </ul>
    </div>
</div>
<!--/content-inner-section-->
<div class="w3_content_agilleinfo_inner">
    <div class="container">
        <div class="title-agileits">
            <h2 class="w3l-agile">Sản Phẩm</h2>
        </div>
        <div class="latest-news-agile-info">
            <div class="col-md-8 latest-news-agile-left-content">
                <div class="single video_agile_player">

                    <div class="video-grid-single-page-agileits">
                        <div data-video="f2Z65fobH2I" id="video"> <img src={{ asset("templates/hairsalon/images/3.jpg") }} alt="" class="img-responsive" /> </div>
                    </div>
                    <h4>BÍ QUYẾT ĐỂ GIỮ TÓC TẨY LÂU PHAI: 5 ĐIỀU TỐI KỴ CẦN TRÁNH</h4>
                    <p>Tóc sau khi tẩy nhuộm thường gặp nhiều vấn đề về khô xơ do mất đi độ ẩm tự nhiên, tuy nhiên, nếu không sử dụng thuốc nhuộm tóc.</p>
                </div>

                <div class="admin-text">
                    <h5>VIẾT BỞI ADMIN</h5>
                    <div class="admin-text-left">
                        <a href="#"><img src={{ asset("templates/hairsalon/images/admin.jpg") }} alt=""></a>
                    </div>
                    <div class="admin-text-right">
                        <p>Quán mang đến phong cách Hàn Quốc trẻ trung và đơn giản cho các bạn trẻ tại Sài Gòn.</p>
                        <span>Đăng bởi:<a href="#"> Admin </a></span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="response">
                    <h4>phản hồi</h4>
                    <div class="media response-info">
                        <div class="media-left response-text-left">
                            <a href="#">
                                <img class="media-object" src={{ asset("templates/hairsalon/images/admin.jpg") }} alt="">
                            </a>
                            <h5><a href="#">Admin</a></h5>
                        </div>
                        <div class="media-body response-text-right">
                            <p>Quán mang đến phong cách Hàn Quốc trẻ trung và đơn giản cho các bạn trẻ tại Sài Gòn.</p>
                            <ul>
                                <li>25/11/2020</li>
                                <li><a href={{ route("temp.hairsalon.single") }}><i class="fa fa-Trả lời" aria-hidden="true"></i> Trả lời</a></li>
                            </ul>
                            <div class="media response-info second">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src={{ asset("templates/hairsalon/images/admin.jpg") }} alt="">
                                    </a>
                                    <h5><a href="#">Admin</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Quán mang đến phong cách Hàn Quốc trẻ trung và đơn giản cho các bạn trẻ tại Sài Gòn.</p>
                                    <ul>
                                        <li>30/11/2020</li>
                                        <li><a href={{ route("temp.hairsalon.single") }}><i class="fa fa-Trả lời" aria-hidden="true"></i> Trả lời</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="media response-info">
                        <div class="media-left response-text-left">
                            <a href="#">
                                <img class="media-object" src={{ asset("templates/hairsalon/images/admin.jpg") }} alt="">
                            </a>
                            <h5><a href="#">Admin</a></h5>
                        </div>
                        <div class="media-body response-text-right">
                            <p>Quán mang đến phong cách Hàn Quốc trẻ trung và đơn giản cho các bạn trẻ tại Sài Gòn.</p>
                            <ul>
                                <li>30/12/2020</li>
                                <li><a href={{ route("temp.hairsalon.single") }}><i class="fa fa-Trả lời" aria-hidden="true"></i> Trả lời</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="all-comments-info">
                    <h5>Bình Luận</h5>
                    <div class="agile-info-wthree-box">
                        <form>
                            <div class="col-md-6 form-info">
                                <input type="text" name="name" placeholder="Họ tên" required="">
                                <input type="email" name="email" placeholder="Email" required="">
                                <input type="text" name="phone" placeholder="Số điện thoại" required="">
                            </div>
                            <div class="col-md-6 form-info">

                                <textarea placeholder="Lời nhắn" required=""></textarea>
                                <input type="submit" value="GỬI">
                            </div>
                            <div class="clearfix"> </div>


                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 latest-news-agile-right-content">
                <h4 class="side-t-w3l-agile">Tìm Kiếm</span>
                </h4>
                <div class="side-bar-form">
                    <form>
                        <input type="search" name="email" placeholder="Tìm Kiếm...." required="required">
                        <input type="submit" value=" ">
                    </form>
                </div>
                <div class="w3l-blog-list">
                    <h4 class="side-t-w3l-agile">Theo tháng</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-long-arrow-right"> </i>Tháng 1(15)</a></li>
                        <li><a href="#"><i class="fa fa-long-arrow-right"> </i>Tháng 2(20)</a></li>
                        <li><a href="#"><i class="fa fa-long-arrow-right"> </i>Tháng 8(8)</a></li>
                        <li><a href="#"><i class="fa fa-long-arrow-right"> </i>Tháng 7(25)</a></li>
                        <li><a href="#"><i class="fa fa-long-arrow-right"> </i>Tháng 11(9)</a></li>
                        <li><a href="#"><i class="fa fa-long-arrow-right"> </i>Tháng 10(15)</a></li>
                        <li><a href="#"><i class="fa fa-long-arrow-right"> </i>Tháng 12(25)</a></li>
                    </ul>
                </div>
                <div class="agile-info-recent">
                    <h4 class="side-t-w3l-agile">Tin Mới Nhất</h4>
                    <div class="w3ls-recent-grids">
                        <div class="w3l-recent-grid">
                            <div class="wom">
                                <a href={{ route("temp.hairsalon.single") }}><img src={{ asset("templates/hairsalon/images/g1.jpg") }} alt=" " class="img-responsive"></a>
                            </div>
                            <div class="wom-right">
                                <h5><a href={{ route("temp.hairsalon.single") }}>TOPUP VÔ ĐỊCH ĐÃ TRỞ LẠI - LỢI HẠI GẤP BỘI</a></h5>
                                <p>TopUP – Nạp 1 lần duy nhất và không cần lo chi phí về sau đã trở lại với phiên bản nâng cấp hơn !!!.</p>
                                <ul class="w3l-sider-list">
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>12/11/2020</li>
                                    <li><i class="fa fa-eye" aria-hidden="true"></i> 2602</li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3l-recent-grid">
                            <div class="wom">
                                <a href={{ route("temp.hairsalon.single") }}><img src={{ asset("templates/hairsalon/images/g2.jpg") }} alt=" " class="img-responsive"></a>
                            </div>
                            <div class="wom-right">
                                <h5><a href={{ route("temp.hairsalon.single") }}>TOPUP VÔ ĐỊCH ĐÃ TRỞ LẠI - LỢI HẠI GẤP BỘI</a></h5>
                                <p>TopUP – Nạp 1 lần duy nhất và không cần lo chi phí về sau đã trở lại với phiên bản nâng cấp hơn !!!.</p>
                                <ul class="w3l-sider-list">
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>12/09/2020</li>
                                    <li><i class="fa fa-eye" aria-hidden="true"></i> 2742</li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3l-recent-grid">
                            <div class="wom">
                                <a href={{ route("temp.hairsalon.single") }}><img src={{ asset("templates/hairsalon/images/g3.jpg") }} alt=" " class="img-responsive"></a>
                            </div>
                            <div class="wom-right">
                                <h5><a href={{ route("temp.hairsalon.single") }}>TOPUP VÔ ĐỊCH ĐÃ TRỞ LẠI - LỢI HẠI GẤP BỘI</a></h5>
                                <p>TopUP – Nạp 1 lần duy nhất và không cần lo chi phí về sau đã trở lại với phiên bản nâng cấp hơn !!!.</p>
                                <ul class="w3l-sider-list">
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>30/09/2020</li>
                                    <li><i class="fa fa-eye" aria-hidden="true"></i> 2802</li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<!--//content-inner-section-->
@endsection