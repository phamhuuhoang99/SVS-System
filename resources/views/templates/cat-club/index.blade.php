@extends('templates.cat-club.master')
@section('title', 'Cat Club')
@section('content')

    <!-- banner-bottom -->
    <div class="welcome">
        <div class="container">
            <div class="w3ls-heading">
                <h2>Chào Mừng Bạn Đến Với Cat club</h2>
            </div>
            <div class="welcome-grids">
                <div class="col-md-6 agile-welcome-grid">
                    <div class="grid">
                        <div class="col-md-6 agileits-left">
                            <figure class="effect-chico">
                                <img src="{{ asset('templates/cat-club/images/2.jpg') }}" alt="" />
                                <figcaption>
                                    <h4>Giá rẻ nhất</h4>
                                    <p>Giá phù hợp với túi tiền người dùng.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6 agileits-left">
                            <figure class="effect-chico">
                                <img src="{{ asset('templates/cat-club/images/3.jpg') }}" alt=" " />
                                <figcaption>
                                    <h4>Pet khỏe mạnh</h4>
                                    <p>Bảo đảm sức khỏe của thú cưng.</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 agileinfo-welcome-right">
                    <h4>Chúng tôi cam kết sức khỏe và cuộc sống của Thú cưng.</h4>
                    <p>Đội ngũ bác sĩ thú y được đào tạo chuyên sâu tại các trường đại học, bệnh viện uy tín trong và ngoài
                        nước.
                        <span>Tất cả các trang thiết bị tại các phòng chuyên môn của chúng tôi đều đạt tiêu chuẩn của Bộ
                            Nông Nghiệp.
                        </span>
                    </p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- banner-bottom -->
    <!-- services -->
    <div class="services">
        <div class="container">
            <div class="w3ls-heading">
                <h3>Dịch Vụ</h3>
            </div>
            <div class="wthree-services-grids">
                <div class="col-md-6 w3ls-about-left">
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Cắt tỉa lông.</h5>
                            <p>Cung cấp những dịch vụ chất lượng tốt nhất dành cho mèo.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Tắm Spa</h5>
                            <p>Cung cấp những dịch vụ chất lượng tốt nhất dành cho mèo.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Trông giữ mèo.</h5>
                            <p>Cung cấp những dịch vụ chất lượng tốt nhất dành cho mèo.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 w3ls-about-left">
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Khách sạn mèo.</h5>
                            <p>Cung cấp những dịch vụ chất lượng tốt nhất dành cho mèo.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Khám sức khỏe định kỳ</h5>
                            <p>Cung cấp những dịch vụ chất lượng tốt nhất dành cho mèo.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fa fa-bell" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Tư vấn, hổ trợ miễn phí.</h5>
                            <p>Cung cấp những dịch vụ chất lượng tốt nhất dành cho mèo.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //services -->
    <!-- news -->
    <div class="news">
        <div class="container">
            <div class="w3ls-heading">
                <h3>Tin tức & Sự kiện</h3>
            </div>
            <div class="w3-agileits-news-grids">
                <div class="col-md-6 news-left">
                    <div class="w3-agile-news-date">
                        <div class="agile-news-icon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <p>24/11/2020</p>
                        </div>
                        <div class="agileits-line"> </div>
                        <div class="agile-news-icon">
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i></a>
                            <p>2 Bình luận</p>
                        </div>
                        <div class="agileits-line"> </div>
                        <div class="agile-news-icon">
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                            <p>3482</p>
                        </div>
                    </div>
                    <div class="w3-agile-news-img">
                        <a href="{{ route('temp.cat-club.single') }}"><img
                                src="{{ asset('templates/cat-club/images/4.jpg') }}" alt="" /></a>
                        <h4><a href="{{ route('temp.cat-club.single') }}">10 Lý Do Khiến Bạn Muốn Đón Ngay Một Bé Cún Về
                                Nhà</a></h4>
                        <p>Những chú chó không chỉ là vật nuôi mà còn là những người bạn tốt nhất của con người. Khuôn mặt
                            đáng yêu và dễ thương của chúng luôn mang đến niềm vui, xua tan đi muộn phiền, âu lo.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 news-right">
                    <div class="news-right-grid">
                        <a href="{{ route('temp.cat-club.single') }}">Bật Mí 15 Lý Do Khiến Bạn Nhất Định Phải Sở Hữu Một Bé
                            Mèo</a>
                        <h5>06/11/2020</h5>
                        <p>Những chú mèo đáng yêu, ngộ nghĩnh luôn là những “kẻ thống trị internet” bằng sự hài hước, vui
                            nhộn. Chúng không chỉ mang đến niềm vui mà còn là người bạn đồng hành tuyệt vời.</p>
                    </div>
                    <div class="news-right-grid">
                        <a href="{{ route('temp.cat-club.single') }}">Top 11 Giống Chó, Mèo Nhất Định Phải Sở Hữu Trong
                            Đời</a>
                        <h5>17/11/2020</h5>
                        <p>Bạn đang muốn đón một bé thú cưng về yêu thương nhưng chưa biết nên lựa chọn giống chó, mèo nào
                            phù hợp? Hãy cùng chúng tôi tìm hiểu và khám phá 11 giống chó, mèo đáng sở hữu nhất hiện nay
                            nhé.
                        </p>
                    </div>
                    <div class="news-right-grid">
                        <a href="{{ route('temp.cat-club.single') }}">7 Lợi Ích Tuyệt Vời Với Trẻ Nhỏ Khi Sở Hữu Thú
                            Cưng</a>
                        <h5>29/10/2020</h5>
                        <p>Các nghiên cứu về tâm lý trẻ nhỏ đã chứng minh có nhiều lý do trẻ em nên sở hữu Thú cưng. Thú
                            cưng không chỉ giúp trẻ quan tâm đến mọi người xung quanh, dạy trẻ nhiều kỹ năng sống hơn mà còn
                            là 1 người bạn tuyệt vời đồng hành cùng các bé.</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //news -->

@endsection
