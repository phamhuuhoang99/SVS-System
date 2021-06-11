@extends('templates.edulearn.master')
@section('title', 'Edulearn')
@section('content')
    @include('templates.edulearn.banner')
<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('temp.edulearn.index') }}">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Single Page</li>
    </ol>
</nav>
<!-- breadcrumb -->
<!-- //banner -->

<!-- single -->
<div class="single-w3l py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">single
            <span class="font-weight-bold">page</span>
        </h3>
        <div class="row inner_sec_info pt-md-4">
            <!-- left side -->
            <div class="col-lg-8 single-left">
                <div class="single-left1">
                    <img src="{{ asset('templates/edulearn/images/banner3.jpg') }}" alt=" " class="img-fluid" />
                    <h6 class="blog-first text-dark text-center my-4">
                        <i class="far fa-user mr-2"></i>Jenny Joy
                    </h6>
                    <ul class="blog_list my-3 text-center">
                        <li>02/06/2020</li>
                        <li class="mx-3">
                            <a href="#">
                                <i class="far fa-heart mr-1"></i> 22
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-comments mr-1"></i> 16
                            </a>
                        </li>
                    </ul>
                    <h5 class="card-title">
                        <a href="{{route('temp.edulearn.single') }}" class="text-dark">Bí quyết gia tăng doanh số là?</a>
                    </h5>
                    <p>
                        Thị trường chứng khoán (TTCK) là nơi diễn ra các hoạt động giao dịch mua bán, trao đổi các loại chứng khoán khác nhau giữa người chủ sở hữu với người mua.
                        <i class="my-3 font-weight-bold">Thị trường chứng khoán Việt Nam đang ngày càng phát triển và trở thành lĩnh vực đầu tư vô cùng hấp dẫn, nhất là đối với những người trẻ và người có thu nhập khá trở lên.</i>
                        Nhận thấy tiềm năng phát triển đầy hứa hẹn nên rất nhiều người kéo nhau đi học kinh doanh chứng khoán cơ bản xây dựng nền tảng cá nhân vững chắc.</p>
                </div>
                <div class="admin p-4 my-4">
                    <p>
                        <i class="fas fa-quote-left mr-2"></i>Hãy tham gia ngay khóa học chứng khoán online "Nhập môn chứng khoán" để trở thành nhà đầu tư chứng khoán thông minh và giàu có!
                        <i class="fas fa-quote-right ml-2"></i>
                    </p>
                    <a href="#" class="mt-3 font-weight-bold text-right blockquote-footer">Lê Tấn Hưng</a>
                </div>
                <div class="row single-left2">
                    <div class="col-md-6 single-left2-left">
                        <ul>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}"> Tránh được những rủi ro thua lỗ, cạm bẫy trên TTCK</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}">Có được tư duy đúng trong đầu tư cổ phiếu hiệu quả, thông minh</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}">Nắm được những công cụ để đánh giá, phân tích </a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}">Đầu tư chứng khoán sớm có lời lãi nhất</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}"> Nhanh chóng biết cách đầu tư chứng khoán để đem về nguồn lợi nhuận khổng lồ</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}"> Đầy đủ những hướng dẫn "cầm tay chỉ việc" để có thể tự tin tham gia TTCK</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 single-left2-left">
                        <ul>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}"> Kiến thức cơ bản nhất về thị trường chứng khoán</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}">Kiến thức về đầu tư chứng khoán và tiềm năng lợi nhuận khổng lồ của TTCK</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}">Đầu tư chứng khoán sớm có lời lãi nhất</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}"> Tránh được những rủi ro thua lỗ, cạm bẫy trên TTCK</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}">Nắm được những công cụ để đánh giá, phân tích</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}">Có được tư duy đúng trong đầu tư cổ phiếu hiệu quả, thông minh</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="comments my-5">
                    <h3 class="blog-title text-dark">Bình luận mới nhất</h3>
                    <div class="comments-grids mt-4">
                        <div class="row comments-grid">
                            <div class="col-3 comments-grid-left">
                                <img src="{{ asset('templates/edulearn/images/t1.jpg') }}" alt=" " class="img-thumbnail rounded-circle" />
                            </div>
                            <div class="col-8 comments-grid-right mt-3">
                                <h4>Hữu Hòa</h4>
                                <ul class="my-2">
                                    <li class="font-weight-bold">06/11/2020
                                        <i>|</i>
                                    </li>
                                    <li>
                                        <a href="#" class="font-weight-bold">Phản hồi</a>
                                    </li>
                                </ul>
                                <p>Chương trình học thực tế và dễ hiểu cho tất cả mọi người.</p>
                            </div>
                        </div>
                        <div class="row comments-grid my-4">
                            <div class="col-3 comments-grid-left">
                                <img src="{{ asset('templates/edulearn/images/t2.jpg') }}" alt=" " class="img-thumbnail rounded-circle" />
                            </div>
                            <div class="col-8 comments-grid-right mt-3">
                                <h4>Thanh Thùy</h4>
                                <ul class="my-2">
                                    <li class="font-weight-bold">16/05/2020
                                        <i>|</i>
                                    </li>
                                    <li>
                                        <a href="#" class="font-weight-bold">Phản hồi</a>
                                    </li>
                                </ul>
                                <p>Chương trình học thực tế và dễ hiểu cho tất cả mọi người.</p>
                            </div>
                        </div>
                        <div class="row comments-grid">
                            <div class="col-3 comments-grid-left">
                                <img src="{{ asset('templates/edulearn/images/t3.jpg') }}" alt=" " class="img-thumbnail rounded-circle" />
                            </div>
                            <div class="col-8 comments-grid-right mt-3">
                                <h4>Hoàng Nhân</h4>
                                <ul class="my-2">
                                    <li class="font-weight-bold">16/05/2020
                                        <i>|</i>
                                    </li>
                                    <li>
                                        <a href="#" class="font-weight-bold">Phản hồi</a>
                                    </li>
                                </ul>
                                <p>Chương trình học thực tế và dễ hiểu cho tất cả mọi người.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="leave-coment-form">
                    <h3 class="blog-title text-dark mb-4">Phản hồi</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <input type="text" name="Name" class="form-control" placeholder="Họ Tên" required="">
                            </div>
                            <div class="col-sm-6 form-group">
                                <input type="email" name="Email" class="form-control" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="Message" class="form-control" placeholder="Bình luận..." required=""></textarea>
                        </div>
                        <div class="mm_single_submit">
                            <input type="submit" value="Bình luận">
                        </div>
                    </form>
                </div>
            </div>
            <!-- //left side -->
            <!-- right side -->
            <div class="col-lg-4 event-right mt-lg-0 mt-sm-5 mt-4">
                <div class="event-right1">
                    <div class="search1">
                        <form class="form-inline" action="#" method="post">
                            <input class="form-control rounded-0 mr-sm-2" type="search" placeholder="Search Here" aria-label="Search" required>
                            <button class="btn bg-dark text-white rounded-0 mt-3" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="categories my-4 p-4 border">
                        <h3 class="blog-title text-dark">Categories</h3>
                        <ul>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}">At vero eos et accusamus iusto</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}">Sed ut perspiciatis unde omnis</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}">Accusantium doloremque lauda</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}">Vel illum qui dolorem fugiat quo</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}">Quis autem vel eum repreh</a>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-check mr-2"></i>
                                <a href="{{route('temp.edulearn.single') }}">Neque porro quisquam est qui</a>
                            </li>
                        </ul>
                    </div>
                    <div class="posts p-4 border">
                        <h3 class="blog-title text-dark">Our Events</h3>
                        <div class="posts-grids">
                            <div class="row posts-grid mt-4">
                                <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                                    <a href="{{route('temp.edulearn.single') }}">
                                        <img src="{{ asset('templates/edulearn/images/c1.jpg') }}" alt=" " class="img-fluid" />
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                    <h4>
                                        <a href="{{route('temp.edulearn.single') }}" class="text-dark">Sed ut perspiciatis unde omni</a>
                                    </h4>
                                    <ul class="wthree_blog_events_list mt-2">
                                        <li class="mr-2 text-dark">
                                            <i class="fa fa-calendar mr-2" aria-hidden="true"></i>15/05/18</li>
                                        <li>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href="{{route('temp.edulearn.single') }}" class="text-dark ml-2">Admin</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row posts-grid mt-4">
                                <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                                    <a href="{{route('temp.edulearn.single') }}">
                                        <img src="{{ asset('templates/edulearn/images/c2.jpg') }}" alt=" " class="img-fluid" />
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                    <h4>
                                        <a href="{{route('temp.edulearn.single') }}" class="text-dark">Sed ut perspiciatis unde omni</a>
                                    </h4>
                                    <ul class="wthree_blog_events_list mt-2">
                                        <li class="mr-2 text-dark">
                                            <i class="fa fa-calendar mr-2" aria-hidden="true"></i>23/05/18</li>
                                        <li>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href="{{route('temp.edulearn.single') }}" class="text-dark ml-2">Admin</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row posts-grid mt-4">
                                <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                                    <a href="{{route('temp.edulearn.single') }}">
                                        <img src="{{ asset('templates/edulearn/images/c3.jpg') }}" alt=" " class="img-fluid" />
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                    <h4>
                                        <a href="{{route('temp.edulearn.single') }}" class="text-dark">Sed ut perspiciatis unde omni</a>
                                    </h4>
                                    <ul class="wthree_blog_events_list mt-2">
                                        <li class="mr-2 text-dark">
                                            <i class="fa fa-calendar mr-2" aria-hidden="true"></i>13/06/18</li>
                                        <li>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href="{{route('temp.edulearn.single') }}" class="text-dark ml-2">Admin</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tags mt-4 p-4 border">
                        <h3 class="blog-title text-dark">Recent Tags</h3>
                        <ul class="mt-4">
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">Designs</a>
                            </li>
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">Growth</a>
                            </li>
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">Latest</a>
                            </li>
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">Price</a>
                            </li>
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">Tools</a>
                            </li>
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">Business</a>
                            </li>
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">Work Space</a>
                            </li>
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">New Course</a>
                            </li>
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">Advantage</a>
                            </li>
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">Concepts</a>
                            </li>
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">Arts</a>
                            </li>
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">Photography</a>
                            </li>
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">Research</a>
                            </li>
                            <li>
                                <a href="{{route('temp.edulearn.course_details') }}" class="text-dark border">Software</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- //right side -->
        </div>
    </div>
</div>
<!-- //blog -->

@endsection