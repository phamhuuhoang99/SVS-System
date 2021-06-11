@extends('templates.inwardly.master')
@section('title', 'Inwardly')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href={{ route("temp.inwardly.index") }}>Trang Chủ</a>
    </li>
    <li class="breadcrumb-item active">Sản Phẩm</li>
</ol>
<!-- blog -->
<section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
    <div class="container">
        <div class="inner-sec-wthreelayouts py-lg-5  py-3">
            <h2 class="tittle text-center mb-lg-5 mb-3">Sản Phẩm</h2>
            <div class="row mt-lg-5 mt-md-4 mt-4">
                <!--left-->

                <div class="col-lg-8 left-blog-info text-left">
                    <div class="card">
                        <a href={{ route("temp.inwardly.single") }}>
                            <img src={{ asset("templates/inwardly/images/banner4.jpg" ) }} class="img-fluid" alt="">
                        </a>
                        <div class="card-body">
                            <ul class="blog-icons my-4">
                                <li>
                                    <a href="#">
                                        <i class="far fa-calendar-alt"></i> Feb 20 .2018</a>
                                </li>
                                <li class="mx-2">
                                    <a href="#">
                                        <i class="far fa-comment"></i> 21</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-eye"></i> 2000</a>
                                </li>

                            </ul>
                            <h5 class="card-title ">
                                <a href={{ route("temp.inwardly.single") }}>NHÀ PHỐ TÂN BÌNH: SỰ QUYẾN RŨ TỪ NỘI THẤT MÀU TRẦM</a>
                            </h5>
                            <p class="card-text">Với những gam màu trầm chủ đạo, căn nhà trở nên sang trọng, ấm áp, gợi lên một chút bí ẩn, tạo ra một sức hút ngay từ những ánh nhìn đầu tiên. Với gia chủ, thì căn nhà không chỉ là nơi để phục.. </p>

                        </div>
                    </div>
                    <div class="comment-top">
                        <h4>Bình Luận</h4>
                        <div class="media">
                            <img src={{ asset("templates/inwardly/images/client.jpg" ) }} alt="" class="img-fluid">
                            <div class="media-body">
                                <h5 class="mt-0">Duy Khôi</h5>
                                <p>Thiết kế ấn tượng,độc đáo, bắt mắt.</p>

                                <div class="media mt-3">
                                    <a class="d-flex pr-3" href="#">
                                        <img src={{ asset("templates/inwardly/images/client1.jpg" ) }} alt="" class="img-fluid">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Thanh Thúy</h5>
                                        <p>Cảm ơn bạn đã đóng góp ý kiến.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-top">
                        <h4>Phản hồi</h4>
                        <div class="comment-bottom">
                            <form>
                                <input class="form-control" type="text" name="Họ tên" placeholder="Name" required="">
                                <input class="form-control" type="email" name="Email" placeholder="Email" required="">

                                <input class="form-control" type="text" name="" placeholder="Chủ đề" required="">

                                <textarea class="form-control" name="Message" placeholder="Lời nhắn..." required=""></textarea>
                                <button type="submit" class="btn btn-primary submit">Gửi</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!--//left-->
                <!--right-->
                <aside class="col-lg-4 right-blog-con text-left">
                    <div class="right-blog-info text-left">
                        <div class="tech-btm">
                            <img src={{ asset("templates/inwardly/images/ab1.jpg") }} class="img-fluid" alt="">
                        </div>
                        <div class="tech-btm">
                            <h4>Đăng kí để nhận thông báo</h4>
                            <p>Đăng ký để nhận Tin tức, Ưu đãi tuyệt vời và hơn thế nữa </p>
                            <form action="#">
                                <input class="form-control" type="email" placeholder="Email" required="">
                                <input class="form-control" type="submit" value="Đăng Ký">
                            </form>

                        </div>
                        <div class="tech-btm">
                            <h4>Danh Mục</h4>
                            <ul class="list-group single">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Nội thất
                                    <span class="badge badge-primary badge-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Căn hộ
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Biệt thự
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tech-btm">
                            <h4>Bài viết của tuần</h4>

                            <div class="blog-grids row mb-3">
                                <div class="col-md-5 blog-grid-left">
                                    <a href={{ route("temp.inwardly.single") }}>
                                        <img src={{ asset("templates/inwardly/images/ab8.jpg") }} class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">

                                    <h5>
                                        <a href={{ route("temp.inwardly.single") }}>NHÀ PHỐ BÌNH TÂN: KHÔNG GIAN SỐNG HIỆN ĐẠI KẾT HỢP KINH DOANH VĂN PHÒNG </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
											<i class="far fa-clock"></i> 20 May, 2018</span>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-grids row mb-3">
                                <div class="col-md-5 blog-grid-left">
                                    <a href={{ route("temp.inwardly.single") }}>
                                        <img src={{ asset("templates/inwardly/images/ab9.jpg") }} class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">
                                    <h5>
                                        <a href={{ route("temp.inwardly.single") }}>BIỆT THỰ BIÊN HOÀ: KIẾN TRÚC HIỆN ĐẠI KẾT HỢP MÁI NGÓI TRUYỀN THỐNG </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
											<i class="far fa-clock"></i> 20 June, 2018</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tech-btm widget_social text-left">
                            <h4>FOLLOWS</h4>
                            <ul>

                                <li>
                                    <a class="twitter" href="#">
                                        <i class="fab fa-twitter"></i>
                                        <span class="count">317K</span> Twitter Followers</a>
                                </li>
                                <li>
                                    <a class="facebook" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span class="count">218k</span> Facebook Followers</a>
                                </li>
                                <li>
                                    <a class="dribble" href="#">
                                        <i class="fab fa-dribbble"></i>

                                        <span class="count">215k</span> Dribble Followers</a>
                                </li>
                                <li>
                                    <a class="pin" href="#">
                                        <i class="fab fa-pinterest"></i>
                                        <span class="count">190k</span> Pinterest Followers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!--//right-->
            </div>
        </div>
    </div>
</section>
<!-- //blog-->
@endsection