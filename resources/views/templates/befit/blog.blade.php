@extends('templates.befit.master')
@section('title', 'Befit')
@section('content')
<!-- page details -->
<div class="breadcrumb-agile">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('temp.befit.index') }}"">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Blog</li>
    </ol>
</div>
<!-- //page details -->

<!-- blog -->
<div class="blog-w3l py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 text-bl text-center font-weight-bold">Blog</h3>
        <p class="title-sub mb-sm-5 mb-4 text-center">Blog – nơi cung cấp kiến thức chính thống về Fitness dành cho cộng đồng</p>
        <div class="row blog-content pt-lg-3">
            <!-- left side -->
            <div class="col-lg-8 blog_section">
                <div class="card border-0">
                    <a href="{{route('temp.befit.single') }}"">
                        <img class="card-img-top" src="{{asset('templates/befit/images/blog1.jpg') }}" alt="">
                    </a>
                    <div class="card-body">
                        <div class="row border-bottom pb-3">
                            <div class="col-sm-6 col-4 perso-wthree">
                                <h6 class="blog-first text-bl">
                                    <span class="fa fa-user mr-2"></span>Adrian Lie
                                </h6>
                            </div>
                            <div class="col-sm-6 col-8 info-commt text-right">
                                <ul class="blog_list">
                                    <li>16/12/2020</li>
                                    <li class="mx-3">
                                        <a href="#">
                                            <span class="fa fa-heart-o mr-1"></span>30
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-comments-o mr-1"></span>18
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{route('temp.befit.single') }}"" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Tập gym ở đâu tại Hà Nội đảm bảo được kết quả tốt nhất?
                           </a>
                        <p class="card-text">Tập gym ở đâu tại Hà Nội đảm bảo được kết quả tốt nhất? Chúng ta đều biết rằng tập gym là giải pháp mang tới một sức khỏe tốt.</p>
                        <a href="{{route('temp.befit.single') }}"" class="btn blog-button mt-4">Xem thêm</a>
                    </div>
                </div>
                <div class="card border-0 my-4">
                    <a href="{{route('temp.befit.single') }}"">
                        <img class="card-img-top" src="{{asset('templates/befit/images/blog2.jpg') }}" alt="">
                    </a>
                    <div class="card-body">
                        <div class="row border-bottom pb-3">
                            <div class="col-sm-6 col-4 perso-wthree">
                                <h6 class="blog-first text-bl">
                                    <span class="fa fa-user mr-2"></span>Mario Spe
                                </h6>
                            </div>
                            <div class="col-sm-6 col-8 info-commt text-right">
                                <ul class="blog_list">
                                    <li>25/10/2020</li>
                                    <li class="mx-3">
                                        <a href="#">
                                            <span class="fa fa-heart-o mr-1"></span>20
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-comments-o mr-1"></span>22
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{route('temp.befit.single') }}"" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Khi ngưng tập gym đột ngột cơ thể sẽ trở nên tồi tệ như thế nào?</a>
                        <p class="card-text">Tập gym đều đặn là thói quen rất tốt, tuy nhiên nhiều bạn trẻ bắt đầu tập thì rất hăng hái nhưng chỉ được 1 thời gian.</p>
                        <a href="{{route('temp.befit.single') }}"" class="btn blog-button mt-4">Xem thêm</a>
                    </div>
                </div>
                <div class="card border-0">
                    <a href="{{route('temp.befit.single') }}"">
                        <img class="card-img-top" src="{{asset('templates/befit/images/blog4.jpg') }}" alt="">
                    </a>
                    <div class="card-body">
                        <div class="row border-bottom pb-3">
                            <div class="col-sm-6 col-4 perso-wthree">
                                <h6 class="blog-first text-bl">
                                    <span class="fa fa-user mr-2"></span>Bob Fra
                                </h6>
                            </div>
                            <div class="col-sm-6 col-8 info-commt text-right">
                                <ul class="blog_list">
                                    <li>07/09/2020</li>
                                    <li class="mx-3">
                                        <a href="#">
                                            <span class="fa fa-heart-o mr-1"></span>28
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-comments-o mr-1"></span>23
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{route('temp.befit.single') }}"" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Cách tập thể hình hiệu quả các gymer nhất định phải ghi nhớ</a>
                        <p class="card-text">Cách tập thể hình hiệu quả các gymer nhất định phải ghi nhớ Cách tập thể hình hiệu quả là mối</p>
                        <a href="{{route('temp.befit.single') }}"" class="btn btn-primary blog-button mt-4">Xem thêm</a>
                    </div>
                </div>
                <div class="card border-0 mt-4">
                    <a href="{{route('temp.befit.single') }}"">
                        <img class="card-img-top" src="{{asset('templates/befit/images/blog3.jpg') }}" alt="">
                    </a>
                    <div class="card-body">
                        <div class="row border-bottom pb-3">
                            <div class="col-sm-6 col-4 perso-wthree">
                                <h6 class="blog-first text-bl">
                                    <span class="fa fa-user mr-2"></span>Paul Moli
                                </h6>
                            </div>
                            <div class="col-sm-6 col-8 info-commt text-right">
                                <ul class="blog_list">
                                    <li>06/08/2020</li>
                                    <li class="mx-3">
                                        <a href="#">
                                            <span class="fa fa-heart-o mr-1"></span>32
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-comments-o mr-1"></span>20
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{route('temp.befit.single') }}"" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Bạn nữ tập gym cần nắm chắc những kinh nghiệm sau.</a>
                        <p class="card-text">Với các bạn gái, việc tập gym chắc chắn sẽ gặp nhiều khó khăn nam giới. Nhưng tác dụng mà gym mang lại cho sức khỏe và vóc dáng khiến chị em luôn tìm tới bộ môn này.</p>
                        <a href="{{route('temp.befit.single') }}"" class="btn blog-button mt-4">Xem thêm</a>
                    </div>
                </div>
                <div aria-label="Page navigation example">
                    <ul class="pagination mt-5">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Đầu</a>
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
                            <a class="page-link" href="#">Cuối</a>
                        </li>
                    </ul>
                </div>
                <!-- //left side -->
            </div>
            <!-- right side -->
                @include('templates.befit.rightside')
            <!-- //right side -->
        </div>
    </div>
</div>
<!-- //blog -->
@endsection