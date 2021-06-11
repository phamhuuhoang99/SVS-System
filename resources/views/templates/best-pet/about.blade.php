@extends('templates.best-pet.master')
@section('title', 'Best Pet')
@section('content')
    @include('templates.best-pet.welcome')
    <!-- Stats -->
    <div class="stats services jarallax">
        <div class="container">
            <div class="stats-info agileits-w3layouts">
                <div class="col-sm-3 col-xs-6 stats-grid">
                    <div class="stats-img">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <h5>Khách Hàng Hài Lòng</h5>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='157000'
                        data-delay='.5' data-increment="100">157000</div>
                </div>
                <div class="col-sm-3 col-xs-6 stats-grid">
                    <div class="stats-img w3-agileits">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    </div>
                    <h5>Sự Kiện</h5>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='850' data-delay='8'
                        data-increment="1">850</div>
                </div>
                <div class="col-sm-3 col-xs-6 stats-grid">
                    <div class="stats-img w3-agileits">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <h5>Dự Án</h5>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='80000'
                        data-delay='.5' data-increment="100">80000</div>
                </div>
                <div class="col-sm-3 col-xs-6 stats-grid">
                    <div class="stats-img w3-agileits">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                    </div>
                    <h5>Giải Thưởng</h5>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='269' data-delay='8'
                        data-increment="1">269</div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //Stats -->
    <!-- team -->
    <div class="team agileits">
        <div class="team-agileinfo">
            <div class="container">
                <h3 class="agileits-title w3title2">Đội Ngũ</h3>
                <div class="team-row agileits-w3layouts">
                    <div class="col-sm-3 col-xs-6 team-grids">
                        <div class="team-agileimg">
                            <img class="img-responsive" src="{{ asset('templates/best-pet/images/t1.jpg') }}" alt="">
                            <div class="captn">
                                <div class="captn-top">
                                    <h4>Hữu Hoàng</h4>
                                    <p>Nhân Viên</p>
                                </div>
                                <div class="social-w3lsicon">
                                    <ul class="agileits_social_list">
                                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 team-grids">
                        <div class="team-agileimg">
                            <img class="img-responsive" src="{{ asset('templates/best-pet/images/t2.jpg') }}" alt="">
                            <div class="captn">
                                <div class="captn-top">
                                    <h4>Hà My</h4>
                                    <p>Giám đốc</p>
                                </div>
                                <div class="social-w3lsicon">
                                    <ul class="agileits_social_list">
                                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 team-grids">
                        <div class="team-agileimg">
                            <img class="img-responsive" src="{{ asset('templates/best-pet/images/t3.jpg') }}" alt="">
                            <div class="captn">
                                <div class="captn-top">
                                    <h4>Nhật Thiện</h4>
                                    <p>Nhân viên</p>
                                </div>
                                <div class="social-w3lsicon">
                                    <ul class="agileits_social_list">
                                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 team-grids">
                        <div class="team-agileimg">
                            <img class="img-responsive" src="{{ asset('templates/best-pet/images/t4.jpg') }}" alt="">
                            <div class="captn">
                                <div class="captn-top">
                                    <h4>Anh Thư</h4>
                                    <p>Founder</p>
                                </div>
                                <div class="social-w3lsicon">
                                    <ul class="agileits_social_list">
                                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //team -->
@endsection
