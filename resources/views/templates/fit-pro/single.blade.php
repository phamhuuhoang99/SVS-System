@extends('templates.fit-pro.master')
@section('title', 'Fit Pro')
@section('content')
    <!----start-slide-bottom--->
    <div class="second-head">
        <div class="container">
            <h2>
                <a href="{{ route('temp.fit-pro.index') }}">
                    <h5>Trang Chủ</h5>
                </a> / Chi tiết Blog
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row single-top">
            <div class="col-md-8">
                <div class="blog_box">
                    <div class="blog_grid">
                        <h3 class="wow rollIn animated" data-wow-delay="0.4s">Chế độ ăn khi tập gym giảm cân bài bản, khoa
                            học dành cho nữ giới</h3>
                        <a href="{{ route('temp.fit-pro.single') }}"><img
                                src="{{ asset('templates/fit-pro/images/blog1.jpg') }}" class="img-responsive" alt="" /></a>
                        <div class="singe_desc">
                            <p class="wow fadeInUpBig animated animated" data-wow-delay="0.4s">Để giảm cân hiệu quả, bạn cần
                                hạn chế dung nạp chất béo vào trong cơ thể, hạn chế thực phẩm chiên xào, đồ nước. Và cũng
                                nên hạn chế uống nước ngọt hay đồ có gas…</p>
                            <p>Bổ sung thực phẩm cần thiết cho cơ thể như chất xơ, protein trong bữa ăn hàng ngày. Chia nhỏ
                                bữa ăn để giúp cơ thể hấp thụ tối đa dinh dưỡng. Không được bỏ bữa.</p>
                            <p>Việc tập luyện cũng rất quan trọng, một chế độ ăn đem lại kết quả tốt là nó cần kết hợp với 1
                                chế độ tập luyện khoa học, phù hợp. Hãy tập luyện đều đặn các bài tập theo từng bộ phận khác
                                nhau để giảm mỡ, giảm cân và tăng cơ. </p>
                            <p class="wow fadeInUpBig animated animated" data-wow-delay="0.4s">Nếu bạn chọn tập gym để giảm
                                cân thì bạn cần đặc biệt lưu ý tới chế độ ăn uống, vì nó chiếm 70% vai trò quyết định quá
                                trình giảm cân có thành công hay không. Để giúp việc giảm cân của bạn đạt kết quả tốt nhất,
                                bài viết dưới đây chúng tôi sẽ cung cấp tới bạn chế độ ăn khi tập gym giảm cân một cách khoa
                                học, bài bản nhất.</p>
                            <div class="comments">
                                <ul class="links">
                                    <li><i class="blog_icon1"> </i><br><span>14/07/2020</span></li>
                                    <li><a href="#"><i class="blog_icon2"> </i><br><span>admin</span></a></li>
                                    <li><a href="#"><i class="blog_icon3"> </i><br><span>1206</span></a></li>
                                    <li><a href="#"><i class="blog_icon4"> </i><br><span>1206</span></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('templates.fit-pro.rightside')
            <div class="clearfix"></div>
            <div class="single_grid2">
                <h4 class="tz-title-4 tzcolor-blue">
                    <p class="tzweight_Bold">Bình luận</p>
                </h4>
                <ul class="list">
                    <li>
                        <div class="col-md-2 preview">
                            <a href="#"><img src="{{ asset('templates/fit-pro/images/co.png') }}" class="img-responsive"
                                    alt=""></a>
                        </div>
                        <div class="col-md-10 data">
                            <div class="title"><a href="#">Trainer</a><br><span class="m_14">14/07/2020</span></div>
                            <p>Bài viết thực sự hữu ích cho tôi, giúp tôi cải thiện được sức khỏe</p>
                            <h5 class="m_26"> <a href="#">Phản hồi</a></h5>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
            <div class="single">
                <div class="leave">
                    <h4>Để lại bình luận</h4>
                </div>
                <form id="commentform" class="wow fadeInRight animated" data-wow-delay="0.4s">
                    <p class="comment-form-author-name"><label for="author">Họ tên</label>
                        <input id="author" name="author" type="text" value="" size="30" aria-required="true">
                    </p>
                    <p class="comment-form-email">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="text" value="" size="30" aria-required="true">
                    </p>
                    <p class="comment-form-comment">
                        <label for="comment">Bình luận</label>
                        <textarea></textarea>
                    </p>
                    <div class="clearfix"></div>
                    <p class="form-submit">
                        <input name="submit" type="submit" id="submit" value="Gửi">
                    </p>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

@endsection
