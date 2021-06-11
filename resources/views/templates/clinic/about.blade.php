@extends('templates.clinic.master')
@section('title', 'Clinic')
@section('content')
    <!-- about -->
    <div class="about">
        <div class="container">
            <h3 class="heading-agileinfo">Chúng tôi đã làm<span>Chúng Tôi Cung Cấp Các Dịch Vụ Y Tế Phù Hợp Với Yêu Cầu
                    Khách Hàng.</span></h3>
            <div class="col-md-6 about-w3right">
                <img src="{{ asset('templates/clinic/images/g6.jpg') }}" class="img-responsive" alt="" />
            </div>
            <div class="col-md-6 about-w3left">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title asd">
                                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></i>Cánh tay nối dài của các
                                    bệnh viện Trung ương
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne"
                            aria-expanded="false" style="height: 0px;">
                            <div class="panel-body panel_text">
                                Nhiều năm qua, Hệ thống Y tế đã tạo được uy tín lớn về chất lượng khám chữa bệnh và
                                dịch vụ chăm sóc với cơ sở vật chất hiện đại vượt trội, trang thiết bị y tế tiên tiến, cùng
                                đội ngũ bác sĩ giỏi chuyên môn, giàu y đức.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h5 class="panel-title asd">
                                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></i>
                                    Hướng đi đúng từ ngày đầu thành lập
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo"
                            aria-expanded="false" style="height: 0px;">
                            <div class="panel-body panel_text">
                                Từ những ngày đầu đi vào hoạt động, Bệnh viện Chúng tôi là đơn vị tiên phong trong hợp
                                tác quốc tế với các bệnh viện nổi tiếng tại những nước có nền y học phát triển trên thế
                                giới.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h5 class="panel-title asd">
                                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></i>Đà tăng trưởng mạnh mẽ
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body panel_text">
                                Bước chuyển mình ấn tượng đã mang đến đà tăng trưởng mạnh mẽ trong những năm tiếp theo. Bệnh viện chúng tôi khi đó đã bắt tay ngay vào giai đoạn 2 mở rộng hoạt động kinh doanh của bệnh viện.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h5 class="panel-title asd">
                                <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></i>Những dịch vụ khám chữa bệnh mũi nhọn
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingFour" aria-expanded="true">
                            <div class="panel-body panel_text">
                                Để có được thành quả đáng tự hào hôm nay, chất lượng khám chữa bệnh và dịch vụ chăm sóc y tế đóng góp phần quan trọng nhất.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //about -->
    <!-- emergency_cases -->
    @include('templates.clinic.emergency')
    <!-- //emergency_cases -->
    <!-- team -->
    <div class="team">
        <div class="container">
            <h3 class="heading-agileinfo">Chuyên gia y tế<span>Chúng Tôi Cung Cấp Các Dịch Vụ Y Tế Phù Hợp Với Yêu Cầu Khách Hàng.</span></h3>
            <div class="teamgrids">
                <div class="col-md-3 teamgrid1">
                    <img src="{{ asset('templates/clinic/images/t1.jpg') }}" class="img-responsive" alt="" />
                    <div class="teaminfo">
                        <h3>Kim Khánh</h3>
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Bác sỹ tư vấn</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> 035 618 5047</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">
                                mail@example.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 teamgrid1">
                    <img src="{{ asset('templates/clinic/images/t2.jpg') }}" class="img-responsive" alt="" />
                    <div class="teaminfo">
                        <h3>Duy Khôi</h3>
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i>NHA KHOA</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> 035 618 5047</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">
                                mail@example1.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 teamgrid1">
                    <img src="{{ asset('templates/clinic/images/t3.jpg') }}" class="img-responsive" alt="" />
                    <div class="teaminfo">
                        <h3>Hoàng Nhân</h3>
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i>GIÁO ĐỐC</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> 035 618 5047</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">
                                mail@example2.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 teamgrid1">
                    <img src="{{ asset('templates/clinic/images/t4.jpg') }}" class="img-responsive" alt="" />
                    <div class="teaminfo">
                        <h3>Phong Khoa</h3>
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i>BÁC SỸ PHẨU THUẬT</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> 035 618 5047</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">
                                mail@example3.com</a></p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //team -->
@endsection
