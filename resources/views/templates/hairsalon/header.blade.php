
@if (Route::currentRouteName() == 'temp.hairsalon.index')

    <!--/banner-section-->
    <div id="demo-1" data-zs-src='["{{ asset("templates/hairsalon/images/2.jpg") }}", "{{ asset("templates/hairsalon/images/1.jpg") }}", "{{ asset("templates/hairsalon/images/3.jpg") }}"]' data-zs-overlay="dots">
        <div class="demo-inner-content">
            <!--/header-w3l-->
            @include('templates.hairsalon.banner')
            <!--/banner-info-->
            <div class="baner-info">
                <h3>Chào <span>Mừng </span>Đến <span>Hair </span>Salon</h3>
                <h4>The Stylish Beard Shaved.</h4>
                <a class="w3_play_icon1" href="#small-dialog1">Xem thêm</a>
            </div>
            <!--/banner-ingo-->
        </div>
    </div>
    <!--/banner-section-->
@else
    <div id="demo-1" class="banner-inner">
        @include('templates.hairsalon.banner')
    </div>
@endif
