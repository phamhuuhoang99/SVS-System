@extends('templates.mastery.master')
@section('title', 'Mastery')
@section('content')

    <section class="w3l-about-breadcrum">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
                <h2>Về Chúng Tôi</h2>
                <p><a href="{{route('temp.mastery.index')}}">Trang Chủ</a> &nbsp; / &nbsp; Về Chúng Tôi</p>
            </div>
        </div>
    </section>
    <!-- content-with-photo4 block -->
    <section class="w3l-content-with-photo-4">
        <div id="content-with-photo4-block" class="pt-5">
            <div class="container py-md-5">
                <div class="cwp4-two row">

                    <div class="cwp4-text col-lg-6">
                        <h3>Về Tập Đoàn Của Chúng Tôi </h3>
                        <p>Đào tạo phù hợp với mục tiêu học: Học để lấy Bằng, Học để đi làm, Học để biết, Học kỹ năng CNTT, Học nâng cao trình độ
                        </p>

                        <ul class="cont-4">
                            <li><span class="fa fa-check"></span>Trọng tâm & Dễ hiểu</li>
                            <li><span class="fa fa-check"></span>Quản Lý Thiết Kế và Doanh Nghiệp </li>
                            <li><span class="fa fa-check"></span>Trải Nghiệm Thiết Kế (XD)</li>
                            <li><span class="fa fa-check"></span>Truyền Thông Xã Hội và SEO </li>
                        </ul>
                    </div>
                    <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                        <img src="{{ asset('templates/mastery/images/g4.jpg') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content-with-photo4 block -->
    <section class="w3l-features-1">
        <!-- /features -->
        <div class="features py-4">
            <div class="container pb-5">

                <div class="fea-gd-vv row ">
                    <div class="float-lt feature-gd col-lg-4 col-sm-6">

                        <div class="icon-info">
                            <h5>Vào Những Năm 1998</h5>
                            <p>Sứ mệnh của Chúng tôi là nhắc nhở, động viên, cùng xây dựng kế hoạch học tập với sinh viên, và khi cần sẽ tìm mọi cách support.</p>
                        </div>

                    </div>
                    <div class="float-mid feature-gd col-lg-4 col-sm-6 mt-sm-0 mt-4">

                        <div class="icon-info">
                            <h5>Hơn 100 Cơ Sở</h5>
                            <p>Nhiều cơ sở học tập phục vụ cho số lượng lớn học viên</p>
                        </div>
                    </div>
                    <div class="float-rt feature-gd col-lg-4 col-sm-6 mt-lg-0 mt-4">

                        <div class="icon-info">
                            <h5>Có hơn 8,000 Học Viên</h5>
                            <p>Thu hút được số lượng lớn học viên trên cả nước</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- //features -->
    </section>
    <section class="w3l-feature-2">
        <div class="grid top-bottom py-5">
            <div class="container py-md-5">
                <div class="heading text-center mx-auto">
                    <h3 class="head">Tại Sao Bạn Nên Chọn Chúng Tôi</h3>
                    <p class="my-3 head">Hệ thống 3.600 mentors môn của Trường đến từ 21 nước và vùng lãnh thổ trên thế giới. Trong quá trình được học tập trực tiếp với mentors sinh viên được cọ sát và hiểu rất rõ nhu cầu của nhà tuyển dụng.</p>

                </div>
                <div class="middle-section row mt-5 pt-3">
                    <div class="three-grids-columns col-lg-3 col-sm-6 text-center">
                        <div class="icon"> <span class="fa fa-graduation-cap" aria-hidden="true"></span></div>
                        <h4>Nhận Học Bổng</h4>
                        <p>Mỗi học kì có rất nhiều loại học bổng cho các bạn Sinh viên có thành tích cao </p>
                    </div>
                    <div class="three-grids-columns col-lg-3 col-sm-6 mt-sm-0 mt-5 text-center">
                        <div class="icon"> <span class="fa fa-user" aria-hidden="true"></span></div>
                        <h4>Giảng Viên Chuyên Sâu</h4>
                        <p>Giảng viên là những chuyên gia hàng đầu về lĩnh vực đào tạo</p>
                    </div>
                    <div class="three-grids-columns col-lg-3 col-sm-6 mt-lg-0 mt-5 text-center">
                        <div class="icon"> <span class="fa fa-book" aria-hidden="true"></span></div>
                        <h4> Thư Viện & Cửa Hàng</h4>
                        <p>Thư viện phục vụ đa dạng các loại sách phù hợp nhu cầu học tập</p>
                    </div>
                    <div class="three-grids-columns col-lg-3 col-sm-6 mt-lg-0 mt-5 text-center">
                        <div class="icon"> <span class="fa fa-bed" aria-hidden="true"></span></div>
                        <h4>Nhà Trọ Tiện Nghi</h4>
                        <p>Khu nhà trọ thoáng mát, đầy đủ tiện nghi, giá phù hợp với Sinh viên</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="teams-1">
        <section class="teams text-center py-5" id="team">
            <div class="container py-xl-5 py-lg-3">
                <div class="heading text-center mx-auto">
                    <h3 class="head">Đội Ngũ Giảng Viên</h3>
                    <p class="my-3 head">Là những chuyên gia đầu ngành về lĩnh vực giảng dạy tại Việt Nam</p>

                </div>
                <div class="row inner-sec-w3ls-w3pvt-aminfo pt-5 mt-3">
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-grid text-center">
                            <div class="team-img">
                                <img class="img-fluid rounded" src="{{ asset('templates/mastery/images/t1.jpg') }}" alt="">
                            </div>
                            <div class="team-info">
                                <h4>Nguyễn Phong Khoa</h4>
                                <ul class="d-flex justify-content-center py-3 social-icons">
                                    <li class="effect-soc-team1">
                                        <a href="#">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team2">
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team3">
                                        <a href="#">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 top-tem">
                        <div class="team-grid text-center">
                            <div class="team-img">
                                <img class="img-fluid rounded" src="{{ asset('templates/mastery/images/t2.jpg') }}" alt="">
                            </div>
                            <div class="team-info">
                                <h4>Nguyễn Khánh Hạ</h4>
                                <ul class="d-flex justify-content-center py-3 social-icons">
                                    <li class="effect-soc-team1">
                                        <a href="#">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team2">
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team3">
                                        <a href="#">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  mt-sm-0 mt-5">
                        <div class="team-grid text-center">
                            <div class="team-img">
                                <img class="img-fluid rounded" src="{{ asset('templates/mastery/images/t3.jpg') }}" alt="">
                            </div>
                            <div class="team-info">
                                <h4>Trần Lê Quy</h4>
                                <ul class="d-flex justify-content-center py-3 social-icons">
                                    <li class="effect-soc-team1">
                                        <a href="#">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team2">
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team3">
                                        <a href="#">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 top-tem">
                        <div class="team-grid text-center">
                            <div class="team-img">
                                <img class="img-fluid rounded" src="{{ asset('templates/mastery/images/t4.jpg') }}" alt="">
                            </div>
                            <div class="team-info">
                                <h4>Anh Thư Lê</h4>
                                <ul class="d-flex justify-content-center py-3 social-icons">
                                    <li class="effect-soc-team1">
                                        <a href="#">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team2">
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team3">
                                        <a href="#">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- grids block 5 -->
@endsection
