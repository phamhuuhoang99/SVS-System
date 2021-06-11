@extends('templates.fashion-hub.master')
@section('title','Trung tâm thời trang thương mại điện tử trực tuyến')
@section('content')
<div class="banner-text">
    <div class="callbacks_container">
        <ul class="rslides" id="slider3">
            <li class="banner">
                <div class="container">
                    <h3 class="agile_btxt">
                        <span>f</span>ashion
                        <span>h</span>ub
                    </h3>
                    <h4 class="w3_bbot">shop độc quyền thời trang</h4>
                    <div class="slider-info mt-sm-5">
                        <h4 class="bn_right">
                            <span>T</span>hời
                            <span>T</span>rang
                            <span>N</span>ữ</h4>
                        <div class="bnr_clip position-relative">
                            <h4>ưu đãi
                                <span class="px-2">45% </span>
                            </h4>
                            <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                <div class="bg-flex-item">
                                    <span>O</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F
                                    </span>
                                </div>
                            </div>
                            <p class="text-uppercase py-2">bán chạy nhất</p>
                            <a class="btn btn-primary mt-3 text-capitalize" href={{ route("temp.fashion-hub.shop") }} role="button">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="banner banner2">
                <div class="container">
                    <h3 class="agile_btxt">
                        <span>f</span>ashion
                        <span>h</span>ub
                    </h3>
                    <h4 class="w3_bbot">shop exclusive clothing</h4>
                    <div class="slider-info mt-sm-5">
                        <h4 class="bn_right">
                            <span>T</span>hời
                            <span>T</span>rang
                            <span>N</span>am</h4>
                        <div class="bnr_clip position-relative">
                            <h4>ưu đãi
                                <span class="px-2">35% </span>
                            </h4>
                            <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                <div class="bg-flex-item">
                                    <span>O</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F
                                    </span>
                                </div>
                            </div>
                            <p class="text-uppercase py-2">bán chạy nhất</p>
                            <a class="btn btn-primary mt-3 text-capitalize" href={{ route("temp.fashion-hub.shop") }} role="button">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="banner banner3">
                <div class="container">
                    <h3 class="agile_btxt">
                        <span>f</span>ashion
                        <span>h</span>ub
                    </h3>
                    <h4 class="w3_bbot">shop exclusive clothing</h4>
                    <div class="slider-info mt-sm-5">
                        <h4 class="bn_right">
                            <span>T</span>hời
                            <span>T</span>rang
                            <span>T</span>rẻ
                            <span>E</span>m</h4>
                        <div class="bnr_clip position-relative">
                            <h4>ưu đãi
                                <span class="px-2">45% </span>
                            </h4>
                            <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                <div class="bg-flex-item">
                                    <span>O</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F
                                    </span>
                                </div>
                            </div>
                            <p class="text-uppercase py-2">bán chạy nhất</p>
                            <a class="btn btn-primary mt-3 text-capitalize" href={{ route("temp.fashion-hub.shop") }} role="button">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- //banner -->
<!--services-->
@include('templates.fashion-hub.sectionabout')
@endsection
