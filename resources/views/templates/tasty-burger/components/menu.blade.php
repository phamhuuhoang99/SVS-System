<!-- banner -->
<div class="main-banner-2">

</div>
<!-- //banner -->

<!-- page details -->
<div class="breadcrumb-agile bg-light py-2">
    <ol class="breadcrumb bg-light m-0">
        <li class="breadcrumb-item">
            <a href={{ URL::route("temp.tasty-burger.index") }}>Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Thực đơn</li>
    </ol>
</div>
<!-- //page details -->

<!-- menu -->
<section class="portfolio py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-section text-center mb-md-5 mb-4">
            <h3 class="w3ls-title mb-3"><span>Thực đơn</span></h3>
            <p class="titile-para-text mx-auto">
                Đây là những sản phẩm bán chạy nhất của chúng tôi
            </p>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="gallery-demo">
                    <a href="#gal1">
                        <img src={{ URL::asset("templates/tasty-burger/images/blog1.jpg") }} alt=" " class="img-fluid" />
                        <h4 class="p-mask">Burger Pháp - <span>49.000 VNĐ</span></h4>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="gallery-demo">
                    <a href="#gal2">
                        <img src={{ URL::asset("templates/tasty-burger/images/blog2.jpg") }} alt=" " class="img-fluid" />
                        <h4 class="p-mask">Burger bò Teriyaki - <span>59.000 VNĐ</span></h4>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="gallery-demo">
                    <a href="#gal3">
                        <img src={{ URL::asset("templates/tasty-burger/images/blog3.jpg") }} alt=" " class="img-fluid" />
                        <h4 class="p-mask">Burger 2 tầng - <span>79.000 VNĐ</span></h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-md-5">
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="gallery-demo">
                    <a href="#gal4">
                        <img src={{ URL::asset("templates/tasty-burger/images/g1.jpg") }} alt=" " class="img-fluid" />
                        <h4 class="p-mask">Burger phô mai - <span>49.000 VNĐ</span></h4>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="gallery-demo">
                    <a href="#gal5">
                        <img src={{ URL::asset("templates/tasty-burger/images/g2.jpg") }} alt=" " class="img-fluid" />
                        <h4 class="p-mask">Burger gà - <span>44.000 VNĐ</span></h4>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="gallery-demo">
                    <a href="#gal6">
                        <img src={{ URL::asset("templates/tasty-burger/images/g3.jpg") }} alt=" " class="img-fluid" />
                        <h4 class="p-mask">Burger cỡ lớn - <span>69.000 VNĐ</span></h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- gallery model-->
<!-- gallery popup 1 -->
<div id="gal1" class="pop-overlay">
    <div class="popup">
        <img class="img-fluid" src={{ URL::asset("templates/tasty-burger/images/blog1.jpg") }} alt="">
        <h4 class="p-mask">Burger Pháp - <span>49.000 VNĐ</span></h4>
        <a href={{ URL::route("temp.tasty-burger.login") }} class="button-w3ls active mt-3">
            Đặt ngay <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
        </a>
        <a class="close" href="#gallery">×</a>
    </div>
</div>
<!-- //gallery popup 1 -->
<!-- gallery popup 2 -->
<div id="gal2" class="pop-overlay">
    <div class="popup">
        <img class="img-fluid" src={{ URL::asset("templates/tasty-burger/images/blog2.jpg") }} alt="">
        <h4 class="p-mask">Burger bò Teriyaki - <span>59.000 VNĐ</span></h4>
        <a href={{ URL::route("temp.tasty-burger.login") }} class="button-w3ls active mt-3">
            Đặt ngay <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
        </a>
        <a class="close" href="#gallery">×</a>
    </div>
</div>
<!-- //gallery popup 2 -->
<!-- gallery popup 3 -->
<div id="gal3" class="pop-overlay">
    <div class="popup">
        <img class="img-fluid" src={{ URL::asset("templates/tasty-burger/images/blog3.jpg") }} alt="">
        <h4 class="p-mask">Burger 2 tầng - <span>79.000 VNĐ</span></h4>
        <a href={{ URL::route("temp.tasty-burger.login") }} class="button-w3ls active mt-3">
            Đặt ngay <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
        </a>
        <a class="close" href="#gallery">×</a>
    </div>
</div>
<!-- //gallery popup 3 -->
<!-- gallery popup 4 -->
<div id="gal4" class="pop-overlay">
    <div class="popup">
        <img class="img-fluid" src={{ URL::asset("templates/tasty-burger/images/g1.jpg") }} alt="">
        <h4 class="p-mask">Burger phô mai - <span>49.000 VNĐ</span></h4>
        <a href={{ URL::route("temp.tasty-burger.login") }} class="button-w3ls active mt-3">
            Đặt ngay <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
        </a>
        <a class="close" href="#gallery">×</a>
    </div>
</div>
<!-- //gallery popup 4 -->
<!-- gallery popup 5 -->
<div id="gal5" class="pop-overlay">
    <div class="popup">
        <img class="img-fluid" src={{ URL::asset("templates/tasty-burger/images/g2.jpg") }} alt="">
        <h4 class="p-mask">Chicken gà - <span>44.000 VNĐ</span></h4>
        <a href={{ URL::route("temp.tasty-burger.login") }} class="button-w3ls active mt-3">
            Đặt ngay <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
        </a>
        <a class="close" href="#gallery">×</a>
    </div>
</div>
<!-- //gallery popup 5 -->
<!-- gallery popup 6 -->
<div id="gal6" class="pop-overlay">
    <div class="popup">
        <img class="img-fluid" src={{ URL::asset("templates/tasty-burger/images/g3.jpg") }} alt="">
        <h4 class="p-mask">Burger cỡ lớn - <span>69.000 VNĐ</span></h4>
        <a href={{ URL::route("temp.tasty-burger.login") }} class="button-w3ls active mt-3">
            Đặt ngay <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
        </a>
        <a class="close" href="#gallery">×</a>
    </div>
</div>
<!-- //gallery popup 6 -->
<!-- //menu -->