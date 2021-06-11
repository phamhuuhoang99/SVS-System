@extends('templates.yoga-lite.master')
@section('title', 'Yoga Lite')
@section('content')
    <!-- //about -->
    <section class="banner-bottom py-5">
        <div class="container py-md-5">
            <div class="row banner-grids mb-lg-5">
                <div class="col-lg-7 content-right">
                    <h3 class="title-w3pvt">Giới thiệu về Yoga Lite</h3>
                    <h4Chúng tôi sẽ giúp mang lại sức khỏe cho tất cả mọi người.</h4>
                        <p class="mt-2 text-left">Trung tâm Yoga Lite đã nhanh chóng là lựa chọn tin tưởng của luyện tập
                            Yoga của hàng nghìn hội viên yêu mến bộ môn Yoga. Chúng tôi luôn phát triển về giáo án tập,
                            trang thiết bị phòng tập để phục vụ nhu cầu ngày càng tăng cao của hội viên.</p>
                        <p class="mt-2 text-left">Chúng tôi luôn tự hào là 1 trong những phòng tập Yoga tốt nhất.</p>
                        <div class="row stats text-left mt-5">
                            <div class="col-lg-4 counter">
                                <span class="fa fa-users"></span>
                                <div class="counter-info">
                                    <h5>7200+</h5>
                                    <p>Thành viên</p>

                                </div>
                            </div>
                            <div class="col-lg-4 counter two">
                                <span class="fa fa-user-md"></span>
                                <div class="counter-info">
                                    <h5>1150+</h5>
                                    <p>Lớp học</p>

                                </div>
                            </div>
                            <div class="col-lg-4 counter">
                                <span class="fa fa-diamond"></span>
                                <div class="counter-info">
                                    <h5>65+</h5>
                                    <p>Kinh nghiệm</p>

                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-5 content-left">
                    <img src="{{ asset('templates/yoga-lite/images/ab.jpg') }}" alt="" class="img-fluid">
                </div>

            </div>

        </div>
    </section>
    <!-- /about -->
    <!-- /services -->
    @include('templates.yoga-lite.sectionservice')
    <!-- /services -->

    <!-- /last-content -->
    @include('templates.yoga-lite.last')
    <!-- //last-content -->
    <!-- /team-content -->
    <section class="team-content py-5" id="team">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center mb-5">Sự Kiện Mới Nhất</h3>
            <div class="row team-grids text-left mt-md-5 mt-4">
                <div class="col-lg-4 team-main p-0">

                    <div class="team-img"><img src="{{ asset('templates/yoga-lite/images/n1.jpg') }}" alt="news image"
                            class="img-fluid"> </div>
                    <div class="team-info">

                        <h4><a href="{{ route('temp.yoga-lite.single') }}">Các bài tập Yoga thanh lọc phổi dành cho Huấn
                                Luyện Viên tham khảo</a></h4>
                        <small>03/11/2020</small>
                        <p>Như chúng ta đã thấy vấn đề về ô nhiễm môi trường ngày càng cấp bách, khói bụi, khí độc, khói
                            thuốc lá đã ảnh hưởng ít nhiều đến cơ quan nội tạng của chúng ta, mà điển hình có...</p>
                        <a href="{{ route('temp.yoga-lite.single') }}" class="read-more two btn m-0 px-3"><span
                                class="fa fa-long-arrow-right">
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 team-main p-0">
                    <div class="team-info">

                        <h4>
                            <a href="{{ route('temp.yoga-lite.single') }}">Lấy lại hứng thú tập luyện với bộ môn Yoga bằng
                                cách nào?</a>
                        </h4>
                        <small>20/11/2020</small>
                        <p>Bước đến phòng tập, luyện tập Yoga để có thể đạt được những lợi ích và giá trị mà Yoga mang lại,
                            đòi hỏi ta cần phải có niềm đam mê và hăng say luyện tập để có thể duy trì.</p>
                        <a href="{{ route('temp.yoga-lite.single') }}" class="read-more two btn m-0 px-3"><span
                                class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <div class="team-img"><img src="{{ asset('templates/yoga-lite/images/n2.jpg') }}" alt="news image"
                            class="img-fluid"> </div>
                </div>

                <div class="col-lg-4 team-main p-0">

                    <div class="team-img"><img src="{{ asset('templates/yoga-lite/images/n3.jpg') }}" alt="news image"
                            class="img-fluid"> </div>
                    <div class="team-info">

                        <h4> <a href="{{ route('temp.yoga-lite.single') }}">Những biểu hiện báo động trong tập luyện
                                Yoga</a></h4>
                        <small>07/12/2020</small>
                        <p>Dẫu biết rằng tập luyện Yoga đều đặn và thường xuyên sẽ mang tới cho bạn vô vàn những lợi ích và
                            sức khỏe. Tuy nhiên nếu chúng ta lạm dụng nó và luyện tập quá sức thì điều này sẽ...</p>
                        <a href="{{ route('temp.yoga-lite.single') }}" class="read-more two btn m-0 px-3"><span
                                class="fa fa-long-arrow-right">
                            </span></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- //team-content -->
    <!--/testimonials -->
    <section class="testimonials py-5" id="testimonials">
        <div class="container py-md-5">
            <div class="header text-center">
                <h3 class="title-w3pvt two mb-lg-5 mb-4"> Khách Hàng Đánh Giá<span>.</span></h3>
            </div>
            <div class="row">
                <div class="col-lg-4 test-info text-left">
                    <p><span class="fa fa-quote-left"></span>Bài tập phù hợp với những người công nhân viên chức, các nhân
                        viên cũng nhiệt tình tư vấn hướng dẫn phương pháp luyện tập phù hợp<span
                            class="fa fa-quote-right"></span>
                    </p>
                    <div class="test-img text-right mb-3">
                        <img src="{{ asset('templates/yoga-lite/images/te2.jpg') }}" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="my-md-2 my-3 text-right">Phương Phương</h3>

                    <ul class="list-unstyled w3layouts-icons clients text-right">
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star-half-o"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 test-info text-left">
                    <p><span class="fa fa-quote-left"></span> Bài tập phù hợp với những người công nhân viên chức, các nhân
                        viên cũng nhiệt tình tư vấn hướng dẫn phương pháp luyện tập phù hợp <span
                            class="fa fa-quote-right"></span>
                    </p>

                    <div class="test-img text-right mb-3">
                        <img src="{{ asset('templates/yoga-lite/images/te3.jpg') }}" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="my-md-2 my-3 text-right">Anh Thư</h3>

                    <ul class="list-unstyled w3layouts-icons clients text-right">
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star-half-o"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 test-info text-left">
                    <p><span class="fa fa-quote-left"></span> Bài tập phù hợp với những người công nhân viên chức, các nhân
                        viên cũng nhiệt tình tư vấn hướng dẫn phương pháp luyện tập phù hợp<span
                            class="fa fa-quote-right"></span>
                    </p>

                    <div class="test-img text-right mb-3">
                        <img src="{{ asset('templates/yoga-lite/images/te1.jpg') }}" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="my-md-2 my-3 text-right">Thị Hạnh</h3>

                    <ul class="list-unstyled w3layouts-icons clients text-right">
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star-half-o"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--//testimonials -->
@endsection
