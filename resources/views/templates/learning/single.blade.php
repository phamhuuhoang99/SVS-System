@extends('templates.learning.master')
@section('title', 'Learning')
@section('content')
<!--single page start here-->
<div class="container">
    <div class="single">
        <div class="blog-to">

            <img class="img-responsive sin-on" src="{{ asset('templates/learning/images/b1.jpg') }}" alt="" />
            <div class="blog-top">

                <div class="top-blog">
                    <h5 class="fast">SVS - Sự lựa chọn cho mọi lứa tuổi, kỹ năng và trình độ </h5>
                    <p class="sed1">Đăng bởi <a href="#">Admin</a><a href="#"></a> | <a href="#">10
                            Bình luận</a></p>
                    <p class="sed2">Các khoá học được biểu diễn dưới dạng video, do giảng viên biên soạn từ trước và đưa lên hệ thống website edumall.vn.
                        Tổng thời gian trung bình mỗi khoá học kéo dài 3-4 tiếng, được chia thành nhiều bài giảng nhỏ có thời lượng từ 3-5 phút để học viên dễ tiếp nhận và vận dụng thực tiễn</p>
                    <p>Mua một lần học trọn đời.
                        Chỉ mất chi phí một lần để mua khoá học là bạn có thể sở hữu khoá học mãi mãi ngay cả khi khoá học được cập nhật nội dung mới. Khoá học không giới hạn thời gian học tập.</p>
                    <div class="col-md-6 md-in">
                        <ul class="grid-part">
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span><a href="#">
                                Chứng Chỉ Tốt Nhất</a></li>
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span><a href="#">
                                Tuyển chọn giáo viên</a></li>
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span><a href="#">
                                Hơn 4000 học viên</a></li>
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span><a
                                    href="#">Hổ trợ 24/7 </a></li>
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span><a href="#">Giải thưởng quốc gia
                            </a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 md-in">
                        <ul class="grid-part">
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span><a href="#">
                                Chứng Chỉ Tốt Nhất</a></li>
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span><a href="#">
                                Tuyển chọn giáo viên</a></li>
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span><a href="#">
                                Hơn 4000 học viên</a></li>
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span><a
                                    href="#">Hổ trợ 24/7 </a></li>
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span><a href="#">Giải thưởng quốc gia
                            </a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>



        <div class="single-middle">
            <h3>3 Bình luận</h3>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{ asset('templates/learning/images/c1.png') }}" alt="">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="#">Khánh Hạ</a></h4>
                    <p>Tôi là nhân viên văn phòng nên không có nhiều thời gian đi học thêm.Nhưng SVS cho tôi trải nghiệm học tập rất thoải mái, mở máy lên là học bất cứ lúc nào cũng được.</p>
                </div>
            </div>
            <div class="media in-media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{ asset('templates/learning/images/c2.png') }}" alt="">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="#">Thanh Thúy</a></h4>
                    <p>Mình đang theo học khóa Tiếng Anh, chương trình dạy rất thực tế và dễ hiểu cho người mất gốc.</p>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{ asset('templates/learning/images/c3.png') }}" alt="">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="#">Thanh Thùy</a></h4>
                    <p>Cám ơn SVS đã mang đến những khóa học chất lượng, tôi đã mua tới 6 khóa học bởi những kiến thức rất thực tế mà các bài học mang lại và chắc chắn sẽ sẽ còn mua thêm.</p>
                </div>
            </div>

        </div>
        <!---->
        <div class="single-bottom">

            <h2>Để lại Bình Luận</h2>
            <form action="#">
                <div class="col-md-4 comment">
                    <input type="text" name="Name" placeholder="Họ tên" required="">
                </div>
                <div class="col-md-4 comment">
                    <input type="text" name="Email" placeholder="Email">
                </div>
                <div class="col-md-4 comment">
                    <input type="text" name="Subject" placeholder="Chủ Đề">
                </div>
                <div class="clearfix"> </div>
                <textarea name="Message" placeholder="Lời Nhắn"></textarea>
                <input type="submit" value="Gửi">

            </form>
        </div>
    </div>
</div>
<!--single page end here-->
<!--banner end here-->

@endsection
