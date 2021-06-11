@extends('templates.auto-show.master')
@section('title', 'Auto Show')
@section('content')
    @include('templates.auto-show.banner')
    <div class="main">
        <div class="container">
            <div class="top_grid" id="arrow">
                <div class="content_top">
                    <div class="col-md-8 col1">
                        <a href="#" class="b-link-stroke b-animate-go  thickbox">
                            <img src="{{ asset('templates/auto-show/images/1.jpg') }}" class="img-responsive" alt="" />
                            <div class="b-wrapper1 long-img">
                                <h2 class="b-animate b-from-left    b-delay03 ">Chuyên gia đường phố</h2>
                                <p class="b-animate b-from-right    b-delay03 ">Công nghệ xe an toàn thông minh vượt trội.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="b-link-stroke b-animate-go  thickbox">
                            <img src="{{ asset('templates/auto-show/images/pic2.jpg') }}" class="img-responsive" alt="" />
                            <div class="b-wrapper1">
                                <h2 class="b-animate b-from-left    b-delay03 ">Đối tác kinh doanh tin cậy</h2>
                                <p class="b-animate b-from-right    b-delay03 ">Thiết kế để chinh phục mọi địa hình.</p>
                            </div>
                        </a>
                        <div class="grid1">
                            <a href="#" class="b-link-stroke b-animate-go  thickbox">
                                <img src="{{ asset('templates/auto-show/images/pic3.jpg') }}" class="img-responsive"
                                    alt="" />
                                <div class="b-wrapper1">
                                    <h2 class="b-animate b-from-left    b-delay03 ">Vạch lối đi riêng</h2>
                                    <p class="b-animate b-from-right    b-delay03 ">Phong cách & Quyến rũ.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="content_middle">
                    <div class="col-md-4 col2">
                        <a href="#" class="b-link-stroke b-animate-go  thickbox">
                            <img src="{{ asset('templates/auto-show/images/pic4.jpg') }}" class="img-responsive" alt="" />
                            <div class=" b-wrapper">
                                <h2 class="b-animate b-from-left    b-delay03 ">Vạch lối đi riêng</h2>
                                <p class="b-animate b-from-right    b-delay03 ">Tự tin & Quyến rũ.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col2">
                        <a href="#" class="b-link-stroke b-animate-go  thickbox">
                            <img src="{{ asset('templates/auto-show/images/pic5.jpg') }}" class="img-responsive" alt="" />
                            <div class=" b-wrapper">
                                <h2 class="b-animate b-from-left    b-delay03 ">Đối tác kinh doanh tin cậy</h2>
                                <p class="b-animate b-from-right    b-delay03 ">Phong cách & năng động.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="b-link-stroke b-animate-go  thickbox">
                            <img src="{{ asset('templates/auto-show/images/pic6.jpg') }}" class="img-responsive" alt="" />
                            <div class=" b-wrapper">
                                <h2 class="b-animate b-from-left    b-delay03 ">Vạch lối đi riêng</h2>
                                <p class="b-animate b-from-right    b-delay03 ">Khẳng định đẳng cấp.</p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="content_middle_bottom">
            <div class="header-left" id="home">
                <section>
                    <ul class="lb-album">
                        <li>
                            <a href="#image-1">
                                <img src="{{ asset('templates/auto-show/images/g1.jpg') }}" class="img-responsive"
                                    alt="image01" />
                                <span>Lựa chọn tuyệt vời cho bạn</span>
                            </a>
                            <div class="lb-overlay" id="image-1">
                                <a href="#page" class="lb-close">x Close</a>
                                <img src="{{ asset('templates/auto-show/images/g1.jpg') }}" class="img-responsive"
                                    alt="image01" />

                            </div>
                        </li>
                        <li>
                            <a href="#image-2">
                                <img src="{{ asset('templates/auto-show/images/g2.jpg') }}" class="img-responsive"
                                    alt="image02" />
                                <span>Lựa chọn tuyệt vời cho bạn</span>
                            </a>
                            <div class="lb-overlay" id="image-2">
                                <img src="{{ asset('templates/auto-show/images/g2.jpg') }}" class="img-responsive"
                                    alt="image02" />

                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-3">
                                <img src="{{ asset('templates/auto-show/images/g3.jpg') }}" class="img-responsive"
                                    alt="image03" />
                                <span>Lựa chọn tuyệt vời cho bạn</span>
                            </a>
                            <div class="lb-overlay" id="image-3">
                                <img src="{{ asset('templates/auto-show/images/g3.jpg') }}" class="img-responsive"
                                    alt="image03" />
                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-4">
                                <img src="{{ asset('templates/auto-show/images/g4.jpg') }}" class="img-responsive"
                                    alt="image04" />
                                <span>Lựa chọn tuyệt vời cho bạn</span>
                            </a>
                            <div class="lb-overlay" id="image-4">
                                <img src="{{ asset('templates/auto-show/images/g4.jpg') }}" class="img-responsive"
                                    alt="image04" />
                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-5">
                                <img src="{{ asset('templates/auto-show/images/g5.jpg') }}" class="img-responsive"
                                    alt="image05" />
                                <span>Lựa chọn tuyệt vời cho bạn</span>
                            </a>
                            <div class="lb-overlay" id="image-5">
                                <img src="{{ asset('templates/auto-show/images/g5.jpg') }}" class="img-responsive"
                                    alt="image05" />
                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-6">
                                <img src="{{ asset('templates/auto-show/images/g6.jpg') }}" class="img-responsive"
                                    alt="image06" />
                                <span>Lựa chọn tuyệt vời cho bạn</span>
                            </a>
                            <div class="lb-overlay" id="image-6">
                                <img src="{{ asset('templates/auto-show/images/g6.jpg') }}" class="img-responsive"
                                    alt="image06" />
                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-7">
                                <img src="{{ asset('templates/auto-show/images/g7.jpg') }}" class="img-responsive"
                                    alt="image07" />
                                <span>Lựa chọn tuyệt vời cho bạn</span>
                            </a>
                            <div class="lb-overlay" id="image-7">
                                <img src="{{ asset('templates/auto-show/images/g7.jpg') }}" class="img-responsive"
                                    alt="image07" />
                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-8">
                                <img src="{{ asset('templates/auto-show/images/g8.jpg') }}" class="img-responsive"
                                    alt="image08" />
                                <span>Lựa chọn tuyệt vời cho bạn</span>
                            </a>
                            <div class="lb-overlay" id="image-8">
                                <img src="{{ asset('templates/auto-show/images/g8.jpg') }}" class="img-responsive"
                                    alt="image08" />
                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                </section>
            </div>
            <div class="field_content">
                <h1>Xe Là Nghệ Thuật</h1>
                <h2>Tôn Vinh Người Lái</h2>
            </div>
        </div>
    </div>
@endsection
