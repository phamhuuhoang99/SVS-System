@extends('templates.pedicure.master')
@section('title', 'Pedicure Beauty Spa')
@section('content')
    <!-- About us -->
    <div class="about-3">
        <h3 class="heading-agileinfo">Welcome<span>Skin,Nails and Dịch Vụ Làm Đẹp</span></h3>
        <div class="container">
            <div class="d-flex">

                <div class="about1">
                    <h5>MẪU MÓNG CHÂN HÌNH</h5>
                    <p>Từ lâu những ngón chân “lấp lánh” là phong cách sang trọng và quyến rũ được nhiều cô nàng yêu thích. </p>
                    <p>Đồng thời, kết hợp hạt nhiều màu mang lại cho bạn một mẫu móng tay tươi trẻ tự nhiên hơn .</p>
                    <a class="join-wthree" href={{ route("temp.pedicure.about") }}>Về SVS
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="about2">

                </div>
            </div>

        </div>
    </div>
    <!-- //About us -->
    <!-- wthree-mid -->
    <div class="wthree-mid">
        <div class="container">
            <h3>Ngoài các mẫu móng hot thì việc cập nhật màu sắc phù hợp giúp tôn lên làn da của bạn.</h3>
            <p>Đây là một sự lựa chọn khá tuyệt vời cho những bữa tiệc và bạn có thể thêm vào chút đặc sắc như màu óng ánh hoặc vẽ móng.</p>
            <div class="botton">
                <a class="join-wthree" href="#" data-toggle="modal" data-target="#myModal">Xem Chi Tiết
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- //wthree-mid -->
    <div class="donails">
        <div class="container">
            <h3 class="heading-agileinfo">Do Nails & Waxing!<span>Skin,Nails and Dịch Vụ Làm Đẹp</span></h3>

            <div class="col-md-6 donail_right">
                <div class="mwho-we-textmks">
                    <div class="who-right-mainsmkits">
                        <div class="panel-group textmk_panel_group_faq" id="accordion" role="tablist"
                            aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title asd">
                                        <a class="pa_italic collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">

                                            Làm Móng<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                                class="glyphicon glyphicon-minus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body panel_text">
                                        <p>Sạch, đẹp, đảm bảo chất lượng uy tính</p>
                                        <h6>Danh sách dịch vụ:</h6>
                                        <ul>
                                            <li>Làm Thường Xuyên</li>
                                            <li>Spa Móng</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title asd">
                                        <a class="pa_italic collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">

                                            Chăm Sóc Tay<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                                class="glyphicon glyphicon-minus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo" aria-expanded="false">
                                    <div class="panel-body panel_text">
                                        <p>Sạch, đẹp, đảm bảo chất lượng uy tính</p>
                                        <h6>Danh sách dịch vụ:</h6>
                                        <ul>
                                            <li>Làm Thường Xuyên</li>
                                            <li>Spa Móng</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title asd">
                                        <a class="pa_italic collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">

                                            Waxing<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                                class="glyphicon glyphicon-minus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree" aria-expanded="false">
                                    <div class="panel-body panel_text">
                                        <p>Sạch, đẹp, đảm bảo chất lượng uy tính</p>
                                        <h6>Danh sách dịch vụ:</h6>
                                        <ul>
                                            <li>Làm Thường Xuyên</li>
                                            <li>Spa Móng</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="botton">
                        <a class="join-wthree" href="#" data-toggle="modal" data-target="#myModal">Xem Chi Tiết
                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 donail_left">
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- pricing -->
    <div class="w3ls-section wthree-pricing">
        <div class="container">

            <h3 class="heading-agileinfo">Các gói dịch vụ<span>Skin,Nails and Dịch vụ làm đẹp</span></h3>
            <div class="pricing-grids-info">
                <div class="pricing-grid grid-one">
                    <div class="w3ls-top">
                        <h3>Làm Móng Tay</h3>
                    </div>
                    <div class="w3ls-bottom">
                        <h4> 500.000<span class="sup">đ</span> </h4>
                        <ul class="count">
                            <li> Vẻ ngoài sang trọng và quyến rũ của các nàng sẽ được tô điểm một cách hết sức tinh tế. Với mẫu này, các nàng thoải mái dự tiệc hay xuất hiện ở bất cứ nơi đâu đều được.</li>
                        </ul>

                        <div class="more">
                            <a href={{ route("temp.pedicure.contact") }}>Đặt Chỗ Ngay</a>
                        </div>
                    </div>
                </div>
                <div class="pricing-grid grid-two">
                    <div class="w3ls-top">
                        <h3>Làm Móng Chân</h3>
                    </div>
                    <div class="w3ls-bottom">
                        <h4> 600.000<span class="sup">đ</span> </h4>
                        <ul class="count">
                            <li>Vẻ ngoài sang trọng và quyến rũ của các nàng sẽ được tô điểm một cách hết sức tinh tế. Với mẫu này, các nàng thoải mái dự tiệc hay xuất hiện ở bất cứ nơi đâu đều được...</li>
                        </ul>

                        <div class="more">
                            <a href={{ route("temp.pedicure.contact") }}>Đặt Chỗ Ngay</a>
                        </div>
                    </div>
                </div>
                <div class="pricing-grid grid-three">
                    <div class="w3ls-top">
                        <h3>Waxing</h3>
                    </div>
                    <div class="w3ls-bottom">
                        <h4> 700.000<span class="sup">đ</span> </h4>
                        <ul class="count">
                            <li>Vẻ ngoài sang trọng và quyến rũ của các nàng sẽ được tô điểm một cách hết sức tinh tế. Với mẫu này, các nàng thoải mái dự tiệc hay xuất hiện ở bất cứ nơi đâu đều được...</li>
                        </ul>

                        <div class="more">
                            <a href={{ route("temp.pedicure.contact") }}>Đặt Chỗ Ngay</a>
                        </div>
                    </div>
                </div>
                <div class="zb pricing-grid grid-four">
                    <div class="w3ls-top">
                        <h3>Trọn gói</h3>
                    </div>
                    <div class="w3ls-bottom">
                        <h4> 900.000<span class="sup">đ</span> </h4>
                        <ul class="count">
                            <li>Vẻ ngoài sang trọng và quyến rũ của các nàng sẽ được tô điểm một cách hết sức tinh tế. Với mẫu này, các nàng thoải mái dự tiệc hay xuất hiện ở bất cứ nơi đâu đều được...  </li>
                        </ul>

                        <div class="more">
                            <a href={{ route("temp.pedicure.contact") }}>Đặt Chỗ Ngay</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <!--End-slider-script-->
            </div>
        </div>
    </div>
    <!--//pricing-->

    <!-- Clients -->
    <div class="clients">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="heading-agileinfo">Đánh Giá Dịch Vụ<span>Skin,Nails and Dịch Vụ Làm Đẹp</span></h3>
            </div>
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src={{ asset("templates/pedicure/images/t1.jpg") }} alt="" />
                            <p>Những ngón tay “lấp lánh” là phong cách sang trọng và quyến rũ tôi yêu thích.</p>
                            <div class="client">
                                <h5>Hà My</h5>
                            </div>
                        </li>
                        <li>
                            <img src={{ asset("templates/pedicure/images/t2.jpg") }} alt="" />
                            <p>Những ngón tay “lấp lánh” là phong cách sang trọng và quyến rũ tôi yêu thích.</p>
                            <div class="client">
                                <h5>Anh Thư</h5>
                            </div>
                        </li>
                        <li>
                            <img src={{ asset("templates/pedicure/images/t3.jpg") }} alt="" />
                            <p>Những ngón tay “lấp lánh” là phong cách sang trọng và quyến rũ tôi yêu thích.</p>
                            <div class="client">
                                <h5>Khánh Hạ</h5>
                            </div>
                        </li>
                        <li>
                            <img src={{ asset("templates/pedicure/images/t4.jpg") }} alt="" />
                            <p>Những ngón tay “lấp lánh” là phong cách sang trọng và quyến rũ tôi yêu thích.</p>
                            <div class="client">
                                <h5>Thanh Thúy</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- //Clients -->

@endsection
