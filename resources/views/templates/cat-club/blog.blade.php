@extends('templates.cat-club.master')
@section('title', 'Cat Club')
@section('content')
    <!-- blog -->
    <div class="blog">
        <!-- container -->
        <div class="container">
            <div class="blog-top-grids">
                <div class="col-md-8 blog-top-left-grid">
                    <div class="left-blog">
                        <div class="blog-left">
                            <div class="blog-left-left">
                                <p>Đăng bởi <a href="#">Admin</a> &nbsp;&nbsp; 02/12/2020 &nbsp;&nbsp; <a href="#">Bình luận
                                        (10)</a></p>
                                <a href="{{ route('temp.cat-club.single') }}"><img
                                        src="{{ asset('templates/cat-club/images/b1.jpg') }}" alt="" /></a>
                            </div>
                            <div class="blog-left-right">
                                <a href="{{ route('temp.cat-club.single') }}">Top 10 giống chó to bảo vệ cho ngôi nhà của
                                    bạn </a>
                                <p>Top 10 giống chó to nhất thế giới sẽ là bài viết tiếp theo mà Dogily muốn gởi đến các bạn
                                    sau top 10 giống chó nhỏ xinh. Đây không chỉ là người bạn trung thành của con người mà
                                    còn có thể giữ nhà, cứu hộ hay săn thú.
                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="blog-left">
                            <div class="blog-left-left">
                                <p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; 22/12/2020 &nbsp;&nbsp; <a href="#">Bình
                                        luận (10)</a></p>
                                <a href="{{ route('temp.cat-club.single') }}"><img
                                        src="{{ asset('templates/cat-club/images/b2.jpg') }}" alt="" /></a>
                            </div>
                            <div class="blog-left-right wow fadeInRight animated animated" data-wow-delay=".5s">
                                <a href="{{ route('temp.cat-club.single') }}">Top 8 giống chó lông xù được nuôi nhiều nhất
                                    tại nước ta</a>
                                <p>Chó là loài vật trung thành và gần gũi với con người. Tại Việt Nam, có rất nhiều giống
                                    cún cảnh được các “sen” rước về dinh để bầu bạn với mình. Trong phạm vi bài viết này,
                                    Dogily sẽ giới thiệu những giống chó lông xù phổ biến và được ưa thích nhất ở nước ta
                                    nhé.
                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="blog-left">
                            <div class="blog-left-left">
                                <p>Đăng bởi <a href="#">Admin</a> &nbsp;&nbsp; 02/11/2020 &nbsp;&nbsp;
                                    <a href="#">Bình luận (10)</a>
                                </p>
                                <a href="{{ route('temp.cat-club.single') }}"><img
                                        src="{{ asset('templates/cat-club/images/b3.jpg') }}" alt="" /></a>
                            </div>
                            <div class="blog-left-right">
                                <a href="{{ route('temp.cat-club.single') }}">Top 10 giống mèo thông minh nhất hành tinh</a>
                                <p>Mèo không dễ huấn luyện như chó. Mèo cũng không đảm nhận vai trò truy tìm tội phạm, phát
                                    hiện chất cấm như chó có thể làm. Nhưng theo nhiều kết quả khảo sát, thực tế chỉ số
                                    thông minh của loài mèo lại cao hơn cả cún. Mời các bạn cùng chúng tôi điểm danh top 10
                                    giống mèo thông minh nhất nhé.
                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                @include('templates.cat-club.leftside')
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //container -->
    </div>
    <!-- //blog -->
@endsection
