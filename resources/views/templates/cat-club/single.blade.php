@extends('templates.cat-club.master')
@section('title', 'Cat Club')
@section('content')
    <!-- blog -->
    <div class="blog">
        <!-- container -->
        <div class="container">
            <div class="col-md-8 blog-top-left-grid">
                <div class="left-blog left-single">
                    <div class="blog-left">
                        <div class="single-left-left">
                            <p>Đăng bởi <a href="#">Admin</a> &nbsp;&nbsp; Tháng 2/2020 &nbsp;&nbsp; <a href="#">Bình luận
                                    (10)</a></p>
                            <img src="{{ asset('templates/cat-club/images/b1.jpg') }}" alt="" />
                        </div>
                        <div class="blog-left-bottom">
                            <p>Top 10 giống chó to nhất thế giới sẽ là bài viết tiếp theo mà Dogily muốn gởi đến các bạn sau
                                top 10 giống chó nhỏ xinh. Đây không chỉ là người bạn trung thành của con người mà còn có
                                thể giữ nhà, cứu hộ hay săn thú.
                            </p>
                        </div>
                        <div class="blog-left-bottom left-bottom">
                            <p>Giống chó to Great Dane. Với cân nặng tầm 45 – 54kg, Great Dane không phải là giống chó to
                                nhất thế giới. Tuy nhiên chúng lại nắm giữ kỷ lục thế giới về chiều cao của loài cún. Một
                                chú Great Dane trưởng thành cao tầm 71 – 76cm nếu đứng thẳng. Rất nhiều con còn vượt xa
                                chiều cao trung bình này.
                            </p>
                        </div>
                        <div class="blog-left-bottom left-bottom">
                            <p>Giống chó to Neapolitan Mastiff (Ngao Ý). Neapolitan Mastiff có khởi nguồn từ miền nam
                                Italia. Vì thuộc giống chó ngao nên không có gì khó hiểu khi Neapolitan Mastiff cũng nằm
                                trong danh sách các giống chó to có thân hình đồ sộ nhất.
                            </p>
                        </div>
                    </div>
                    <div class="response">
                        <h3>Bình luận</h3>
                        <div class="media response-info">
                            <div class="media-left response-text-left">
                                <a href="#">
                                    <img class="media-object" src="{{ asset('templates/cat-club/images/t1.jpg') }}" alt="">
                                </a>
                                <h5><a href="#">Admin</a></h5>
                            </div>
                            <div class="media-body response-text-right">
                                <p>Bài viết thật hữu ích.</p>
                                <ul>
                                    <li>22/12/2020</li>
                                    <li><a href="{{ route('temp.cat-club.single') }}">Phản hồi</a></li>
                                </ul>
                                <div class=" media response-info">
                                    <div class="media-left response-text-left">
                                        <a href="#">
                                            <img class="media-object" src="{{ asset('templates/cat-club/images/t2.jpg') }}"
                                                alt="">
                                        </a>
                                        <h5><a href="#">Admin</a></h5>
                                    </div>
                                    <div class="media-body response-text-right">
                                        <p>Cảm ơn nhé!.</p>
                                        <ul>
                                            <li>June 21, 2014</li>
                                            <li><a href="{{ route('temp.cat-club.single') }}">Phản hồi</a></li>
                                        </ul>
                                    </div>
                                    <div class=" clearfix">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                    <div class="opinion">
                        <h3>Bình luận</h3>
                        <form action="#">
                            <input type="text" name="Name" placeholder="Họ tên" required="">
                            <input type="email" name="Email" placeholder="Email" required="">
                            <textarea name="Message" placeholder="Nội dung" required=""></textarea>
                            <input type="submit" value="Gửi">
                        </form>
                    </div>
                </div>
            </div>
            @include('templates.cat-club.leftside')
            <div class="clearfix"> </div>
        </div>
        <!-- //container -->
    </div>
    <!-- //blog -->
@endsection
