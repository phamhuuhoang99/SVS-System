@extends('templates.health-plus.master')
@section('title', 'Health Plus')
@section('content')
    <!-- banner -->
    <div class="banner-silder">
        <div id="JiSlider" class="jislider">
            <ul>
                <li>
                    <div class="w3layouts-banner-top">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <span>Health Plus</span>
                                <h3>Cơ sở vật chất hiện đại</h3>
                                <p>Cơ sở vật chất khang trang, hiện đang ngang tầm “bệnh viện khách sạn”.</p>

                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top1">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <span>Real</span>
                                <h3>Tư vấn miễn phí</h3>
                                <p>Hổ trợ khách hàng 24/7. Dịch vụ y tế nhanh chóng, thông tin bảo mật, chi phí niêm yết công khai.</p>

                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top2">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <span>Amazing</span>
                                <h3>Bác sĩ giàu kinh nghiệm</h3>
                                <p>Phòng khám quy tụ đội ngũ bác sĩ, thạc sĩ, “thầy thuốc ưu tú” đầu ngành, có nhiều năm kinh nghiệm.</p>

                            </div>

                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <!-- //banner -->
    @include('templates.health-plus.same')
    @include('templates.health-plus.stats')
    <!-- services-bottom -->
    <div class="services-bottom">
        <div class="col-md-5 wthree_services_bottom_right">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="w3_agile_services_bottom_right_grid">
                                <p class="w3layouts_head_slide">Trung tâm chăm sóc <span>Sức khỏe</span></p>
                            </div>
                        </li>
                        <li>
                            <div class="w3_agile_services_bottom_right_grid1">
                                <p class="w3layouts_head_slide">Trung tâm chăm sóc <span>Sức khỏe</span></p>
                            </div>
                        </li>
                        <li>
                            <div class="w3_agile_services_bottom_right_grid2">
                                <p class="w3layouts_head_slide">Trung tâm chăm sóc <span>Sức khỏe</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="col-md-7 wthree_services_bottom_left">
            <div class="wthree_services_bottom_left_grid">
                <div class="col-md-6 w3_agileits_services_bottom_l_grid">
                    <div class="agile_services_bottom_l_grid1">
                        <img src="{{ asset('templates/health-plus/images/g4.jpg') }}" alt=" " class="img-responsive" />
                        <div class="w3_service_bottom_grid_pos">
                            <h3>Chăm sóc chất lượng</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 w3_agileits_services_bottom_r_grid">
                    <h4>Bác sĩ phẫu thuật giỏi nhất</h4>
                    <p> Phòng khám quy tụ đội ngũ bác sĩ, thạc sĩ, “thầy thuốc ưu tú” đầu ngành, có nhiều năm kinh nghiệm.</p>

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="wthree_services_bottom_left_grid">
                <div class="col-md-6 w3_agileits_services_bottom_r_grid">
                    <h4>Công nghệ mới nhất</h4>
                    <p> Cơ sở vật chất của phòng khám được đánh giá vượt trội, ưu việt, luôn cập nhật các công nghệ tiên tiến nhất.</p>

                </div>
                <div class="col-md-6 w3_agileits_services_bottom_l_grid">
                    <div class="agile_services_bottom_l_grid1">
                        <img src="{{ asset('templates/health-plus/images/g2.jpg') }}" alt=" " class="img-responsive" />
                        <div class="w3_service_bottom_grid_pos">
                            <h3>Chăm sóc chất lượng</h3>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
    <!-- //services-bottom -->
@endsection
