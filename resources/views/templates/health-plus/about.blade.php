@extends('templates.health-plus.master')
@section('title', 'Health Plus')
@section('content')
    <!-- banner1 -->
    <div class="banner1 jarallax">
        <div class="container">
        </div>
    </div>

    <div class="services-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{ route('temp.health-plus.index') }}">Trang Chủ</a><i>|</i></li>
                <li>Về Chúng Tôi</li>
            </ul>
        </div>
    </div>
    <!-- //banner1 -->


    <!-- //banner -->

    @include('templates.health-plus.same')
    <!-- team -->
    <div class="team portfolio " id="team">
        <div class="container">
            <h3 class="w3_heade_tittle_agile">Đội ngũ</h3>
            <p class="sub_t_agileits">Meet Our Amazing Team...</p>
            <div class="w3layouts-grids">
                <div class="col-md-3 wthree_team_grid">
                    <div class="wthree_team_grid1">
                        <div class="hover14 column">
                            <div>
                                <figure><img src="{{ asset('templates/health-plus/images/t4.jpg') }}" alt=" " class="img-responsive" /></figure>
                            </div>
                        </div>
                        <div class="wthree_team_grid1_pos">
                            <h4>Rabecca Scot</h4>
                        </div>
                    </div>
                    <div class="wthree_team_grid2">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 wthree_team_grid">
                    <div class="wthree_team_grid1">
                        <div class="hover14 column">
                            <div>
                                <figure><img src="{{ asset('templates/health-plus/images/t3.jpg') }}" alt=" " class="img-responsive" /></figure>
                            </div>
                        </div>
                        <div class="wthree_team_grid1_pos">
                            <h4>Rosy Carl </h4>
                        </div>
                    </div>
                    <div class="wthree_team_grid2">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 wthree_team_grid">
                    <div class="wthree_team_grid1">
                        <div class="hover14 column">
                            <div>
                                <figure><img src="{{ asset('templates/health-plus/images/t2.jpg') }}" alt=" " class="img-responsive" /></figure>
                            </div>
                        </div>
                        <div class="wthree_team_grid1_pos">
                            <h4>David Martin</h4>
                        </div>
                    </div>
                    <div class="wthree_team_grid2">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 wthree_team_grid">
                    <div class="wthree_team_grid1">
                        <div class="hover14 column">
                            <div>
                                <figure><img src="{{ asset('templates/health-plus/images/t1.jpg') }}" alt=" " class="img-responsive" /></figure>
                            </div>
                        </div>
                        <div class="wthree_team_grid1_pos">
                            <h4>Reena Scot</h4>
                        </div>
                    </div>
                    <div class="wthree_team_grid2">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->
    <!-- stats -->
    <div class="stats_inner jarallax" id="stats">
        <div class="container">
            <div class="inner_w3l_agile_grids">
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid">
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                    <p class="counter">120</p>
                    <h3>Phòng khám</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
                    <i class="fa fa-wheelchair" aria-hidden="true"></i>
                    <p class="counter">165</p>
                    <h3>Xe Lăn</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
                    <i class="fa fa-ambulance" aria-hidden="true"></i>
                    <p class="counter">563</p>
                    <h3>Xe Cấp Cứu</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                    <p class="counter">245</p>
                    <h3>Bình Phục</h3>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //stats -->
@endsection
