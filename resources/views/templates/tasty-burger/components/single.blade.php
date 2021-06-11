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
        <li class="breadcrumb-item active" aria-current="page">Báo tường</li>
    </ol>
</div>
<!-- //page details -->

<!-- single page -->
<div class="single-page py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-section text-center mb-md-5 mb-4">
            <h3 class="w3ls-title"><span>Báo tường</span></h3>
        </div>
        <div class="inner-sec">
            <div class="row">
                <!-- left side -->
                <div class="col-lg-8 left-blog-info text-left">
                    <div class="blog-grid-top">
                        <div class="b-grid-top">
                            <div class="blog_info_left_grid">
                                <a href={{ URL::route("temp.tasty-burger.single") }}>
                                    <img src={{ URL::asset("templates/tasty-burger/images/single1.jpg") }} class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <h3>
                            <a href={{ URL::route("temp.tasty-burger.single") }} class="single-text text-da font-weight-light">
                                Tasty Burger - quán quân của cuộc thi "2018's best Burger"
                            </a>
                        </h3>
                        <p>
                            Bánh Mỳ, Bánh ngọt Việt Nam sang Trung Quốc thi đấu
                        </p>
                        <p class="my-3">
                            Hình ảnh long, ly, quy, phụng uốn quanh trong tác phẩm Đất Việt đã giúp nghệ nhân
                            Nguyễn Văn Hùng trở thành một trong ba đại diện Việt Nam sang Trung Quốc thi Cúp
                            Bánh mỳ, bánh ngọt sắp tới.
                        </p>
                        <p>
                            Đội tuyển bánh mỳ, bánh ngọt Việt Nam
                        </p>
                        <div class="mt-sm-4 mt-3">
                            <p>
                                Sau 3 ngày từ 14 – 16/12 thi đấu căng thẳng với các thể loại bánh mỳ, bánh ngọt
                                và bánh nghệ thuật. BTC đã chọn ra ba nghệ nhân xuất sắc nhất cuộc thi là
                                Võ Thanh Tuấn (Siêu thị Big C), Nguyễn Trương Kim Phượng (ABC Bakery) và
                                Nguyễn Văn Hùng (Khách sạn Caravelle) sẽ sang Quảng Châu, Trung quốc tranh tài
                                Louis Lesaffre Cup lần III vòng loại châu Á vào tháng 5/2011 tới.
                            </p>
                            <p class="my-3">
                                Cúp Thế giới Bánh mì, Bánh ngọt Louis Lesaffre lần đầu tiên được diễn ra tại
                                Việt Nam với sự tranh tài của những thợ bánh xuất sắc nhất đến từ các tên tuổi
                                lớn trong lĩnh vực bánh mì – bánh ngọt trên cả nước như Siêu thị Big C,
                                Khách sạn Caravelle, ABC Bakery, Khách sạn Sheraton, Intercontinental,
                                Trường bánh mì Huế, Trường đào tạo nghề Hoa sữa…
                            </p>
                            <p>
                                Khác với vòng loại khu vực, tại vòng thi chung kết này, các thí sinh phải
                                thực hiện toàn bộ các công đoạn làm bánh dưới sự giám sát trực tiếp của BGK
                                trong khung thời lượng dành cho dòng bánh mì là 6 giờ, bánh ngọt và bánh
                                nghệ thuật 8 giờ. Với phương cách thi đấu này, các thí sinh phải đảm bảo một số
                                nguyên tắc khắt khe về việc sử dụng thành phần nguyên liệu, men, phụ gia,
                                dụng cụ, thiết bị, đảm bảo an toàn, vệ sinh…theo quy định của ban tổ BTC.
                            </p>
                        </div>
                    </div>

                    <div class="comment-top">
                        <h4>Bình luận</h4>
                        <div class="media">
                            <img src={{ URL::asset("templates/tasty-burger/images/te3.jpg") }} alt="" class="img-fluid" />
                            <div class="media-body">
                                <h5 class="mt-0">Joseph Goh</h5>
                                <p>
                                    Thật xứng đáng !!
                                </p>
                            </div>
                        </div>
                        <div class="media mt-3">
                            <a class="d-flex pr-3" href="#">
                                <img src={{ URL::asset("templates/tasty-burger/images/te2.jpg") }} alt="" class="img-fluid" />
                            </a>
                            <div class="media-body">
                                <h5 class="mt-0">Richard Spark</h5>
                                <p>
                                    Đây là tiệm Burger tuyệt nhất mà tôi từng đến
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-top">
                        <h4>Hãy để lại bình luận</h4>
                        <div class="comment-bottom">
                            <form action="#">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="Name" placeholder="Tên"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="Email" placeholder="Email"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="Subject" placeholder="Tiêu đề"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="Message" placeholder="Lời nhắn"
                                        required=""></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary submit">Gửi</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //left side -->

                <!-- right side -->
                <aside class="col-lg-4 right-blog-con text-right mt-lg-0 mt-5">
                    <div class="right-blog-info text-left">
                        <div class="tech-btm">
                            <h4>Hãy đặt hàng ngay</h4>
                            <p>Miễn phí giao hàng trong lần đặt đầu tiên!</p>
                            <form action="#">
                                <input class="form-control" name="email" type="email" placeholder="Email"
                                    required="">
                                <input class="form-control" type="submit" value="Đăng ký">
                            </form>
                        </div>
                        <div class="category-story tech-btm">
                            <h4>Những bài post khác</h4>
                            <ul class="list-unstyled">
                                <li class="border-bottom mb-3 pb-3">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    <a href="#" class="text-blog-single">
                                        Bữa ăn ngừa Covid-19 cho người cao tuổi
                                    </a>
                                </li>
                                <li class="border-bottom mb-3 pb-3">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    <a href="#" class="text-blog-single">
                                        Thực phẩm có lợi cho sức đề kháng thời dịch
                                    </a>
                                </li>
                                <li class="border-bottom mb-3 pb-3">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    <a href="#" class="text-blog-single">
                                        9 thực phẩm có lợi cho runner
                                    </a>
                                </li>
                                <li class="border-bottom mb-3 pb-3">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    <a href="#" class="text-blog-single">
                                        Dinh dưỡng hợp lý cho trẻ thời Covid-19
                                    </a>
                                </li>
                                <li class="border-bottom mb-3 pb-3">
                                    <i class="fa fa-angle-right mr-2"></i>
                                    <a href="#" class="text-blog-single">
                                        Bộ Y tế kêu gọi dân giảm ăn muối
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-right mr-2"></i>
                                    <a href="#" class="text-blog-single">
                                        Gạo chữa nhiều bệnh
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tech-btm">
                            <img src={{ URL::asset("templates/tasty-burger/images/blog1.jpg") }} class="img-fluid" alt="">
                        </div>
                        <div class="tech-btm">
                            <h4>Danh mục</h4>
                            <ul class="list-group single">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Thực phẩm
                                    <span class="badge badge-primary badge-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Dịch vụ
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Sức khỏe
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tech-btm">
                            <h4>Những bài báo hay nhất tuần</h4>

                            <div class="blog-grids row mb-3">
                                <div class="col-md-5 blog-grid-left">
                                    <a href={{ URL::route("temp.tasty-burger.single") }}>
                                        <img src={{ URL::asset("templates/tasty-burger/images/blog1.jpg") }} class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right mt-2">
                                    <h5>
                                        <a href={{ URL::route("temp.tasty-burger.single") }}>
                                            Bữa tối tại Tasty Burger
                                        </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span><i class="far fa-clock"></i>12 THÁNG 10, 2019</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-grids row mb-2">
                                <div class="col-md-5 blog-grid-left">
                                    <a href={{ URL::route("temp.tasty-burger.single") }}>
                                        <img src={{ URL::asset("templates/tasty-burger/images/blog2.jpg") }} class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right mt-3">
                                    <h5>
                                        <a href={{ URL::route("temp.tasty-burger.single") }}>
                                            Tại sao lại chọn Tasty Burger?
                                        </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span><i class="far fa-clock"></i>15 THÁNG 10, 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-gd tech-btm">
                            <h4>Bài báo gần đây</h4>
                            <div class="blog-grids">
                                <div class="blog-grid-left">
                                    <a href={{ URL::route("temp.tasty-burger.single") }}>
                                        <img src={{ URL::asset("templates/tasty-burger/images/blog1.png") }} class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="blog-grid-right">
                                    <h5 class="mt-0">
                                        <a href={{ URL::route("temp.tasty-burger.single") }}>
                                            Những chiếc Burger tuyệt vời
                                        </a>
                                    </h5>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- //right side -->
            </div>
        </div>
    </div>
</div>
<!-- //single -->