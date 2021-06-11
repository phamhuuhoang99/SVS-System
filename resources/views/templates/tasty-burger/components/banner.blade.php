<!-- banner -->
<div class="baneer-w3ls">
    <div class="row no-gutters">
        <div class="col-xl-5 col-lg-6">
            <div class="banner-left-w3">
                <div class="container">
                    <div class="banner-info_agile_w3ls">
                        <h5>Những chiếc Burgers thơm ngon nhất</h5>
                        <h3 class="text-da mb-4">Burger <span>nướng thập cẩm</span> </h3>
                        <p>Mang đến cho bạn những hương vị khó quên</p>
                        <a href={{ URL::route("temp.tasty-burger.about") }} class="button-w3ls active mt-5">
                            Tìm hiểu thêm
                            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                        </a>
                        <a href={{ URL::route("temp.tasty-burger.menu") }} class="button-w3ls mt-5 ml-2">
                            Đặt hàng ngay
                            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-7 col-lg-6 callbacks_container">
            <!-- banner slider -->
            <div class="csslider infinity" id="slider1">
                <input type="radio" name="slides" checked="checked" id="slides_1" />
                <input type="radio" name="slides" id="slides_2" />
                <input type="radio" name="slides" id="slides_3" />
                <ul class="banner_slide_bg">
                    <li>
                        <div class="banner-top1"></div>
                    </li>
                    <li>
                        <div class="banner-top2"></div>
                    </li>
                    <li>
                        <div class="banner-top3"></div>
                    </li>
                </ul>
                <div class="arrows">
                    <label for="slides_1"></label>
                    <label for="slides_2"></label>
                    <label for="slides_3"></label>
                </div>
                <div class="navigation">
                    <div>
                        <label for="slides_1"></label>
                        <label for="slides_2"></label>
                        <label for="slides_3"></label>
                    </div>
                </div>
            </div>
            <!-- //banner slider -->
        </div>
    </div>
</div>
<!-- //banner -->
<div class="clearfix"></div>