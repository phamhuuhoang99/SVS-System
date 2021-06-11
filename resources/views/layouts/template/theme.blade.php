<section class="section section_mainThemes bounceIn wow delay-02s animated">
    <div class="container-fluid container-widthAuto">
        <div class="groupTitle text-center">
            <h2>Nhiều giao diện website đẹp <br>dành riêng cho ngành hàng {{$data['text']}}</h2>
        </div>
        <div class="row wrapbox-industry-themes">
            @include('layouts.template.item',['img'=>$data['img_maintheme1'],'sub'=>$data['sub1'],'hrefreal'=>$data['href1']])
            @include('layouts.template.item',['img'=>$data['img_maintheme2'],'sub'=>$data['sub2'],'hrefreal'=>$data['href2']])
            @include('layouts.template.item',['img'=>$data['img_maintheme3'],'sub'=>$data['sub3'],'hrefreal'=>$data['href3']])
            @include('layouts.template.item',['img'=>$data['img_maintheme4'],'sub'=>$data['sub4'],'hrefreal'=>$data['href4']])
            {{--  <div class="product-theme-item col-md-3 col-sm-3 col-xs-6 theme-item-hrweb">
                <a class="hrweb-block" href={{ URL::asset($data['href1']) }} target="_blank" rel="nofollow">
                    <div class="hrweb-image">
                        <img class=" ls-is-cached lazyloaded" src="{{$data['img_maintheme1']}}" alt="{{$data['sub1']}}" style="height: 400px">
                        <span class="more-web"><label>Xem chi tiết</label></span>
                    </div>
                    <h4 class="line-height-30 text-align-justify">{{$data['sub1']}}</h4>
                </a>
            </div>  --}}
            {{--  <div class="col-md-3 col-sm-3 col-xs-6 theme-item-hrweb">
                <a class="hrweb-block" href={{ URL::asset($data['href2']) }} target="_blank" rel="nofollow">
                    <div class="hrweb-image">
                        <img class=" ls-is-cached lazyloaded" src="{{$data['img_maintheme2']}}" alt="{{$data['sub2']}}" style="height: 400px">
                        <span class="more-web"><label>Xem chi tiết</label></span>
                    </div>
                    <h4 class="line-height-30 text-align-justify">{{$data['sub2']}}</h4>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 theme-item-hrweb">
                <a class="hrweb-block" href={{ URL::asset($data['href3']) }} target="_blank" rel="nofollow">
                    <div class="hrweb-image">
                        <img class=" ls-is-cached lazyloaded" src="{{$data['img_maintheme3']}}" alt="{{$data['sub3']}}" style="height: 400px">
                        <span class="more-web"><label>Xem chi tiết</label></span>
                    </div>
                    <h4 class="line-height-30 text-align-justify">{{$data['sub3']}}</h4>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 theme-item-hrweb">
                <a class="hrweb-block" href={{ URL::asset($data['href4']) }} target="_blank" rel="nofollow">
                    <div class="hrweb-image">
                        <img class=" ls-is-cached lazyloaded" src={{$data['img_maintheme4']}} alt="{{$data['sub4']}}" style="height: 400px">
                        <span class="more-web"><label>Xem chi tiết</label></span>
                    </div>
                    <h4 class="line-height-30 text-align-justify">{{$data['sub4']}}</h4>
                </a>
            </div>  --}}
        </div>
        <div class="row wrapbox-industry-button">
            <div class="col-md-12 text-center">
                <a class="btn-themestore" href={{route("themes")}}>
                    Xem thêm giao diện
                </a>
            </div>
        </div>
    </div>
</section>