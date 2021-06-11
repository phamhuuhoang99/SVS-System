@extends('templates.clinic.master')
@section('title', 'Clinic')
@section('content')
    <!-- about -->
    <div class="agile-about w3ls-section">
        <!-- about-bottom -->
        <div class="agileits-about-btm">
            <h3 class="heading-agileinfo">Chào mừng bạn đến phòng khám!<span>Chúng tôi cung cấp các Dịch vụ Y tế phù hợp với
                    yêu cầu khách hàng.</span></h3>
            <div class="container">
                <div class="w3-flex">
                    <div class="col-md-4 col-sm-4 ab1 agileits-about-grid1">
                        <h4 class="agileinfo-head">Cho người lớn</h4>
                        <p>Bạn có thể gọi cho đội ngũ tư vấn giàu kinh nghiệm của chúng tôi nếu con, gia đình bạn đang gặp
                            vấn đề về sức khỏe</p>
                        <h5>Stress </h5>
                        <h5>Căn thẳng</h5>
                        <h5>Lo âu </h5>
                        <h5>Đau vai gáy</h5>
                        <h5>Cao huyết áp</h5>
                    </div>
                    <div class="col-md-4 col-sm-4 ab1 agileits-about-grid2">

                        <h4 class="agileinfo-head">Cho trẻ em</h4>
                        <p>Bạn có thể gọi cho đội ngũ tư vấn giàu kinh nghiệm của chúng tôi nếu con, gia đình bạn gặp vấn đề
                            về sức khỏe.</p>
                        <h5>Ho </h5>
                        <h5>Sốt</h5>
                        <h5>Sổ mũi</h5>
                        <h5>Cảm cúm</h5>
                        <h5>Viêm họng</h5>
                    </div>
                    <div class="col-md-4 col-sm-4 ab1 agileits-about-grid3">

                        <h4 class="agileinfo-head">Cho doanh nghiệp</h4>
                        <p>Bạn có thể gọi cho đội ngũ tư vấn giàu kinh nghiệm của chúng tôi nếu con, gia đình bạn gặp vấn đề
                            về sức khỏe.</p>
                        <h5>Khám tổng quát định kỳ</h5>
                        <h5>Khám cho nhân viên</h5>
                        <h5>Xét nghiệm phòng dịch</h5>
                        <h5>Gói khám sức khỏe tổng quát chuyên sâu cho Nam</h5>
                        <h5>Gói khám sức khỏe tổng quát chuyên sâu cho Nữ</h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //about-bottom -->
    </div>
    <!-- emergency -->
    @include('templates.clinic.emergency')
    <!-- //emergency -->
    <!-- services -->
    <div class="services">
        <div class="container">
            <h3 class="heading-agileinfo">Lý do bạn nên chọn chúng tôi<span>Chúng Tôi Cung Cấp Các Dịch Vụ Y Tế Phù Hợp Với Yêu Cầu Khách Hàng.</span></h3>

            <div class="services-top-grids">
                <div class="col-md-4">
                    <div class="grid1">
                        <i class="fa fa-heartbeat" aria-hidden="true"></i>
                        <h4>Bệnh viện khách sạn hướng tới đạt chuẩn quốc tế</h4>
                        {{--  <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>  --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="grid1">
                        <i class="fa fa-user-md" aria-hidden="true"></i>
                        <h4>Đội ngũ giáo sư, bác sĩ giỏi trực tiếp khám</h4>
                        {{--  <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>  --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="grid1">
                        <i class="fa fa-wheelchair-alt" aria-hidden="true"></i>
                        <h4>Cơ sở vật chất tiện nghi, thiết bị hiện đại</h4>
                        {{--  <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>  --}}
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="services-bottom-grids">
                <div class="col-md-4">
                    <div class="grid1">
                        <i class="fa fa-medkit" aria-hidden="true"></i>
                        <h4>Chi phí khám hợp lý, chỉ từ 100.000đ
                        </h4>
                        {{--  <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>  --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="grid1">
                        <i class="fa fa-hospital-o" aria-hidden="true"></i>
                        <h4>Áp dụng bảo hiểm y tế và các bảo hiểm </h4>
                        {{--  <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>  --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="grid1">
                        <i class="fa fa-ambulance" aria-hidden="true"></i>
                        <h4>Chăm sóc người bệnh chu đáo</h4>
                        {{--  <p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>  --}}
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //services -->
    <!-- Clients -->
    <div class="tesimonials">
        <div class="tesimonials_tp">
            <div class="container">
                <div class="tittle_head_w3layouts">
                    <h3 class="heading-agileinfo te">Khách hàng nói về chúng tôi<span class="te">Chúng Tôi Cung Cấp Các Dịch Vụ Y Tế Phù Hợp Với Yêu Cầu Khách Hàng.</span></h3>
                </div>
                <div class="inner_sec_info_agileits_w3">
                    <div class="test_grid_sec">
                        <div class="col-md-offset-2 col-md-8">
                            <div class="carousel slide two" data-ride="carousel" id="quote-carousel">
                                <!-- Bottom Carousel Indicators -->
                                <ol class="carousel-indicators two">
                                    <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#quote-carousel" data-slide-to="1"></li>
                                    <li data-target="#quote-carousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Carousel Slides / Quotes -->
                                <div class="carousel-inner">

                                    <!-- Quote 1 -->
                                    <div class="item active">
                                        <blockquote>
                                            <div class="test_grid">
                                                <div class="col-sm-3 text-center test_img">
                                                    <img src="{{ asset('templates/clinic/images/ts1.jpg') }}" alt=" "
                                                        class="img-responsive" />

                                                </div>
                                                <div class="col-sm-9 test_img_info">
                                                    <p>Bộ phận tư vấn nhiệt tình, tận tâm hướng dẫn khách hàng chi tiết.</p>
                                                    <h6>Hoàng Nhân</h6>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 2 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="test_grid">
                                                <div class="col-sm-3 text-center test_img">
                                                    <img src="{{ asset('templates/clinic/images/ts2.jpg') }}" alt=" "
                                                        class="img-responsive" />
                                                </div>
                                                <div class="col-sm-9 test_img_info">
                                                    <p>Bác sỹ lành nghề, chăm sóc khách hàng tận tâm, nhiệt tình.</p>
                                                    <h6>Đặng Tiến</h6>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="test_grid">
                                                <div class="col-sm-3 text-center test_img">
                                                    <img src="{{ asset('templates/clinic/images/ts3.jpg') }}" alt=" "
                                                        class="img-responsive" />
                                                </div>
                                                <div class="col-sm-9 test_img_info">
                                                    <p>Bác sỹ lành nghề, chăm sóc khách hàng tận tâm, nhiệt tình.</p>
                                                    <h6>Đình Hà</h6>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>

                                <!-- Carousel Buttons Next/Prev -->
                                <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i
                                        class="fa fa-chevron-left"></i></a>
                                <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i
                                        class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Clients -->
    <!--/icons-->
    <div class="banner-bottom">
        <div class="container">
            <div class="tittle_head_w3layouts">
                <h3 class="heading-agileinfo">Tin Tức & Sự kiện<span>Chúng Tôi Cung Cấp Các Dịch Vụ Y Tế Phù Hợp Với Yêu Cầu Khách Hàng.</span></h3>
            </div>
            <div class="inner_sec_info_agileits_w3">
                <div class="col-md-4 grid_info">
                    <div class="icon_info">
                        <img src="{{ asset('templates/clinic/images/g4.jpg') }}" alt=" " class="img-responsive">
                        <h5>ĐÓN CƠN MƯA QUÀ TẶNG SỨC KHỎE – ƯU ĐÃI TỚI 30%</h5>
                        <p>Duy nhất tháng 11 -Chúng tôi dành tặng ưu đãi tới 30% các gói khám sức khỏe và tầm soát ung thư, tặng thêm ngàn quà tặng bốc thăm may mắn</p>
                        <a href="#" class="read-agileits" data-toggle="modal" data-target="#myModal">Xem thêm</a>
                    </div>
                </div>
                <div class="col-md-4 grid_info">
                    <div class="icon_info">
                        <img src="{{ asset('templates/clinic/images/g7.jpg') }}" alt=" " class="img-responsive">
                        <h5>PHÁT HIỆN BỆNH LÝ NHỜ KHÁM SỨC KHỎE ĐỊNH KỲ</h5>
                        <p>Cho đến thời điểm hiện tại, các ca tử vong khi nhiễm đại dịch tại Việt Nam đều đang có tiền sử bệnh lý nền và đang trong quá trình điều trị</p>
                        <a href="#" class="read-agileits" data-toggle="modal" data-target="#myModal">Xem thêm</a>
                    </div>
                </div>
                <div class="col-md-4 grid_info">
                    <div class="icon_info">
                        <img src="{{ asset('templates/clinic/images/g6.jpg') }}" alt=" " class="img-responsive">
                        <h5>ƯU ĐÃI CHƯƠNG TRÌNH THAI SẢN TRỌN GÓI THÁNG 11 </h5>
                        <p>Sẻ chia, đồng hành và mong muốn mang đến cho mẹ một thai kỳ khỏe mạnh, dịch vụ thai sản trọn gói chính là món quà ý nghĩa mà chúng tôi dành cho bạn.</p>
                        <a href="#" class="read-agileits" data-toggle="modal" data-target="#myModal">Xem thêm</a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--//icons-->

@endsection
