@extends('templates.befit.master')
@section('title', 'Befit')
@section('content')

    <!-- about -->
    <div class="what py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-sm-4 mb-3 text-bl text-center font-weight-bold">Chào mừng bạn đến Website</h3>
            <p class="mx-auto wstyles text-center mb-sm-5 mb-4">Giá trị mà Chúng tôi luôn muốn mang lại cho khách hàng là trải nghiệm tập luyện thoải mái và hài lòng nhất trong môi trường thân thiện từ nhân viên tới khách hàng tập luyện cùng.
            </p>
            <img src="{{asset('templates/befit/images/about2.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
    <!-- //about -->

    <!-- services -->
    <section class="services bg-li py-5" id="services">
        <div class="container py-xl-5 py-lg-3">
            <div class="row py-xl-3">
                <div class="col-lg-4">
                    <h3 class="title-w3 text-bl mb-3 font-weight-bold">Dịch Vụ</h3>
                    <p class="title-sub-2 mb-4">“Cái chất” của thương hiệu không chỉ thể hiện qua cách thiết kế không gian phòng tập, hệ thống thiết bị hàng đầu thế giới.</p>
                    <p>Nguồn cội của nó đến từ triết lý kinh doanh, câu chuyện khởi nghiệp cũng như triết lý sống của Người sáng lập và mỗi thành viên của chúng tôi</p>
                </div>
                <div class="col-lg-8 mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bottom-gd-ser p-4">
                                <div class="row">
                                    <div class="col-sm-3 bottom-gd-icon text-center">
                                        <span class="fa fa-apple" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-sm-9 bottom-gd-content text-left mt-sm-0 mt-4">
                                        <h4 class="mb-3">MÔ HÌNH TẬP LUYỆN</h4>
                                        <p>Tại đây chúng tôi tập trung vào cải thiện hệ cơ – xương – khớp hướng tới một cơ thể không chỉ đẹp mà còn khoẻ mạnh.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-md-0 my-4">
                            <div class="bottom-gd2-active p-4">
                                <div class="row">
                                    <div class="col-sm-3 bottom-gd-icon text-center">
                                        <span class="fa fa-wheelchair-alt" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-sm-9 bottom-gd-content text-left mt-sm-0 mt-4">
                                        <h4 class="mb-3">MÔI TRƯỜNG TẬP LUYỆN</h4>
                                        <p>Tập luyện văn minh là một khái niệm mà Chúng tôi theo đuổi kiến tạo nên không gian riêng tư giúp cho hội viên đạt được trạng thái tập trung và nghiêm túc khi rèn luyện.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-md-5">
                        <div class="col-md-6">
                            <div class="bottom-gd2-active p-4">
                                <div class="row">
                                    <div class="col-sm-3 bottom-gd-icon text-center">
                                        <span class="fa fa-hourglass-half" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-sm-9 bottom-gd-content text-left  mt-sm-0 mt-4">
                                        <h4 class="mb-3">KIẾN THỨC</h4>
                                        <p>Kiến thức tập luyện và dinh dưỡng là nền tảng của một quá trình tập luyện thành công. Đội ngũ Coach đều được đào tạo theo chương trình chuẩn quốc tế.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-4">
                            <div class="bottom-gd-ser p-4">
                                <div class="row">
                                    <div class="col-sm-3 bottom-gd-icon text-center">
                                        <span class="fa fa-thumbs-o-up" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-sm-9 bottom-gd-content text-left mt-sm-0 mt-4">
                                        <h4 class="mb-3">KẾT QUẢ</h4>
                                        <p>Chúng tôi tự hào là phòng tập mang lại kết quả cho nhiều hội viên nhất hiện nay.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->

    <!-- stats section -->
    @include('templates.befit.stats')
    <!-- //stats section -->

    <!-- what we do -->
    <div class="what py-5" id="what">
        @include('templates.befit.wedo')
    </div>
    <!-- //what we do -->

    <!-- blog -->
    <div class="blog_w3ls pb-5" id="blog">
        <div class="py-xl-5 py-lg-3">
            <h3 class="title-w3 text-bl text-center font-weight-bold">Blog</h3>
            <p class="title-sub mb-5 text-center">Bài Post mới nhất</p>
            <div class="blog-grids pt-xl-4">
                <div class="container">
                    <div class="row">
                        <!-- blog grid -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card border-0 med-blog">
                                <div class="card-header p-0">
                                    <img class="card-img-bottom" src="{{asset('templates/befit/images/b1.jpg') }} " alt="Card image cap">
                                </div>
                                <div class="card-body border border-top-0">
                                    <a href="{{route('temp.befit.blog') }}" class="blog-title-in card-title m-0">Cách Tập Gym Để Giảm Mỡ Bụng Dành Cho Cả Nam Và Nữ</a>
                                    <p class="my-3">Cách tập gym để giảm mỡ bụng dành cho cả nam và nữ Lượng.</p>
                                    <a href="{{route('temp.befit.blog') }}" class="btn button-style-3 text-color let">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <!-- //blog grid -->
                        <!-- blog grid -->
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                            <div class="card border-0 med-blog">
                                <div class="card-header p-0">
                                    <img class="card-img-bottom" src="{{asset('templates/befit/images/b2.jpg') }} " alt="Card image cap">
                                </div>
                                <div class="card-body border border-top-0">
                                    <a href="{{route('temp.befit.blog') }}" class="blog-title-in card-title m-0">Cách Tập Gym Hiệu Quả Nhưng Vẫn Đảm Bảo An Toàn.</a>
                                    <p class="my-3">Cách tập gym hiệu quả nhưng vẫn đảm bảo an toàn Việc tập.</p>
                                    <a href="{{route('temp.befit.blog') }}" class="btn button-style-3 text-color let">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <!-- //blog grid -->
                        <!-- blog grid -->
                        <div class="col-lg-4 col-md-6 mx-auto mt-lg-0 mt-5">
                            <div class="card border-0 med-blog">
                                <div class="card-body border right-blog-wthree">
                                    <a href="{{route('temp.befit.blog') }}" class="blog-title-in card-title">
                                        Chế độ ăn khi tập Gym giảm cân bài bản</a>
                                    <p class="theme-color">06/11/2020</p>
                                    <a href="{{route('temp.befit.blog') }}" class="blog-title-in card-title mt-4">
                                        Phòng tập Gym tốt ở Hà Nội cần đạt...</a>
                                    <p class="theme-color">07/11/2020</p>
                                    <a href="{{route('temp.befit.blog') }}" class="blog-title-in card-title mt-4">
                                        Cách tập Gym hiệu quả nhưng vẫn đảm bảo...</a>
                                    <p class="theme-color">13/11/2020</p>
                                </div>
                            </div>
                        </div>
                        <!-- //blog grid -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog -->

    <!-- testimonials -->
    @include('templates.befit.testimonials')
    <!-- //testimonials -->

@endsection
