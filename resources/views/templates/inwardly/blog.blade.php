@extends('templates.inwardly.master')
@section('title', 'Inwardly')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href={{ route("temp.inwardly.index") }}>Trang Chủ</a>
    </li>
    <li class="breadcrumb-item active">Blog</li>
</ol>
<!-- blog -->
<section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
    <div class="container">
        <div class="inner-sec-wthreelayouts py-lg-5  py-3">
            <h2 class="tittle text-center mb-lg-5 mb-3">
                Bài Viết</h2>
            <div class="row mt-lg-5 mt-md-4 mt-4">
                <!--left-->
                <div class="col-lg-8 left-blog-info text-left">
                    <div class="blog-in-con mb-4">
                        <div class="card">
                            <a href={{ route("temp.inwardly.single") }}>
                                <img src={{ asset("templates/inwardly/images/banner1.jpg") }} class="img-fluid" alt="">
                            </a>
                            <div class="card-body">
                                <ul class="blog-icons my-4">
                                    <li>
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i> 20/10/2020</a>
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
                                    <a href={{ route("temp.inwardly.single") }}>THIẾT KẾ NỔI BẬT CỦA CĂN NHÀ PHỐ HIỆN ĐẠI TRONG HẺM</a>
                                </h5>
                                <p class="card-text">Nằm sâu trong 1 con hẻm ở quận Tân Bình, nhưng do biết cách tận dụng chiều dài của Căn nhà dọc theo con hẻm, KTS KHÔNG GIAN ĐẸP để...</p>
                                <div class="read inner mt-4">
                                    <a href={{ route("temp.inwardly.single") }} class="btn btn-sm animated-button victoria-two">Xem Thêm</a>
                                </div>

                            </div>
                        </div>
                        <div class="card my-md-4 my-2">
                            <a href={{ route("temp.inwardly.single") }}>
                                <img src={{ asset("templates/inwardly/images/banner2.jpg") }} class="img-fluid" alt="">
                            </a>
                            <div class="card-body">
                                <ul class="blog-icons my-4">
                                    <li>
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i> Feb 22 .2018</a>
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
                                <p class="card-text">Với những gam màu trầm chủ đạo, căn nhà trở nên sang trọng, ấm áp, gợi lên một chút bí ẩn, tạo ra một sức hút ngay từ những ánh...</p>
                                <div class="read inner mt-4">
                                    <a href={{ route("temp.inwardly.single") }} class="btn btn-sm animated-button victoria-two">Xem Thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="card my-4">
                            <a href={{ route("temp.inwardly.single") }}>
                                <img src={{ asset("templates/inwardly/images/banner3.jpg") }} class="img-fluid" alt="">
                            </a>
                            <div class="card-body">
                                <ul class="blog-icons my-4">
                                    <li>
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i> Feb 23 .2018</a>
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
                                    <a href={{ route("temp.inwardly.single") }}>SỐNG TỐI GIẢN VỚI CĂN NHÀ PHỐ QUẬN BÌNH TÂN</a>
                                </h5>
                                <p class="card-text">“Hạn chế tối đa những vật dụng, chỉ giữ lại những gì thật cần thiết” đó là tiêu chí hàng đầu mà chủ nhà gửi gắm đến các Kiến Trúc...</p>
                                <div class="read inner mt-4">
                                    <a href={{ route("temp.inwardly.single") }} class="btn btn-sm animated-button victoria-two">Xem Thêm</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-left mt-4">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Trước</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Sau</a>
                            </li>
                        </ul>
                    </nav>
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
                        <div class="tech-btm">
                            <h4>Bài đăng gần đây</h4>

                            <div class="blog-grids row mb-3 text-left">
                                <div class="col-md-5 blog-grid-left">
                                    <a href={{ route("temp.inwardly.single") }}>
                                        <img src={{ asset("templates/inwardly/images/ab2.jpg") }} class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">

                                    <h5>
                                        <a href={{ route("temp.inwardly.single") }}>BIỆT THỰ VŨNG TÀU: KHÔNG GIAN SỐNG HIỆN ĐẠI & THANH BÌNH GIỮA LÒNG PHỐ BIỂN </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
											<i class="far fa-clock"></i> 20 May, 2018</span>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-grids row mb-3 text-left">
                                <div class="col-md-5 blog-grid-left">
                                    <a href={{ route("temp.inwardly.single") }}>
                                        <img src={{ asset("templates/inwardly/images/ab3.jpg") }} class="img-fluid" alt="">
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
                                <div class="clearfix"> </div>
                            </div>
                            <div class="blog-grids row mb-3 text-left">
                                <div class="col-md-5 blog-grid-left">
                                    <a href={{ route("temp.inwardly.single") }}>
                                        <img src={{ asset("templates/inwardly/images/ab4.jpg") }} class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">
                                    <h5>
                                        <a href={{ route("temp.inwardly.single") }}>THIẾT KẾ NỔI BẬT CỦA CĂN NHÀ PHỐ HIỆN ĐẠI TRONG HẺM</a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
											<i class="far fa-clock"></i> 20 June, 2018</span>
                                    </div>
                                </div>

                            </div>
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