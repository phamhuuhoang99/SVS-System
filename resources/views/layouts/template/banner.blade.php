<section class="section sectionBanner_watch">
    <div class="container-fluid container-widthAuto">
        <div class="mainBanner-container bkgcolor_1">
            <div class="flex-mainBanner-haraweb">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 flipInY wow animated pd-left-0">
                    <div class="mainBanner-infor">
                        <h1><span>Thiết Kế Website</span>
                            {{$data['text']}} Chuyên Nghiệp</h1>
                        <h4 class="line-height-30 text-align-justify" style="padding-top:20px;">
                            SVS giúp bạn sở hữu website kinh doanh {{$data['text']}} với giao diện đẹp mắt, chuẩn SEO.
                            Quảng cáo đa kênh hiệu quả trên Google, Facebook và quản lý dễ dàng
                        </h4>
                        <div class="groupForm-hrweb">
                            <div class="groupForm-inline">
                                <a class="btn input-account--button  hrv-btnv2-register  btn-hover-vertical" href="{{route('register')}}">Dùng thử miễn phí</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 flexItem_Image pd-right-0">
                    <div class="mainBanner-image">
                        <div class="wrap-blockImage">
                            <div class="owlSlider_banner owl-carousel owl-theme owl-loaded" id="owlSlider_banner_watch">
                        <img class="cus-owl-lazy" src="{{$data['img_mainbanner']}}" alt="Thiết Kế Website {{$data['text']}} Chuyên Nghiệp" style="opacity: 1;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>