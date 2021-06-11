@extends('templates.dental-health.master')
@section('title', 'Dental Health')
@section('content')
    <!-- banner -->
    <div class="innerpage-banner" id="home">
        <div class="inner-page-layer">
        </div>
    </div>
    <!-- //banner -->

    @include('templates.dental-health.sectionabout')

    <!-- Doctors -->
    <section class="trainers pt-5">
        <div class="container py-md-3">
            <h3 class="heading text-center mb-5">Đội Ngũ Bác Sĩ </h3>
            <div class="row team_grids mt-5">
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="{{ asset('templates/detal-health/images/t1.jpg') }}" alt="team member"
                                class="img-fluid">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4>Chuyên gia chỉnh nha</h4>
                                {{--  <p>estibulum ac diam sit amet quam.</p>  --}}
                            </div>
                            <div class="s-link">
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title">
                        <h5>Charlotte Olivia</h5>
                        <span>Bác Sĩ Nha Khoa</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="{{ asset('templates/detal-health/images/t2.jpg') }}" alt="team member"
                                class="img-fluid">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4>Chuyên gia Invisalign</h4>
                                {{--  <p>estibulum ac diam sit amet quam.</p>  --}}
                            </div>
                            <div class="s-link">
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title">
                        <h5>Mathew Elijah</h5>
                        <span>Bác Sĩ Nha Khoa</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mx-auto mb-5">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="{{ asset('templates/detal-health/images/t3.jpg') }}" alt="team member"
                                class="img-fluid">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4>Bác sĩ chuyên khoa Răng Hàm Mặt</h4>
                                {{--  <p>estibulum ac diam sit amet quam.</p>  --}}
                            </div>
                            <div class="s-link">
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title">
                        <h5>Alexander Lucas</h5>
                        <span>Bác Sĩ Nha Khoa</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mx-auto mb-5">
                    <div class="team-member">
                        <div class="team-img">
                            <img src="{{ asset('templates/detal-health/images/t4.jpg') }}" alt="team member"
                                class="img-fluid">
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4>Chuyên gia chỉnh nha</h4>
                                {{--  <p>estibulum ac diam sit amet quam.</p>  --}}
                            </div>
                            <div class="s-link">
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team-title">
                        <h5>Linda Anderson</h5>
                        <span>Bác Sĩ Nha Khoa</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Doctors -->

    @include('templates.dental-health.appointment')

@endsection
