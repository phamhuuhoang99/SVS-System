@extends('templates.auto-car.master')
@section('title', 'Auto Car')
@section('content')
    <!-- Main -->
    <!-- Gallery -->
    <div class="gallery">
        <div class="container">
            <h2>Bộ Sưu Tập</h2>
            <div class="wthree_gallery_grids">
                <div id="jzBox" class="jzBox">
                    <div id="jzBoxNextBig"></div>
                    <div id="jzBoxPrevBig"></div>
                    <img src="#" id="jzBoxTargetImg" alt=" " />
                    <div id="jzBoxBottom">
                        <div id="jzBoxTitle"></div>
                        <div id="jzBoxMoreItems">
                            <div id="jzBoxCounter"></div>
                            <i class="arrow-left" id="jzBoxPrev"></i>
                            <i class="arrow-right" id="jzBoxNext"></i>
                        </div>
                        <i class="close" id="jzBoxClose"></i>
                    </div>
                </div>
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <div class="tab_img">
                                <div class="col-md-3 agile_gallery_grids">

                                    <div class="view view-sixth">
                                        <img src="{{ asset('templates/auto-car/images/1.jpg') }}" alt=" "
                                            class="img-responsive" />
                                        <div class="mask">
                                            <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3 agile_gallery_grids">

                                    <div class="view view-sixth">
                                        <img src="{{ asset('templates/auto-car/images/7.jpg') }}" alt=" "
                                            class="img-responsive" />
                                        <div class="mask">
                                            <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3 agile_gallery_grids">

                                    <div class="view view-sixth">
                                        <img src="{{ asset('templates/auto-car/images/3.jpg') }}" alt=" "
                                            class="img-responsive" />
                                        <div class="mask">
                                            <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3 agile_gallery_grids">
                                    <div class="view view-sixth">
                                        <img src="{{ asset('templates/auto-car/images/4.jpg') }}" alt=" "
                                            class="img-responsive" />
                                        <div class="mask">
                                            <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_img">
                                <div class="col-md-3 agile_gallery_grids">
                                    <div class="view view-sixth">
                                        <img src="{{ asset('templates/auto-car/images/4.jpg') }}" alt=" "
                                            class="img-responsive" />
                                        <div class="mask">
                                            <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 agile_gallery_grids">
                                    <a href="{{ asset('templates/auto-car/images/8.jpg') }}" class="jzBoxLink"
                                        title="Auto Car">
                                        <div class="view view-sixth">
                                            <img src="{{ asset('templates/auto-car/images/8.jpg') }}" alt=" "
                                                class="img-responsive" />
                                            <div class="mask">
                                                <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 agile_gallery_grids">
                                    <a href="{{ asset('templates/auto-car/images/5.jpg') }}" class="jzBoxLink"
                                        title="Auto Car">
                                        <div class="view view-sixth">
                                            <img src="{{ asset('templates/auto-car/images/5.jpg') }}" alt=" "
                                                class="img-responsive" />
                                            <div class="mask">
                                                <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 agile_gallery_grids">
                                    <a href="{{ asset('templates/auto-car/images/6.jpg') }}" class="jzBoxLink"
                                        title="Auto Car">
                                        <div class="view view-sixth">
                                            <img src="{{ asset('templates/auto-car/images/6.jpg') }}" alt=" "
                                                class="img-responsive" />
                                            <div class="mask">
                                                <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_img">
                                <div class="col-md-3 agile_gallery_grids">
                                    <a href="{{ asset('templates/auto-car/images/2.jpg') }}" class="jzBoxLink"
                                        title="Auto Car">
                                        <div class="view view-sixth">
                                            <img src="{{ asset('templates/auto-car/images/2.jpg') }}" alt=" "
                                                class="img-responsive" />
                                            <div class="mask">
                                                <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 agile_gallery_grids">
                                    <a href="{{ asset('templates/auto-car/images/9.jpg') }}" class="jzBoxLink"
                                        title="Auto Car">
                                        <div class="view view-sixth">
                                            <img src="{{ asset('templates/auto-car/images/9.jpg') }}" alt=" "
                                                class="img-responsive" />
                                            <div class="mask">
                                                <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 agile_gallery_grids">
                                    <a href="{{ asset('templates/auto-car/images/10.jpg') }}" class="jzBoxLink"
                                        title="Auto Car">
                                        <div class="view view-sixth">
                                            <img src="{{ asset('templates/auto-car/images/10.jpg') }}" alt=" "
                                                class="img-responsive" />
                                            <div class="mask">
                                                <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 agile_gallery_grids">
                                    <a href="{{ asset('templates/auto-car/images/7.jpg') }}" class="jzBoxLink"
                                        title="Auto Car">
                                        <div class="view view-sixth">
                                            <img src="{{ asset('templates/auto-car/images/7.jpg') }}" alt=" "
                                                class="img-responsive" />
                                            <div class="mask">
                                                <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Gallery -->
    <!-- //Main -->
@endsection
