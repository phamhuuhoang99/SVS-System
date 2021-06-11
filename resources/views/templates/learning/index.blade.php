@extends('templates.learning.master')
@section('title', 'Learning')
@section('content')
<!--educate logos start here-->
<div class="educate">
    <div class="container">
        <div class="education-main">
            <ul class="ch-grid">
                <div class="col-md-3 w3agile">
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-1">
                                    <span class="glyphicon glyphicon-grain" aria-hidden="true"> </span>
                                    <h5>Đào tạo</h5>
                                </div>
                                <div class="ch-info-back">
                                    <h3>Learing</h3>
                                    <p>Học mọi lúc, mọi nơi</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-md-3 w3agile">
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-2">
                                    <span class="glyphicon glyphicon-education" aria-hidden="true"> </span>
                                    <h5>Giáo dục</h5>
                                </div>
                                <div class="ch-info-back">
                                    <h3>Learing</h3>
                                    <p>Tính ứng dụng cao</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-md-3 w3agile">
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-3">
                                    <span class="glyphicon glyphicon-hourglass" aria-hidden="true"> </span>
                                    <h5>Lớp học</h5>
                                </div>
                                <div class="ch-info-back">
                                    <h3>Learing</h3>
                                    <p>Chi phí hợp lý</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-md-3 w3agile">
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-4">
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"> </span>
                                    <h5>Chứng chỉ</h5>
                                </div>
                                <div class="ch-info-back">
                                    <h3>Learing</h3>
                                    <p>Chứng chỉ tốt nhất</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="clearfix"> </div>
            </ul>
        </div>
    </div>
</div>
<!--educate logos end here-->
<!--we do start here-->
<div class="we-do">
    <div class="container">
        <div class="we-do-main">
            <h2>Chúng tôi đã làm </h2>
            <h4>Chào Mừng Bạn Đến Cơ Sở Của Chúng Tôi</h4>
            <p> Đào tạo Đại học phù hợp với mục tiêu học: Học để lấy Bằng, Học để đi làm, Học để biết, Học kỹ năng, Học nâng cao trình độ.</p>
            <a href="{{route('temp.learning.single') }}">Xem Thêm</a>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--we do end here-->

<!--watch start here-->
<div class="watch-video">
    <div class="container">
        <div class="watch-video-main">
            <div class="video-bottom">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog5"> <span
                        class="glyphicon glyphicon-triangle-right" aria-hidden="true"> </span> </a>
                <!--video-->
                <div id="small-dialog5" class="mfp-hide">
                    <iframe src="https://player.vimeo.com/video/2990650" width="640" height="361" frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen> </iframe>
                </div>

            </div>
            <h3>Xem Giới Thiệu</h3>
        </div>
    </div>
</div>
<!--watch end here-->
<!--event start here-->
<div class="events">
    <div class="container">
        <div class="events-main">
            <div class="events-top">
                <h3>Sự kiện</h3>
            </div>
            <div class="events-grid">
                <div class="col-md-3 event-month wthree">
                    <h3>20</h3>
                    <h4>Tháng 11</h4>
                </div>
                <div class="col-md-5 event-text">
                    <h4>Lịch thi mới</h4>
                    <p>Cập nhật lich thì cho các lớp CNTT...</p>
                    <a href="{{route('temp.learning.single') }}">Xem Thêm</a>
                    <p> </p>
                </div>
                <div class="col-md-4 event-img">
                    <div class="item item-type-move">
                        <a class="item-hover" href="{{route('temp.learning.single') }}">
                            <div class="item-info">
                                <div class="headline">
                                    Learning
                                    <div class="line"> </div>
                                </div>
                                <div class="date">Lịch thi mới</div>
                            </div>
                            <div class="mask"> </div>
                        </a>
                        <div class="item-img">
                            <img src="{{ asset('templates/learning/images/e1.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </div>

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="events-grid">
                <div class="col-md-3 event-month wthree">
                    <h3>24</h3>
                    <h4>Tháng 11</h4>
                </div>
                <div class="col-md-5 event-text">
                    <h4>Khóa học hè</h4>
                    <p>Trường mở thêm khóa học hè cho sinh viên có nhu cầu cải thiện điểm.</p>
                    <a href="{{route('temp.learning.single') }}">Xem Thêm</a>
                    <p> </p>
                </div>
                <div class="col-md-4 event-img">
                    <div class="item item-type-move">
                        <a class="item-hover" href="{{route('temp.learning.single') }}">
                            <div class="item-info">
                                <div class="headline">
                                    Learning
                                    <div class="line"> </div>
                                </div>
                                <div class="date">Khóa học hè</div>
                            </div>
                            <div class="mask"> </div>
                        </a>
                        <div class="item-img">
                            <img src="{{ asset('templates/learning/images/e2.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="events-grid">
                <div class="col-md-3 event-month wthree">
                    <h3>26</h3>
                    <h4>Tháng 11</h4>
                </div>
                <div class="col-md-5 event-text">
                    <h4>Thông báo nhập học</h4>
                    <p>Chúc mừng các bạn sinh viên đã chính thức trở thành tân sinh viên của Trường.</p>
                    <a href="{{route('temp.learning.single') }}">Xem Thêm</a>
                    <p> </p>
                </div>
                <div class="col-md-4 event-img">
                    <div class="item item-type-move">
                        <a class="item-hover" href="{{route('temp.learning.single') }}">
                            <div class="item-info">
                                <div class="headline">
                                    Learning
                                    <div class="line"> </div>
                                </div>
                                <div class="date">Thông báo nhập học</div>
                            </div>
                            <div class="mask"> </div>
                        </a>
                        <div class="item-img">
                            <img src="{{ asset('templates/learning/images/e3.jpg') }}" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--event end here-->

<!--clients star here-->
<div class="clients">
    <div class="container">
        <div class="clients-main">
            <div class="clients-top">
                <h3>HỌC VIÊN NÓI GÌ VỀ CHÚNG TÔI</h3>
            </div>
            <div class="slider-bann wow bounceInRight" data-wow-delay="0.3s">
                <ul class="rslides" id="slider2">
                    <li>
                        <div class="clients-text">
                            <img src="{{ asset('templates/learning/images/c1.png') }}" alt="">
                            <p>Mình đang theo học khóa Tiếng Anh, chương trình dạy rất thực tế và dễ hiểu cho người mất gốc.</p>
                            <h4>Nguyễn Khánh Hạ</h4>
                        </div>
                    </li>
                    <li>
                        <div class="clients-text">
                            <img src="{{ asset('templates/learning/images/c2.png') }}" alt="">
                            <p>Tôi là nhân viên văn phòng nên không có nhiều thời gian đi học thêm.Nhưng SVS cho tôi trải nghiệm học tập rất thoải mái, mở máy lên là học bất cứ lúc nào cũng được.</p>
                            <h4>Đào Thị Hồng Anh</h4>
                        </div>
                    </li>
                    <li>
                        <div class="clients-text">
                            <img src="{{ asset('templates/learning/images/c3.png') }}" alt="">
                            <p>Cám ơn SVS đã mang đến những khóa học chất lượng, tôi đã mua tới 6 khóa học bởi những kiến thức rất thực tế mà các bài học mang lại và chắc chắn sẽ sẽ còn mua thêm.</p>
                            <h4>Trần Văn Tuấn</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!--clients end here-->
@endsection
