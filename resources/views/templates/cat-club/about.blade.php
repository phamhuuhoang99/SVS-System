@extends('templates.cat-club.master')
@section('title', 'Cat Club')
@section('content')
    <!-- about -->
    <div class="about">
        <!-- about-top -->
        <div class="agileits-about-top">
            <div class="container">
                <div class="agileits-about-top-heading">
                    <h3>Về chúng tôi</h3>
                </div>
                <div class="agileinfo-top-grids">
                    <div class="col-sm-4 wthree-top-grid">
                        <img src="{{ asset('templates/cat-club/images/a1.jpg') }}" alt="" />
                        <h4>Chất lượng & Tận tình</h4>
                        <p>Chế độ ăn cho vật nuôi được đảm bảo đầy đủ dinh dưỡng hoặc theo khẩu phần riêng của chủ.</p>
                    </div>
                    <div class="col-sm-4 wthree-top-grid">
                        <img src="{{ asset('templates/cat-club/images/a2.jpg') }}" alt="" />
                        <h4>Trang Thiết Bị Hiện Đại</h4>
                        <p>Đi dạo và vui chơi cùng những bạn bè cún khác ( không áp dụng cho mèo ).</p>
                    </div>
                    <div class="col-sm-4 wthree-top-grid">
                        <img src="{{ asset('templates/cat-club/images/a3.jpg') }}" alt="" />
                        <h4>Cắt Móng & Tỉa Lông</h4>
                        <p>Thú cưng của bạn sẽ được tắm rửa và cắt tỉa lông sạch sẽ.
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //about-top -->

        <!-- choose -->
        <div class="w3-agileits-choose">
            <div class="container">
                <div class="agileits-about-top-heading agileits-w3layouts-choose-heading">
                    <h3>Tại sao nên chọn chúng tôi?</h3>
                </div>
                <div class="agile-choose-grids">
                    <div class="col-sm-4 agile-choose-grid">
                        <div class="choose-icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="choose-info">
                            <h4>Nhân viên giàu kinh nghiệm</h4>
                            <p>Đội ngũ bác sĩ thú y được đào tạo chuyên sâu tại các trường đại học, bệnh viện uy tín trong
                                và ngoài nước.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 agile-choose-grid">
                        <div class="choose-icon">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </div>
                        <div class="choose-info">
                            <h4>Giá thành hợp lý</h4>
                            <p>Hiểu được tâm lý của khách hàng, bệnh viện thú y chúng tôi luôn hướng đến những dịch vụ chất
                                lượng, kèm theo đó là một giá thành hợp lý.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 agile-choose-grid">
                        <div class="choose-icon">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        </div>
                        <div class="choose-info">
                            <h4>Tư vấn miễn phí</h4>
                            <p>Bạn hẳn đã từng gặp những thắc mắc về chó mèo mà không biết hỏi ai? Chúng tôi sẵn sàng giúp bạn giải đáp mọi thắc mắc với đội ngũ tư vấn giàu kinh nghiệm.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //choose -->
        <!-- team -->
        <div class="team">
            <div class="container">
                <div class="agile_team_grids">
                    <div class="col-md-3 agile_team_grid">
                        <div class="agile_team_grid_main">
                            <img src="{{ asset('templates/cat-club/images/t2.jpg') }}" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <ul class="top-links two">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="agile_team_grid1">
                            <h3>Khánh Hạ</h3>
                            <p>CEO</p>
                        </div>
                    </div>
                    <div class="col-md-3 agile_team_grid">
                        <div class="agile_team_grid_main">
                            <img src="{{ asset('templates/cat-club/images/t1.jpg') }}" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <ul class="top-links two">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="agile_team_grid1">
                            <h3>Nhật Thiện </h3>
                            <p>Giám đốc </p>
                        </div>
                    </div>
                    <div class="col-md-3 agile_team_grid three">
                        <div class="agile_team_grid_main">
                            <img src="{{ asset('templates/cat-club/images/t3.jpg') }}" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <ul class="top-links two">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="agile_team_grid1">
                            <h3>Anh Thư</h3>
                            <p>Thư Ký</p>
                        </div>
                    </div>
                    <div class="col-md-3 agile_team_grid four">
                        <div class="agile_team_grid_main">
                            <img src="{{ asset('templates/cat-club/images/t4.jpg') }}" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <ul class="top-links two">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="agile_team_grid1">
                            <h3>Phong Khoa</h3>
                            <p>Nhân Viên </p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //team -->
    </div>
    <!-- //about -->

@endsection
