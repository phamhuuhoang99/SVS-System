@extends('templates.health-plus.master')
@section('title', 'Health Plus')
@section('content')
    <!-- banner1 -->
    <div class="banner1 jarallax">
        <div class="container">
        </div>
    </div>

    <div class="services-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{ route('temp.health-plus.index') }}">Trang Chủ</a><i>|</i></li>
                <li>Single Page</li>
            </ul>
        </div>
    </div>
    <!-- //banner1 -->
    <!-- icons -->
    <div class="banner-bottom" id="about">
        <div class="container">
            <h2 class="w3_heade_tittle_agile">Phòng Ngừa và Điều Trị Viêm Khớp Cổ Chân</h2>
            <p class="sub_t_agileits">Thấu hiểu được Khách hàng</p>
            <div class="single-grid">
                <div class="col-md-8 w3ls-blog-left">
                    <div class="w3-blog-left-grid">
                        <div class="w3ls-blog-leftl">
                            <h4> 12 <span>Tháng 9</span></h4>
                            <a href="#"><i class="fa fa-tags" aria-hidden="true"></i>10</a>
                        </div>
                        <div class="w3ls-blog-leftr">
                            <img src="{{ asset('templates/health-plus/images/banner2.jpg') }}" alt=" "
                                class="img-responsive" />
                            <p>Phương pháp “ Tiểu châm đao” có tác động trực tiếp vào vị trí tổn thương của người bệnh nhằm
                                nới lỏng các mô mềm, các gân cơ dây chằng đang bị chèn ép, kết dính gây ra viêm, căng cứng
                                gân cơ khiến cho người bệnh đau đớn, khó cử động. Phương pháp này là phương pháp xâm lấn tối
                                thiểu nên rất an toàn cho người bệnh, bệnh nhân khi áp dụng phương pháp tân châm cũng không
                                cần phải nằm viện vì thế thuận tiện cho người bệnh.
                            </p>
                            <ul>
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Hữu Hoàng</a></li>
                                <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>0 Tags</a></li>
                                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>10 Bình luận</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="admin-text">
                            <h5>Đăng bởi Admin</h5>
                            <div class="admin-text-left">
                                <a href="#"><img src="{{ asset('templates/health-plus/images/ad1.jpg') }}" alt="" /></a>
                            </div>
                            <div class="admin-text-right">
                                <p>Viêm, Thoái hóa khớp là tình trạng hư hỏng phần sụn đệm giữa hai đầu xương, kèm theo phản
                                    ứng viêm và sự giảm sút lượng dịch nhầy giúp bôi trơn, do đó gây ra triệu chứng đau và
                                    cứng khớp.</p>
                                <span>Xem bài viết khác của:<a href="#"> Admin </a></span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="response">
                            <h4>Bình luận</h4>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="{{ asset('templates/health-plus/images/ad.jpg') }}"
                                            alt="" />
                                    </a>
                                    <h5><a href="#">Admin</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Bài viết hay, ý nghĩa.</p>
                                    <ul>
                                        <li>15/12/2020</li>
                                        <li><a href="{{ route('temp.health-plus.single') }}">Phản hồi</a></li>
                                    </ul>
                                    <div class="media response-info">
                                        <div class="media-left response-text-left">
                                            <a href="#">
                                                <img class="media-object"
                                                    src="{{ asset('templates/health-plus/images/ad1.jpg') }}" alt="" />
                                            </a>
                                            <h5><a href="#">Admin</a></h5>
                                        </div>
                                        <div class="media-body response-text-right">
                                            <p>Cảm ơn nhiều !!.</p>
                                            <ul>
                                                <li>May 05, 2017</li>
                                                <li><a href="{{ route('temp.health-plus.single') }}">Phản hồi</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="coment-form">
                            <h4>Để lại bình luận</h4>
                            <form action="#">
                                <input type="text" name="name" placeholder="Họ tên " required="">
                                <input type="email" name="email" placeholder="Email*" required="">
                                <input type="text" name="website" placeholder="Website" required="">
                                <textarea name="message" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'Bình luận...';}"
                                    required="">Bình luận...</textarea>
                                <input type="submit" value="Bình Luận">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 w3-agile-blog-right">
                    <h3>Danh mục</h3>
                    <ul>
                        <li><a href="#">Sức khỏe</a></li>
                        <li><a href="#">Bệnh xã hội</a></li>
                        <li><a href="#">Bệnh về mắt</a></li>
                        <li><a href="#">Bệnh về phụ khoa</a></li>
                        <li><a href="#">Bệnh thần kinh</a></li>
                        <li><a href="#">Viêm da liễu</a></li>
                    </ul>
                    <div class="agile-info-recent">
                        <h3>Bài viết gần đây</h3>
                        <div class="w3ls-recent-grids">
                            <div class="w3l-recent-grid">
                                <div class="wom">
                                    <a href="#"><img src="{{ asset('templates/health-plus/images/t1.jpg') }}" alt=" "
                                            class="img-responsive" /></a>
                                </div>
                                <div class="wom-right">
                                    <h4><a href="#">Cách chữa viêm khớp VAI khỏi lâu dài</a></h4>
                                    <p>Làm sao để đẩy lùi các cơn đau nhức, tê buốt khó chịu kéo dài? </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="w3l-recent-grid">
                                <div class="wom">
                                    <a href="#"><img src="{{ asset('templates/health-plus/images/t2.jpg') }}" alt=" "
                                            class="img-responsive" /></a>
                                </div>
                                <div class="wom-right">
                                    <h4><a href="#">Nguyên nhân và cách điều trị bệnh viêm đa khớp</a></h4>
                                    <p>Viêm đa khớp là bệnh viêm mãn tính ảnh hưởng đến toàn thân đặc biệt là gây sưng,
                                        nóng, đỏ, đau, cứng khớp và giới hạn cử động. </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="w3l-recent-grid">
                                <div class="wom">
                                    <a href="#"><img src="{{ asset('templates/health-plus/images/t3.jpg') }}" alt=" "
                                            class="img-responsive" /></a>
                                </div>
                                <div class="wom-right">
                                    <h4><a href="#">Chữa bệnh viêm khớp tận gốc</a></h4>
                                    <p>Để biết cách Chữa bệnh viêm đa khớp thì Viêm khớp là một bệnh viêm xảy ra ở các khớp
                                        gây tổn thương màng hoạt dịch, sụn khớp và đầu xương dưới sụn.</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3-agile-poll">
                        <h3>Thăm dò ý kiến</h3>
                        <div class="progress p">
                            <div class="progress-bar bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 60%;">
                                60%
                            </div>
                        </div>
                        <div class="progress p">
                            <div class="progress-bar bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 80%;">
                                80%
                            </div>
                        </div>
                        <div class="progress p">
                            <div class="progress-bar bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 90%;">
                                90%
                            </div>
                        </div>
                        <div class="progress p">
                            <div class="progress-bar bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 40%;">
                                40%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- //single -->
        </div>
    </div>
    <!-- icons -->
@endsection
