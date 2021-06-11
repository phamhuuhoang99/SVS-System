@extends('templates.befit.master')
@section('title', 'Befit')
@section('content')
    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('temp.befit.index') }}"">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Chi tiết Blog </li>
        </ol>
    </div>
    <!-- //page details -->

    <!-- single -->
    <div class="blog-w3l py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 text-bl text-center font-weight-bold">Chế độ ăn khi tập gym giảm cân bài bản, khoa học dành cho nữ giới</h3>
            <p class="title-sub mb-sm-5 mb-4 text-center">Nếu bạn chọn tập gym để giảm cân thì bạn cần đặc biệt lưu ý tới chế độ ăn uống, vì nó chiếm 70% vai trò quyết định quá trình giảm cân có thành công hay không. </p>
            <div class="row blog-content pt-lg-3">
                <!-- left side -->
                <div class="col-lg-8 blog_section">
                    <div class="card border-0">
                        <a href="{{route('temp.befit.single') }}"">
                            <img class="card-img-top" src="images/blog2.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <div class="row border-bottom pb-3">
                                <div class="col-sm-6 col-4 perso-wthree">
                                    <h6 class="blog-first text-bl">
                                        <span class="fa fa-user mr-2"></span>Thành Thúy
                                    </h6>
                                </div>
                                <div class="col-sm-6 col-8 info-commt text-right">
                                    <ul class="blog_list">
                                        <li>16/10/2020</li>
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
                            <a href="{{route('temp.befit.single') }}"" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Nguyên tắc xây dựng chế độ ăn khi tập gym giảm cân</a>
                            <p class="card-text">Những quy tắc cần có khi xây dựng chế độ ăn tập gym giảm cân bạn cần nắm rõ gồm: </p>
                        </div>
                    </div>
                    <a href="{{route('temp.befit.single') }}"" class="single-text text-bl font-weight-light my-3"></a>
                    <p>Để giảm cân hiệu quả, bạn cần hạn chế dung nạp chất béo vào trong cơ thể, hạn chế thực phẩm chiên xào, đồ nước. Và cũng nên hạn chế uống nước ngọt hay đồ có gas… </p>
                    <p class="my-3">Bổ sung thực phẩm cần thiết cho cơ thể như chất xơ, protein trong bữa ăn hàng ngày. Chia nhỏ bữa ăn để giúp cơ thể hấp thụ tối đa dinh dưỡng. Không được bỏ bữa. </p>
                    <a href="{{route('temp.befit.single') }}"" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">#Chế độ tập luyện</a>
                    <div class="row">
                        <div class="col-md-6">
                            <p> Hãy tập luyện đều đặn các bài tập theo từng bộ phận khác nhau để giảm mỡ, giảm cân và tăng cơ. </p>
                        </div>
                        <div class="col-md-6">
                            <p>Việc tập luyện cũng rất quan trọng, một chế độ ăn đem lại kết quả tốt là nó cần kết hợp với 1 chế độ tập luyện khoa học, phù hợp.</p>
                        </div>
                    </div>
                    <a href="{{route('temp.befit.single') }}"" class="single-text text-bl font-weight-light mt-4">Chế độ ăn khi tập gym giảm cân cho nữ giới trong 7 ngày</a>
                    <p class="my-3">Một chế độ ăn uống khoa học cùng thời gian tập luyện phù hợp, chắc chắn các nàng sẽ có được một thân hình hoàn hảo với đường con quyến rũ. </p>

                    <div class="comment-top mt-5">
                        <h4>Bình luận</h4>
                        <div class="media">
                            <img src="{{ asset('templates/befit/images/te1.jpg')}}" alt="" class="img-fluid" />
                            <div class="media-body pt-xl-2 pl-3">
                                <h5 class="mb-2">Thúy Quỳnh</h5>
                                <p>Bài viết thực sự hữu ích.</p>

                                <div class="media my-5">
                                    <a class="d-flex pr-3" href="#">
                                        <img src="{{ asset('templates/befit/images/te2.jpg')}}" alt="" class="img-fluid" />
                                    </a>
                                    <div class="media-body pt-xl-2">
                                        <h5 class="mb-2">Hữu Hoàng</h5>
                                        <p>Bài viết hay, có giúp tôi cải thiện vóc dáng.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-top mt-5">
                        <h4>Để lại Bình luận</h4>
                        <div class="comment-bottom agileinfo_mail_grid_right">
                            <form action="#">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="Name" placeholder="Họ tên" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="Email" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="Subject" placeholder="Chủ đề"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="Message" placeholder="Lời nhắn..."
                                        required=""></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary submit">Gửi</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //left side -->
                <!-- right side -->
                @include('templates.befit.rightside')
                <!-- //right side -->
            </div>
        </div>
    </div>
    <!-- //blog -->

@endsection
