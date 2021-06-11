@extends('templates.dental-health.master')
@section('title', 'Dental Health')
@section('content')
    <!-- banner -->
    <div class="innerpage-banner" id="home">
        <div class="inner-page-layer">
        </div>
    </div>
    <!-- //banner -->

    <!-- single -->
    <section class="bottom-banner-w3layouts py-5">
        <div class="container py-md-3">
            <h2 class="heading text-center mb-sm-5 mb-4">Single Page </h2>
            <div class="row inner-sec-w3ls-agileinfo">
                <!--left-->
                <div class="col-lg-8 left-blog-info text-left">
                    <div class="card">
                        <a href="{{ route('temp.detal-health.single') }}">
                            <img src="{{ asset('templates/detal-health/images/blog1.jpg') }}" class="card-img-top img-fluid"
                                alt="">
                        </a>
                        <div class="card-body">
                            <ul class="blog-icons my-4">
                                <li>
                                    <a href="#">
                                        <span class="fa fa-calendar"></span> Nov 8 .2018</a>
                                </li>
                                <li class="mx-2">
                                    <a href="#">
                                        <span class="fa fa-comment"></span> 21</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-eye"></span> 2000</a>
                                </li>

                            </ul>
                            <h5 class="card-title ">
                                <a href="{{ route('temp.detal-health.single') }}">90% Trẻ em Việt Nam gặp các vấn đề về răng
                                    miệng</a>
                            </h5>
                            <p class="card-text">Thế nhưng, theo thống kế của Chương trình Bảo Vệ Nụ Cười Việt Nam có đến
                                85% trẻ từ 6-8 tuổi bị sâu răng; 60-90% trẻ bị mắc bệnh viêm lợi. Còn theo số liệu của Viện
                                Đào tạo Răng Hàm Mặt – Đại học Y Hà Nội, có đến 90,4% trẻ em được khám có các mảng bám trên
                                răng. Tỷ lệ sâu răng vĩnh viễn ở lứa tuổi 9-11 là 54,6%. Ngoài ra, có khoảng trên 80% thanh
                                thiếu niên bị lệch răng cần nắn chỉnh. </p>
                            <div class="read inner mt-4">
                                <a href="{{ route('temp.detal-health.single') }}"
                                    class="btn btn-sm animated-button victoria-two">Xem Thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment-top">
                        <h4>Bình luận</h4>
                        <div class="media">
                            <img src="{{ asset('templates/detal-health/images/ser1.jpg') }}" alt=""
                                class="img-fluid rounded">
                            <div class="media-body">
                                <h5 class="mt-sm-0 mt-3">Duy Khôi</h5>
                                <p>Mình đã đi thăm khám nhiều nơi nhưng quyết định lựa chọn Detal Health vì có đội ngũ bác
                                    sĩ giỏi và trang thiết bị hiện đại</p>
                            </div>
                        </div>
                        <div class="media">
                            <img src="{{ asset('templates/detal-health/images/ser2.jpg') }}" alt=""
                                class="img-fluid rounded">
                            <div class="media-body">
                                <h5 class="mt-sm-0 mt-3">Tấn Hưng</h5>
                                <p>Bác sĩ đưa ra nhiều kế hoạch chỉnh nha để mình lựa chọn. Bác sĩ còn cho biết trước kết
                                    quả điều trị, chi phí niềng răng hợp lý và nhân viên nhiệt tình</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-top">
                        <h4>Bình luận</h4>
                        <div class="comment-bottom">
                            <form action="#">
                                <input class="form-control" type="text" name="Name" placeholder="Họ tên" required="">
                                <input class="form-control" type="email" name="Email" placeholder="Email" required="">

                                <input class="form-control" type="text" name="Subject" placeholder="Chủ đề" required="">

                                <textarea class="form-control" name="Message" placeholder="Lời nhắn..."
                                    required=""></textarea>
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
                            <img src="{{ asset('templates/detal-health/images/service1.jpg') }}"
                                class="card-img-top img-fluid rounded" alt="">
                        </div>
                        <div class="tech-btm">
                            <h4>Đăng ký để nhận bản tin mới nhất</h4>
                            {{--  <p>Pellentesque dui, non felis. Maecenas male </p>  --}}
                            <form action="#">
                                <input class="form-control" type="email" placeholder="Email" required="">
                                <input class="form-control" type="submit" value="Đăng ký">
                            </form>

                        </div>
                        <div class="tech-btm">
                            <h4>Danh mục</h4>
                            <ul class="list-group single">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Niềng Răng
                                    <span class="badge badge-primary badge-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Trám Răng
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Trồng Răng
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tech-btm">
                            <h4>Bài đăng trong tuần</h4>

                            <div class="blog-grids row mb-3">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="{{ route('temp.detal-health.single') }}">
                                        <img src="{{ asset('templates/detal-health/images/service4.jpg') }}"
                                            class="card-img-top img-fluid rounded" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">

                                    <h5>
                                        <a href="{{ route('temp.detal-health.single') }}">Đi tìm nụ cười...</a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                                            <span class="fa fa-clock-o"></span> 08/11/2020</span>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-grids row mb-3">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="{{ route('temp.detal-health.single') }}">
                                        <img src="{{ asset('templates/detal-health/images/service5.jpg') }}"
                                            class="card-img-top img-fluid rounded" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">
                                    <h5>
                                        <a href="{{ route('temp.detal-health.single') }}">Nụ cười chuẩn vàng... </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                                            <span class="fa fa-clock-o"></span>22/12/2020</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tech-btm widget_social text-left">
                            <h4>Theo dõi</h4>
                            <ul>

                                <li>
                                    <a class="twitter" href="#">
                                        <span class="fa fa-twitter"></span>
                                        <span class="count">317K</span> Twitter Followers</a>
                                </li>
                                <li>
                                    <a class="facebook" href="#">
                                        <span class="fa fa-facebook"></span>
                                        <span class="count">218k</span> Facebook Followers</a>
                                </li>
                                <li>
                                    <a class="dribble" href="#">
                                        <span class="fa fa-dribbble"></span>

                                        <span class="count">215k</span> Dribble Followers</a>
                                </li>
                                <li>
                                    <a class="pin" href="#">
                                        <span class="fa fa-pinterest"></span>
                                        <span class="count">190k</span> Pinterest Followers</a>
                                </li>

                            </ul>
                        </div>
                        <div class="tech-btm">
                            <h4>Bài viết gần đây</h4>

                            <div class="blog-grids row mb-3 text-left">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="{{ route('temp.detal-health.single') }}">
                                        <img src="{{ asset('templates/detal-health/images/service4.jpg') }}"
                                            class="card-img-top img-fluid rounded" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">

                                    <h5>
                                        <a href="{{ route('temp.detal-health.single') }}">Đi tìm nụ cười... </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                                            <span class="fa fa-clock-o"></span> 22/12/2020</span>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-grids row mb-3 text-left">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="{{ route('temp.detal-health.single') }}">
                                        <img src="{{ asset('templates/detal-health/images/service5.jpg') }}"
                                            class="card-img-top img-fluid rounded" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">

                                    <h5>
                                        <a href="{{ route('temp.detal-health.single') }}">Nụ cười chuẩn vàng ...</a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                                            <span class="fa fa-clock-o"></span> 8 Nov, 2018</span>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <!--//right-->
            </div>
        </div>
    </section>
    <!-- //contact -->
@endsection
