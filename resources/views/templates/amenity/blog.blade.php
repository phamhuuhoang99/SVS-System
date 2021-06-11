@extends('templates.amenity.master')
@section('title', 'Amenity')
@section('content')
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">
            <ul class="short_ls">
                <li>
                    <a href={{route("temp.amenity.index") }}>Trang Chủ</a>
                    <span>| |</span>
                </li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <h3 class="tittle-w3layouts">Blog</h3>
            <div class="blog-left">
            </div>
            <div class="blog-right">
                <h4 class="sub-hdng">Mọi người đều mong muốn có đồ nội thất đẹp tại nhà hay văn phòng!.</h4>
                <p class="paragraph-w3-agile">Cung cấp dịch vụ thiết kế nội thất, bạn sẽ cảm nhận được sự tinh tế của công trình, nét thẩm mỹ tinh tế và các giải pháp tối ưu cho không gian nội thất.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 blog-left-grid">
            <div class="blog-inner">
                <h4 class="sub-hdng">
                    <a href="#" data-toggle="modal" data-target="#myModal2">Sắp xếp đồ đạc tại nhà</a>
                </h4>
                <p class="paragraph-w3-agile">Cung cấp dịch vụ thi công đồ gỗ nội thất, mang đến những sản phẩm đạt chất lượng cao, thẩm mỹ tinh tế, đảm bảo tiến độ và dịch vụ sau bán hàng và bảo hành tốt nhất.</p>
                <div class="readmore-button">
                    <a class="readmore" href="#" data-toggle="modal" data-target="#myModal2">Xem Thêm</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-inner-img1">

            </div>
        </div>
        <div class="col-md-3 blog-right-grid">
            <div class="blog-inner-img2">

            </div>
            <div class="blog-inner dark">
                <h4 class="sub-hdng">
                    <a href="#" data-toggle="modal" data-target="#myModal3">Đồ nội thất ngoài trời Teak và tại sao nó lại thú vị như vậy</a>
                </h4>
                <p class="paragraph-w3-agile">Cung cấp thiết bị nhà bếp, phụ kiện hoàn thiện đồ gỗ nội thất hàng đầu trên thế giới cam kết sẽ mang lại cho ngôi nhà bạn những tiện ích, chất lượng, đẳng cấp quốc tế.</p>
                <div class="readmore-button">
                    <a class="readmore" href="#" data-toggle="modal" data-target="#myModal3">Xem Thêm</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 blog-left-grid">
            <div class="blog-inner">
                <h4 class="sub-hdng">
                    <a href="#" data-toggle="modal" data-target="#myModal4">Cách đánh giá Đồ cổ chất lượng</a>
                </h4>
                <p class="paragraph-w3-agile">Cung cấp dịch vụ thiết kế nội thất, bạn sẽ cảm nhận được sự tinh tế của công trình, nét thẩm mỹ tinh tế và các giải pháp tối ưu cho không gian nội thất.</p>
                <div class="readmore-button">
                    <a class="readmore" href="#" data-toggle="modal" data-target="#myModal4">Xem Thêm</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-inner-img3">

            </div>
        </div>
        <div class="col-md-3 blog-right-grid">
            <div class="blog-inner-img4">

            </div>
            <div class="blog-inner green">
                <h4 class="sub-hdng">
                    <a href="#" data-toggle="modal" data-target="#myModal5">Tại sao đồ nội thất thủ công tồn tại lâu hơn</a>
                </h4>
                <p class="paragraph-w3-agile">Cung cấp dịch vụ tư vấn nội thất miễn phí, mang đến cho quý khách hàng những thông tin hữu ích và những giải pháp tốt nhất cho không gian nội thất của ngôi nhà bạn.</p>
                <div class="readmore-button">
                    <a class="readmore" href="#" data-toggle="modal" data-target="#myModal5">Xem Thêm</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--// blog -->
    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>
                        <span>A</span>menity</h4>
                    <img src={{ asset('templates/amenity/images/bann1.jpg') }} alt=" " class="img-responsive">
                    <h5>Sắp Xếp Đồ Đạc Tại Nhà.</h5>
                    <p>Cung cấp dịch vụ thi công đồ gỗ nội thất, mang đến những sản phẩm đạt chất lượng cao, thẩm mỹ tinh tế, đảm bảo tiến độ và dịch vụ sau bán hàng và bảo hành tốt nhất.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal2 -->
    <!-- Modal3 -->
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>
                        <span>A</span>menity</h4>
                    <img src={{ asset('templates/amenity/images/bann2.jpg') }} alt=" " class="img-responsive">
                    <h5>Đồ Nội Thất Ngoài Trời Teak Và Tại Sao Nó Lại Thú Vị Như Vậy.</h5>
                    <p>Cung cấp thiết bị nhà bếp, phụ kiện hoàn thiện đồ gỗ nội thất hàng đầu trên thế giới cam kết sẽ mang lại cho ngôi nhà bạn những tiện ích, chất lượng, đẳng cấp quốc tế.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal3 -->
    <!-- Modal4 -->
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>
                        <span>A</span>menity</h4>
                    <img src={{ asset('templates/amenity/images/bann3.jpg') }} alt=" " class="img-responsive">
                    <h5>Cách Đánh Giá Đồ Cổ Chất Lượng.</h5>
                    <p>Cung cấp dịch vụ thiết kế nội thất, bạn sẽ cảm nhận được sự tinh tế của công trình, nét thẩm mỹ tinh tế và các giải pháp tối ưu cho không gian nội thất.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal4 -->
    <!-- Modal5 -->
    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>
                        <span>A</span>menity</h4>
                    <img src={{ asset('templates/amenity/images/bann4.jpg') }} alt=" " class="img-responsive">
                    <h5>Tại Sao Đồ Nội Thất Thủ Công Tồn Tại Lâu Hơn.</h5>
                    <p>Cung cấp dịch vụ tư vấn nội thất miễn phí, mang đến cho quý khách hàng những thông tin hữu ích và những giải pháp tốt nhất cho không gian nội thất của ngôi nhà bạn.</p>
                </div>
            </div>
        </div>
	</div>
	<!-- //Modal5 -->

@endsection
