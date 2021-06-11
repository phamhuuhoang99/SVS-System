@extends("templates.lighting.master")
@section('title','Lighting')
@section('content')
<div class="slider">
    <div class="callbacks_container">
        <ul class="rslides" id="slider">
            <li>
                <div class="banner1">
                    <div class="banner-info">
                        <h3>Lắp đặt đèn cao cấp cho không gian của bạn thêm hoàn mỹ.</h3>
                        <p>Nội thất của một căn phòng sẽ trở nên lung linh hơn nếu sở hữu một chiếc đèn chùm trang trí tinh tế, sang trọng.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner2">
                    <div class="banner-info">
                        <h3>Lắp đặt đèn cao cấp cho không gian của bạn thêm hoàn mỹ.</h3>
                        <p>Nội thất của một căn phòng sẽ trở nên lung linh hơn nếu sở hữu một chiếc đèn chùm trang trí tinh tế, sang trọng.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner3">
                    <div class="banner-info">
                        <h3>Lắp đặt đèn cao cấp cho không gian của bạn thêm hoàn mỹ.</h3>
                        <p>Nội thất của một căn phòng sẽ trở nên lung linh hơn nếu sở hữu một chiếc đèn chùm trang trí tinh tế, sang trọng.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!---->

<div class="items">
    <div class="container">
        <div class="items-sec">
            <div class="col-md-3 feature-grid">
                <a href={{ route("temp.lighting.product") }}><img src={{ asset("templates/lighting/images/img1.jpg") }} alt="" />
                    <div class="arrival-info">
                        <h4>Lighting #1</h4>
                        <p>đ120.000</p>
                        <span class="pric1"><del>đ180.000</del></span>
                        <span class="disc">[Giảm 12%]</span>
                    </div>
                    <div class="viw">
                        <a href={{ route("temp.lighting.product") }}><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Xem</a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 feature-grid">
                <a href={{ route("temp.lighting.product") }}><img src={{ asset("templates/lighting/images/img2.jpg") }} alt="" />
                    <div class="arrival-info">
                        <h4>Lighting #1</h4>
                        <p>đ100.000</p>
                        <span class="pric1"><del>đ140.000</del></span>
                        <span class="disc">[Giảm 14%]</span>
                    </div>
                    <div class="viw">
                        <a href={{ route("temp.lighting.product") }}><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Xem</a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 feature-grid">
                <a href={{ route("temp.lighting.product") }}><img src={{ asset("templates/lighting/images/img3.jpg") }} alt="" />
                    <div class="arrival-info">
                        <h4>Lighting #1</h4>
                        <p>đ85.000</p>
                        <span class="pric1"><del>đ95.000</del></span>
                        <span class="disc">[Giảm 10%]</span>
                    </div>
                    <div class="viw">
                        <a href={{ route("temp.lighting.product") }}><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Xem</a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 feature-grid">
                <a href={{ route("temp.lighting.product") }}><img src={{ asset("templates/lighting/images/img4.jpg") }} alt="" />
                    <div class="arrival-info">
                        <h4>Lighting #1</h4>
                        <p>đ120.000</p>
                        <span class="pric1"><del>đ180.000</del></span>
                        <span class="disc">[Giảm 12%]</span>
                    </div>
                    <div class="viw">
                        <a href={{ route("temp.lighting.product") }}><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Xem</a>
                    </div>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="items-sec btm-sec">
            <div class="col-md-3 feature-grid">
                <a href={{ route("temp.lighting.product") }}><img src={{ asset("templates/lighting/images/img5.jpg") }} alt="" />
                    <div class="arrival-info">
                        <h4>Lighting #1</h4>
                        <p>đ50.000</p>
                        <span class="pric1"><del>đ65.000</del></span>
                        <span class="disc">[Giảm 8%]</span>
                    </div>
                    <div class="viw">
                        <a href={{ route("temp.lighting.product") }}><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Xem</a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 feature-grid">
                <a href={{ route("temp.lighting.product") }}><img src={{ asset("templates/lighting/images/img8.jpg") }} alt="" />
                    <div class="arrival-info">
                        <h4>Lighting #1</h4>
                        <p>đ40.000</p>
                        <span class="pric1"><del>đ75.000</del></span>
                        <span class="disc">[Giảm 12%]</span>
                    </div>
                    <div class="viw">
                        <a href={{ route("temp.lighting.product") }}><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Xem</a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 feature-grid">
                <a href={{ route("temp.lighting.product") }}><img src={{ asset("templates/lighting/images/img7.jpg") }} alt="" />
                    <div class="arrival-info">
                        <h4>Lighting #1</h4>
                        <p>đ80.000</p>
                        <span class="pric1"><del>đ120.000</del></span>
                        <span class="disc">[Giảm 12%]</span>
                    </div>
                    <div class="viw">
                        <a href={{ route("temp.lighting.product") }}><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Xem</a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 feature-grid">
                <a href={{ route("temp.lighting.product") }}><img src={{ asset("templates/lighting/images/img6.jpg") }} alt="" />
                    <div class="arrival-info">
                        <h4>Lighting #1</h4>
                        <p>đ60.000</p>
                        <span class="pric1"><del>đ120.000</del></span>
                        <span class="disc">[Giảm 50%]</span>
                    </div>
                    <div class="viw">
                        <a href={{ route("temp.lighting.product") }}><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Xem</a>
                    </div>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<div class="offers">
    <div class="container">
        <h3>Giảm Giá Cuối Mùa</h3>
        <div class="offer-grids">
            <div class="col-md-6 grid-left">
                <a href="#">
                    <div class="offer-grid1">
                        <div class="ofr-pic">
                            <img src={{ asset("templates/lighting/images/ofr2.jpeg")}} class="img-responsive" alt="" />
                        </div>
                        <div class="ofr-pic-info">
                            <h4>Đèn Bàn <br>& Đèn Chùm</h4>
                            <span>GIẢM TỚI 60% </span>
                            <p>Mua Ngay</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 grid-right">
                <a href="#">
                    <div class="offer-grid2">
                        <div class="ofr-pic-info2">
                            <h4>Ưu Đãi Đặc Biệt</h4>
                            <span>GIẢM TỚI 30%</span>
                            <h5>Đèn Hiện Đại</h5>
                            <p>Mua Ngay</p>
                        </div>
                        <div class="ofr-pic2">
                            <img src={{ asset("templates/lighting/images/ofr3.jpg") }} class="img-responsive" alt="" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
@endsection