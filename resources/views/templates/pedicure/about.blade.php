@extends('templates.pedicure.master')
@section('title', 'Pedicure Beauty Spa')
@section('content')
    <!-- about inner -->
    <div class="about-bottom inner-padding">
        <div class="container">
            <h3 class="heading-agileinfo">Về SVS<span>Skin,Nails và Dịch Vụ Làm Đẹp</span></h3>
            <div class="about-bott-right">
                <h5>Chúng Tôi Là Ai</h5>
                <p>Chúng tôi có nền tảng thương mại SVS được xây dựng nhằm cung cấp cho người dùng những trải nghiệm dễ dàng, an toàn và nhanh chóng khi mua hàng trực tuyến thông qua hệ thống hổ trợ và vận hành vững mạnh.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="wthree-mid">
        <div class="container">
            <h3>NGOÀI CÁC MẪU MÓNG HOT THÌ VIỆC CẬP NHẬT MÀU SẮC PHÙ HỢP GIÚP TÔN LÊN LÀN DA CỦA BẠN.</h3>
            <p>Đây là một sự lựa chọn khá tuyệt vời cho những bữa tiệc và bạn có thể thêm vào chút đặc sắc như màu óng ánh hoặc vẽ móng.</p>
            <div class="botton">
                <a class="join-wthree" href="#" data-toggle="modal" data-target="#myModal">Xem Chi Tiết
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- //about inner -->
    <!-- Team -->
    <div class="team">
        <div class="container">
            <h3 class="heading-agileinfo">Đội ngũ<span>Skin,Nails và Dịch Vụ Làm Đẹp</span></h3>
            <div class="agile_team_grids">
                <div class="col-md-3 agile_team_grid">
                    <div class="view view-sixth">
                        <img src={{ asset("templates/pedicure/images/t1.jpg") }} alt=" " class="img-responsive">
                        <div class="mask">
                            <h5>Lorem Ipsum</h5>
                            <div class="agileits_social_icons">
                                <ul class="social_agileinfo">
                                    <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4>Daniel</h4>
                    <p>Facial</p>
                </div>
                <div class="col-md-3 agile_team_grid">
                    <div class="view view-sixth">
                        <img src={{ asset("templates/pedicure/images/t2.jpg") }} alt=" " class="img-responsive">
                        <div class="mask">
                            <h5>Lorem Ipsum</h5>
                            <div class="agileits_social_icons">
                                <ul class="social_agileinfo">
                                    <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4>Mary Winkler</h4>
                    <p>Regular Wax</p>
                </div>
                <div class="col-md-3 agile_team_grid">
                    <div class="view view-sixth">
                        <img src={{ asset("templates/pedicure/images/t3.jpg") }} alt=" " class="img-responsive">
                        <div class="mask">
                            <h5>Lorem Ipsum</h5>
                            <div class="agileits_social_icons">
                                <ul class="social_agileinfo">
                                    <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4>James Mac</h4>
                    <p>Threading</p>
                </div>
                <div class="col-md-3 agile_team_grid">
                    <div class="view view-sixth">
                        <img src={{ asset("templates/pedicure/images/t4.jpg") }} alt=" " class="img-responsive">
                        <div class="mask">
                            <h5>Lorem Ipsum</h5>
                            <div class="agileits_social_icons">
                                <ul class="social_agileinfo">
                                    <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4>Smith Carls</h4>
                    <p>Mani-Pedi</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //Team -->


@endsection
