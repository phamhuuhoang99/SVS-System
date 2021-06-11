@extends('templates.downyshoes.master')
@section('title','Downy Shoes')
@section('content')
<!-- banner -->
<div class="banner_top" id="home">
    <div class="wrapper_top_w3layouts">
        <!-- /slider -->
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides callbacks callbacks1" id="slider4">

                    <li>
                        <div class="banner-top2">
                            <div class="banner-info-wthree">
                                <h3>Nike</h3>
                                <p>Đồng hành mọi nẻo đường</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner-top3">
                            <div class="banner-info-wthree">
                                <h3>Heels</h3>
                                <p>Khám phá khắp mọi nơi</p>

                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="banner-top">
                            <div class="banner-info-wthree">
                                <h3>Sneakers</h3>
                                <p>Mang và cảm nhận chất lượng</p>

                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="banner-top1">
                            <div class="banner-info-wthree">
                                <h3>Adidas</h3>
                                <p>Đồng hành mọi nẻo đường</p>

                            </div>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //slider -->
        <ul class="top_icons">
            <li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
            <li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
            <li><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>

        </ul>
    </div>
</div>
<!-- //banner -->
<!-- /girds_bottom-->
<div class="grids_bottom">
    <div class="style-grids">
        <div class="col-md-6 style-grid style-grid-1">
            <img src={{ asset("templates/downyshoes/img/b1.jpg") }} alt="shoe">
        </div>
    </div>
    <div class="col-md-6 style-grid style-grid-2">
        <div class="style-image-1_info">
            <div class="style-grid-2-text_info">
                <h3>Nike DOWNSHIFTER</h3>
                <p>Nike là một thương hiệu giày thời trang thể thao hàng đầu thế giới, với thiết kế trẻ trung năng động và cá tính chắc chắn sẽ làm bạn hài lòng.</p>
                <div class="shop-button">
                    <a href={{ route("temp.downyshoes.shop") }}>Mua Ngay</a>
                </div>
            </div>
        </div>
        <div class="style-image-2">
            <img src={{ asset("templates/downyshoes/img/b2.jpg") }} alt="shoe">
            <div class="style-grid-2-text">
                <h3>Air force</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
</div>
<!-- //grids_bottom-->
<!-- /girds_bottom2-->
<div class="grids_sec_2">
    <div class="style-grids_main">
        <div class="col-md-6 grids_sec_2_left">
            <div class="grid_sec_info">
                <div class="style-grid-2-text_info">
                    <h3>Sneakers</h3>
                    <p>Với tần suất dày đặc, sneaker không còn là một trào lưu trong giới trẻ mà chúng dần trở thành nền văn hóa mở cho những người năng động, ưa thích khám phá.</p>
                    <div class="shop-button">
                        <a href={{ route("temp.downyshoes.shop") }}>Mua Ngay</a>
                    </div>
                </div>
            </div>
            <div class="style-image-2">
                <img src={{ asset("templates/downyshoes/img/b4.jpg") }} alt="shoe">
                <div class="style-grid-2-text">
                    <h3>Air force</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 grids_sec_2_left">

            <div class="style-image-2">
                <img src={{ asset("templates/downyshoes/img/b3.jpg") }} alt="shoe">
                <div class="style-grid-2-text">
                    <h3>Air force</h3>
                </div>
            </div>
            <div class="grid_sec_info last">
                <div class="style-grid-2-text_info">
                    <h3>Sneakers</h3>
                    <p> kiểu dáng năng động, thiết kế trẻ trung kết hợp màu sắc nổi bật, giúp người mang tự tin thể hiện phong cách thời trang cũng như cá tính của mình.</p>
                    <div class="shop-button two">
                        <a href={{ route('temp.downyshoes.shop') }}>Mua Ngay</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //grids_bottom2-->
<!-- /Properties -->
@include('templates.downyshoes.anotherexam')
@endsection
