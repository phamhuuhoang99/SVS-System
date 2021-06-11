@extends('templates.yoga-lite.master')
@section('title', 'Yoga Lite')
@section('content')
    <!--/banner-bottom -->
    <section class="banner-bottom py-5">

        <div class="container py-md-4 ">
            <div class="header-w3layouts text-center mb-5">
                <h3 class="title-w3pvt mb-5">Tự tạo niềm vui và thu nhập ổn định bằng cách mở phòng tập Yoga tại nhà</h3>
            </div>

            <div class="single-w3pvt-page mt-md-5 mt-4 px-lg-5">
                <div class="content-sing-w3layouts px-lg-5">
                    <img class="img-fluid" src="{{ asset('templates/yoga-lite/images/banner1.jpg') }}" alt="">
                    <h4>Không hẳn là hầu hết phụ nữ nhưng đại đa số đều mong muốn có cuộc sống an nhiên, tự tại sau khi có
                        con cái, muốn dành nhiều thời gian ở bên con, chăm sóc gia đình được chu đáo hơn.</h4>
                    <p>Nhưng cuộc sống luôn guồng quay quanh cơm áo gạo tiền, vậy làm sao để được mong muốn giản đơn như ở
                        trên kia? Đó là những chia sẻ của các học viên khi tới tư vấn về nghề Huấn luyện viên Yoga tại học
                        viên Yoga Lite.</p>
                    <p class="mt-3">Hiện đang là chủ một phòng tập Yoga nhỏ ở nhà với khoảng 20 người theo tập chia sẻ, vì
                        muốn dành nhiều thời gian cho con và lo cho gia đình nhưng không muốn là gánh nặng cho chồng và cũng
                        không thể ngồi không được. Chị chọn khoá đào tạo HLV Yoga để có thể vẫn làm được việc chăm con và
                        vẫn có thêm thu nhập. Ngoài ra chị còn có cơ hội để thoả mãn nhưng ước mơ của mình khi cùng hoà
                        quyện với Yoga mỗi ngày.</p>
                    <ul class="social_section_1info">
                        <li class="lead">
                            Chia sẻ :
                        </li>
                        <li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span> facebook</a></li>
                        <li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span> twitter</a></li>
                        <li class="google"><a href="#"><span class="fa fa-google-plus"></span> google</a></li>
                        <li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span> linkedin</a></li>
                    </ul>
                </div>
                <div class="row my-lg-5 my-3 mx-0">
                    <div class="col-md-6 text-info pl-0">
                        <p>HLV Yoga là một nghề và cần bạn phải yêu nghề, xác định gắn bó với nghề thì cơ hội thành công mới
                            tới được với bạn. Về phía chúng tôi – Học viên Yoga Lite luôn nỗ lực điều chỉnh giáo án, cung
                            cấp các giờ thực hành để bạn hoàn thiện khả năng giảng dạy của bạn. Chúng tôi sẵn sàng làm bệ
                            đỡ, bệ phóng tốt nhất cho bạn trên con đường Yoga.</p>
                    </div>
                    <div class="col-md-6 team-img">
                        <div class="row">
                            <div class="col-lg">
                                <img src="{{ asset('templates/yoga-lite/images/n2.jpg') }}" class="img-fluid"
                                    alt="user-image">
                            </div>
                            <div class="col-lg">
                                <img src="{{ asset('templates/yoga-lite/images/n3.jpg') }}" class="img-fluid"
                                    alt="user-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-sec-w3layouts">
                    <h4 class="leave-w3layouts">3 Bình luận</h4>
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="mr-3 img-fluid" src="{{ asset('templates/yoga-lite/images/te1.jpg') }}" alt="">

                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Anh Thư Lê</h5>
                                <p class="mt-3">Bài viết hữu ích, rất hay</p>
                            </div>
                        </li>
                        <li class="media my-5 ml-3">
                            <img class="mr-3 img-fluid" src="{{ asset('templates/yoga-lite/images/te2.jpg') }}" alt="">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Jacke Masito</h5>
                                <p class="mt-3">Bài viết hữu ích, rất hay</p>
                            </div>
                        </li>
                        <li class="media ml-5">
                            <img class="mr-3 img-fluid" src="{{ asset('templates/yoga-lite/images/te3.jpg') }}" alt="">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">William James</h5>
                                <p class="mt-3">Bài viết hữu ích, rất hay</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="comment-bottom w3pvt_mail_grid_right p-0 my-lg-5 my-4">
                    <h4 class="leave-w3layouts">Phản hồi</h4>
                    <form action="#">
                        <div class="form-group">
                            <label>Lời nhắn</label>
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

                        <button type="submit" class="btn submit mt-3">Gửi</button>
                    </form>
                </div>

            </div>
        </div>


    </section>
    <!-- //banner-bottom -->


    <!--/help-line -->
    @include('templates.yoga-lite.help')
    <!--//help-line -->
@endsection
