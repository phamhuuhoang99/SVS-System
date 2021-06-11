@extends('templates.menspa.master')
@section('title', 'Men Spa')
@section('content')
    <!-- banner -->
    <section class="inner-page-banner" id="home">
    </section>
    <!-- //banner -->
    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href={{ route("temp.menspa.index") }}>Trang Chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
        </ol>
    </div>
    <!-- //page details -->

    <!-- /single-page -->
    <section class="banner-bottom py-5">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Thông tin Salon</h3>
            <div class="single-w3pvt-page mt-md-5 mt-4 px-lg-5">
                <div class="content-sing-w3ls px-lg-5">
                    <img class="img-fluid" src={{ asset("templates/menspa/images/ban3.jpg") }} alt="">
                    <h4>Kiểu tóc mới</h4>
                    <p>Đá bay mệt mỏi mùa hè với 7 bước Shine Combo mới duy nhất tại Quán. Trọn gói chỉ 100K, hoàn toàn thư giãn và sau đó bạn sẽ đẹp trai hoàn hảo!.</p>
                    <p class="mt-3">Hãy để dàn Stylist đẳng cấp và Skinner Girl xinh đẹp giúp bạn toả sáng và tận hưởng những giây phút thư giãn sau ngày làm việc mệt nhoài!</p>
                    <ul class="w3ls_social_list list-unstyled mt-4">
                        <li class="lead">
                            Follow :
                        </li>
                        <li>
                            <a href="#" class="w3pvt_facebook">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#" class="w3pvt_twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w3pvt_dribble">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                        <li class="ml-2">
                            <a href="#" class="w3pvt_google">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </li>
                    </ul>



                </div>
                <div class="row my-lg-5 mt-3 mx-0">
                    <div class="col-lg-6 text-info pl-0">
                        <p>Quán tin tưởng & nỗ lực mỗi ngày để kết nối bàn tay tài hoa của người thợ Việt cùng quy trình khoa học 30 phút nhằm đem đến cho phái mạnh toàn cầu kiểu tóc đẹp trai, làn da khoẻ mạnh cuốn hút phái đẹp; tinh thần thư giãn để bứt phá trong sự nghiệp.</p>
                    </div>
                    <div class="col-lg-6 mt-3 team-img">
                        <div class="row">
                            <div class="col-6">
                                <img src={{ asset("templates/menspa/images/s1.jpg") }} class="img-fluid" alt="user-image">
                            </div>
                            <div class="col-6">
                                <img src={{ asset("templates/menspa/images/s2.jpg") }} class="img-fluid" alt="user-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-sec-w3ls">
                    <h4 class="leave-w3ls mb-5">3 Bình Luận</h4>
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="mr-3 img-fluid" src={{ asset("templates/menspa/images/sb1.jpg") }} alt="">

                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Phong Khoa</h5>
                                <p class="mt-3">Quán mang đến phong cách Hàn Quốc trẻ trung và đơn giản cho các bạn trẻ tại Sài Gòn.</p>
                            </div>
                        </li>
                        <li class="media my-5 ml-3">
                            <img class="mr-3 img-fluid" src={{ asset("templates/menspa/images/sb2.jpg") }} alt="">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Jacke Masito</h5>
                                <p class="mt-3">Quán mang đến phong cách Hàn Quốc trẻ trung và đơn giản cho các bạn trẻ tại Sài Gòn.</p>
                            </div>
                        </li>
                        <li class="media ml-5">
                            <img class="mr-3 img-fluid" src={{ asset("templates/menspa/images/sb3.jpg") }} alt="">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Lê Quy</h5>
                                <p class="mt-3">Quán mang đến phong cách Hàn Quốc trẻ trung và đơn giản cho các bạn trẻ tại Sài Gòn.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="comment-bottom w3pvt_mail_grid_right p-0 my-lg-5 my-4">
                    <h4 class="leave-w3ls mb-5">Phản hồi</h4>
                    <form class="w3ls-contact-fm" >


                        <div class="form-group">
                            <label>Viết lời nhắn</label>
                            <textarea class="form-control" name="Message" placeholder="" required=""></textarea>
                        </div>
                        <div class="row leave-comment">
                            <div class="col-lg-6 form-group">
                                <label>Họ tên</label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="Email" placeholder="" required="">
                            </div>
                        </div>

                        <button type="submit" class="btn read mt-3">Gửi</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- //single-page -->
@endsection
