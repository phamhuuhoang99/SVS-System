@extends('templates.mastery.master')
@section('title', 'Mastery')
@section('content')
<section class="w3l-service-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Dịch Vụ</h2>
            <p><a href="{{ route('temp.mastery.index') }}">Trang chủ</a> &nbsp; / &nbsp; Dịch vụ</p>
        </div>
    </div>
</section>
<section class="w3l-features-8">
    <!-- /features -->
    <div class="features py-5" id="services">
        <div class="container py-md-3">
            <div class="fea-gd-vv text-center row">

                <div class="float-top col-lg-4 col-md-6">
                    <a href="#"><img src="{{ asset('templates/mastery/images/g2.jpg') }}" class="img-responsive" alt=""></a>
                    <div class="float-lt feature-gd">
                        <h3><a href="#">Chế tạo Robot</a> </h3>
                        <p> Chỉ với tối đa 18 tháng, người học có thể sử dụng kiến thức, trải nghiệm và chứng chỉ
                        </p>
                    </div>
                </div>
                <div class="float-top col-lg-4 col-md-6 mt-md-0 mt-5">
                    <a href="#"><img src="{{ asset('templates/mastery/images/g3.jpg') }}" class="img-responsive" alt=""></a>
                    <div class="float-lt feature-gd">
                        <h3><a href="#">Phân Tích Dữ Liệu</a> </h3>
                        <p> Chỉ với tối đa 18 tháng, người học có thể sử dụng kiến thức, trải nghiệm và chứng chỉ
                        </p>
                    </div>
                </div>
                <div class="float-top col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <a href="#"><img src="{{ asset('templates/mastery/images/g8.jpg') }}" class="img-responsive" alt=""></a>
                    <div class="float-lt feature-gd">
                        <h3><a href="#"></a>Học Machine Learning</h3>
                        <p> Chỉ với tối đa 18 tháng, người học có thể sử dụng kiến thức, trải nghiệm và chứng chỉ
                        </p>
                    </div>
                </div>
                <div class="float-top col-lg-4 col-md-6 mt-5">
                    <a href="#"><img src="{{ asset('templates/mastery/images/g5.jpg') }}" class="img-responsive" alt=""></a>
                    <div class="float-lt feature-gd">
                        <h3><a href="#">Khoa Học Máy Tính</a> </h3>
                        <p> Chỉ với tối đa 18 tháng, người học có thể sử dụng kiến thức, trải nghiệm và chứng chỉ
                        </p>
                    </div>
                </div>
                <div class="float-top col-lg-4 col-md-6 mt-5">
                    <a href="#"><img src="{{ asset('templates/mastery/images/g6.jpg') }}" class="img-responsive" alt=""></a>
                    <div class="float-lt feature-gd">
                        <h3><a href="#">Học nghề Tester</a> </h3>
                        <p> Chỉ với tối đa 18 tháng, người học có thể sử dụng kiến thức, trải nghiệm và chứng chỉ
                        </p>
                    </div>
                </div>
                <div class="float-top col-lg-4 col-md-6 mt-5">
                    <a href="#"><img src="{{ asset('templates/mastery/images/g7.jpg') }}" class="img-responsive" alt=""></a>
                    <div class="float-lt feature-gd">
                        <h3><a href="#">Học Developer Junior</a> </h3>
                        <p> Chỉ với tối đa 18 tháng, người học có thể sử dụng kiến thức, trải nghiệm và chứng chỉ
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //features -->
</section>
<section class="w3l-pricing-7" id="pricing">
    <div class="w3l-pricing-7_sur py-5">
        <div class="container py-md-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">Xem Các Khóa Học</h3>
                <p class="my-3 head"> Học khi bạn hứng thú – Hỏi khi bạn cần hỗ trợ.</p>
            </div>
            <div class="row w3l-pricing-7-gd-top pt-3 mt-5">
                <div class="col-lg-4 col-md-6 w3l-pricing-7-gd-left">
                    <div class="w3l-pricing-7  pric-7-1">
                        <h6>Gói Cơ Bản</h6>
                        <div class="w3l-pricing-7-top">
                            <h3 class="title-sub">700.000 VNĐ</h3>
                            <p>1 Tháng</p>
                        </div>
                        <div class="w3l-pricing-7-bottom">
                            <div class="w3l-pricing-7-bottom-bottom">
                                <ul class="links">
                                    <li class="tick-info">
                                        Chương trình học linh hoạt
                                    </li>
                                    <li class="tick-info">
                                       Phù hợp bới mọi mục tiêu
                                    </li>
                                    <li class="tick-info">
                                       Học nhanh đi làm sớm
                                    </li>
                                    <li class="tick-info">
                                        Học để nâng cao trình độ
                                    </li>
                                    <li class="tick-info">
                                        Học để biết
                                    </li>
                                    <li class="tick-info">
                                        Học kỹ năng
                                    </li>
                                </ul>
                            </div>
                            <div class="buy-button text-center mt-5">
                                <a href="{{ route('temp.mastery.contact') }}" class="btn btn-secondary btn-theme2">
                                    <div class="anim"></div><span>Đăng Ký</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4 w3l-pricing-7-gd-left active">
                    <div class="w3l-pricing-7 pric-7 active">
                        <h6>Gói Tiêu Chuẩn</h6>
                        <div class="w3l-pricing-7-top">
                            <h3 class="title-sub">800.000 VNĐ</h3>
                            <p>1 Tháng</p>
                        </div>
                        <div class="w3l-pricing-7-bottom">
                            <div class="w3l-pricing-7-bottom-bottom">
                                <ul class="links">
                                    <li class="tick-info">
                                        Chương trình học linh hoạt
                                    </li>
                                    <li class="tick-info">
                                       Phù hợp bới mọi mục tiêu
                                    </li>
                                    <li class="tick-info">
                                       Học nhanh đi làm sớm
                                    </li>
                                    <li class="tick-info">
                                        Học để nâng cao trình độ
                                    </li>
                                    <li class="tick-info">
                                        Học để biết
                                    </li>
                                    <li class="tick-info">
                                        Học kỹ năng
                                    </li>
                                </ul>
                            </div>
                            <div class="buy-button text-center mt-5">
                                <a href="{{ route('temp.mastery.contact') }}" class="btn btn-secondary btn-theme2">
                                    <div class="anim"></div><span>Đăng Ký</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 w3l-pricing-7-gd-left">
                    <div class="w3l-pricing-7 pric-7-2">
                        <h6>Gói Nâng Cao</h6>
                        <div class="w3l-pricing-7-top">
                            <h3 class="title-sub">900.000 VNĐ</h3>
                            <p>1 Tháng</p>
                        </div>
                        <div class="w3l-pricing-7-bottom">
                            <div class="w3l-pricing-7-bottom-bottom">
                                <ul class="links">
                                    <li class="tick-info">
                                        Chương trình học linh hoạt
                                    </li>
                                    <li class="tick-info">
                                       Phù hợp bới mọi mục tiêu
                                    </li>
                                    <li class="tick-info">
                                       Học nhanh đi làm sớm
                                    </li>
                                    <li class="tick-info">
                                        Học để nâng cao trình độ
                                    </li>
                                    <li class="tick-info">
                                        Học để biết
                                    </li>
                                    <li class="tick-info">
                                        Học kỹ năng
                                    </li>
                                </ul>
                            </div>
                            <div class="buy-button text-center mt-5">
                                <a href="{{ route('temp.mastery.contact') }}" class="btn btn-secondary btn-theme2">
                                    <div class="anim"></div><span>Đăng Ký</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w3l-features-4">
    <!-- /features -->
    <div class="features py-5" id="services">
        <div class="container py-md-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">Những Dịch Vụ Tuyệt Vời</h3>
                <p class="my-3 head"> Sứ mệnh của Chúng tôi là giúp người học trải nghiệm và trang bị kỹ năng học chủ động, để có thể kiếm tiền bằng nghề/kiến thức mà mình theo học hoặc sử dụng những gì đã học được để làm tốt hơn việc hiện tại.</p>
            </div>
            <div class="fea-gd-vv row mt-5 pt-3">
                <div class="float-lt feature-gd col-lg-4 col-md-6">
                    <div class="icon"> <span class="fa fa-file-text-o" aria-hidden="true"></span></div>
                    <div class="icon-info">
                        <h5><a href="#">
                                Chứng Chỉ Tốt Nhất</a></h5>
                        <p> Giúp người học trải nghiệm và trang bị kỹ năng học chủ động, để có thể kiếm tiền bằng nghề/kiến thức mà mình theo học.
                        </p>
                        <a href="#" class="red mt-3">Xem thêm <span class="fa fa-angle-right pl-1"></span></a>
                    </div>

                </div>
                <div class="float-mid feature-gd col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="icon"> <span class="fa fa-trophy" aria-hidden="true"></span></div>
                    <div class="icon-info">
                        <h5><a href="#">
                            Giải thưởng quốc gia</a></h5>
                        <p> Giúp người học trải nghiệm và trang bị kỹ năng học chủ động, để có thể kiếm tiền bằng nghề/kiến thức mà mình theo học.
                        </p>
                        <a href="#" class="red mt-3">Xem thêm <span class="fa fa-angle-right pl-1"></span></a>
                    </div>
                </div>
                <div class="float-rt feature-gd col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="icon"> <span class="fa fa-clone" aria-hidden="true"></span></div>
                    <div class="icon-info">
                        <h5><a href="#">Tuyển chọn giáo viên</a></h5>
                        <p> Giúp người học trải nghiệm và trang bị kỹ năng học chủ động, để có thể kiếm tiền bằng nghề/kiến thức mà mình theo học.
                        </p>
                        <a href="#" class="red mt-3">Xem thêm <span class="fa fa-angle-right pl-1"></span></a>
                    </div>
                </div>
                <div class="float-lt feature-gd col-lg-4 col-md-6 mt-5">
                    <div class="icon"> <span class="fa fa-bullseye" aria-hidden="true"></span></div>
                    <div class="icon-info">
                        <h5><a href="#">Khóa học riêng</a>
                        </h5>
                        <p> Giúp người học trải nghiệm và trang bị kỹ năng học chủ động, để có thể kiếm tiền bằng nghề/kiến thức mà mình theo học.
                        </p>
                        <a href="#" class="red mt-3">Xem thêm <span class="fa fa-angle-right pl-1"></span></a>
                    </div>

                </div>
                <div class="float-mid feature-gd col-lg-4 col-md-6 mt-5">
                    <div class="icon"> <span class="fa fa-cube" aria-hidden="true"></span></div>
                    <div class="icon-info">
                        <h5><a href="#">
                                Hơn 4000 học viên</a>
                        </h5>
                        <p> Giúp người học trải nghiệm và trang bị kỹ năng học chủ động, để có thể kiếm tiền bằng nghề/kiến thức mà mình theo học.
                        </p>
                        <a href="#" class="red mt-3">Xem thêm <span class="fa fa-angle-right pl-1"></span></a>
                    </div>
                </div>
                <div class="float-rt feature-gd col-lg-4 col-md-6 mt-5">
                    <div class="icon"> <span class="fa fa-spinner" aria-hidden="true"></span></div>
                    <div class="icon-info">
                        <h5><a href="#">Hổ trợ 24/7</a>
                        </h5>
                        <p> Giúp người học trải nghiệm và trang bị kỹ năng học chủ động, để có thể kiếm tiền bằng nghề/kiến thức mà mình theo học.
                        </p>
                        <a href="#" class="red mt-3">Xem thêm <span class="fa fa-angle-right pl-1"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //features -->
</section>
@endsection