@extends("templates.lighting.master")
@section('title','Lighting')
@section('content')
<div class="product">
    <div class="container">
        <div class="product-price1">
            <div class="top-sing">
                <div class="col-md-7 single-top">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb={{ asset("templates/lighting/images/si.jpg") }}>
                                <div class="thumb-image"> <img src={{ asset("templates/lighting/images/si.jpg") }} data-imagezoom="true" class="img-responsive" alt="" /> </div>
                            </li>
                            <li data-thumb={{ asset("templates/lighting/images/si2.jpg") }}>
                                <div class="thumb-image"> <img src={{ asset("templates/lighting/images/si2.jpg") }} data-imagezoom="true" class="img-responsive" alt="" /> </div>
                            </li>
                            <li data-thumb={{ asset("templates/lighting/images/si3.jpg") }}>
                                <div class="thumb-image"> <img src={{ asset("templates/lighting/images/si3.jpg") }} data-imagezoom="true" class="img-responsive" alt="" /> </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 single-top-in simpleCart_shelfItem">
                    <div class="single-para ">
                        <h4>Đèn tường trang trí</h4>
                        <h5 class="item_price"> 500.000đ</h5>
                        <p class="para">Để có một không gian sống hoàn hảo thì bên cạnh chăm chú về nội thất, các gia chủ cũng cần phải đầu tư vào ngoại thất bên ngoài sao cho hài hòa </p>
                        <div class="prdt-info-grid">
                            <ul>
                                <li>- Xuất xứ : Nhập khẩu</li>
                                <li>- Kích thước : L370 x W190 x H380mm</li>
                                <li>- Color : Nâu</li>
                                <li>- Chât liệu : Đồng</li>
                            </ul>
                        </div>
                        <div class="check">
                            <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Nhập mã pin để giao hàng và tình trạng hàng</p>
                            <form class="navbar-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nhập code">
                                </div>
                                <button type="submit" class="btn btn-default">Kiểm tra</button>
                            </form>
                        </div>
                        <a href="#" class="add-cart item_add">THÊM VÀO GIỎ</a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="bottom-prdt">
            <div class="btm-grid-sec">
                <div class="col-md-2 btm-grid">
                    <a href={{ route("temp.lighting.product") }}>
                        <img src={{ asset("templates/lighting/images/p3.jpg") }} alt="" />
                        <h4>Product#1</h4>
                        <span>1.200.000đ</span></a>
                </div>
                <div class="col-md-2 btm-grid">
                    <a href={{ route("temp.lighting.product") }}>
                        <img src={{ asset("templates/lighting/images/p10.jpg") }} alt="" />
                        <h4>Product#1</h4>
                        <span>700.000đ</span></a>
                </div>
                <div class="col-md-2 btm-grid">
                    <a href={{ route("temp.lighting.product") }}>
                        <img src={{ asset("templates/lighting/images/p5.jpg") }} alt="" />
                        <h4>Product#1</h4>
                        <span>1.300.000đ</span></a>
                </div>
                <div class="col-md-2 btm-grid">
                    <a href={{ route("temp.lighting.product") }}>
                        <img src={{ asset("templates/lighting/images/p4.jpg") }} alt="" />
                        <h4>Product#1</h4>
                        <span>900.000đ</span></a>
                </div>
                <div class="col-md-2 btm-grid">
                    <a href={{ route("temp.lighting.product") }}>
                        <img src={{ asset("templates/lighting/images/p2.jpg") }} alt="" />
                        <h4>Product#1</h4>
                        <span>450.000đ</span></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
@endsection