@extends('templates.fit-pro.master')
@section('title', 'Fit Pro')
@section('content')
<!----start-slide-bottom--->
<div class="second-head">
    <div class="container">
        <h2><a href="{{ route('temp.fit-pro.index') }}">
                <h5>Trang chủ </h5>
            </a> / BLOG</h2>
    </div>
</div>
<div class="container">
    <div class="row single-top">
        <div class="col-md-8">
            <div class="blog_box">
                <div class="blog_grid">
                    <h3 class="wow rollIn animated" data-wow-delay="0.4s"><a href="{{ route('temp.fit-pro.single') }}">Tập gym ở đâu tại Hà Nội đảm bảo được kết quả tốt nhất?</a></h3>
                    <a href="{{ route('temp.fit-pro.single') }}"><img src="{{ asset('templates/fit-pro/images/blog1.jpg') }}" class="img-responsive" alt="" /></a>
                    <div class="singe_desc">
                        <p>Tập gym ở đâu tại Hà Nội đảm bảo được kết quả tốt nhất? Chúng ta đều biết rằng tập gym là giải pháp mang tới một sức khỏe tốt.</p>
                        <div class="comments">
                            <ul class="links">
                                <li><i class="blog_icon1"> </i><br><span>14/08/2020</span></li>
                                <li><a href="#"><i class="blog_icon2"> </i><br><span>admin</span></a></li>
                                <li><a href="#"><i class="blog_icon3"> </i><br><span>1206</span></a></li>
                                <li><a href="#"><i class="blog_icon4"> </i><br><span>1206</span></a></li>
                            </ul>
                            <div class="btn_blog"><a href="{{ route('temp.fit-pro.single') }}"><img src="{{ asset('templates/fit-pro/images/read.png') }}"
                                        class="img-responsive" alt="" /></a></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog_box">
                <div class="blog_grid">
                    <h3 class="wow rollIn animated" data-wow-delay="0.4s"><a href="{{ route('temp.fit-pro.single') }}">Khi ngưng tập gym đột ngột cơ thể sẽ trở nên tồi tệ như thế nào? </a></h3>
                    <a href="{{ route('temp.fit-pro.single') }}"><img src="{{ asset('templates/fit-pro/images/blog2.jpg') }}" class="img-responsive" alt="" /></a>
                    <div class="singe_desc">
                        <p>Tập gym đều đặn là thói quen rất tốt, tuy nhiên nhiều bạn trẻ bắt đầu tập thì rất hăng hái nhưng chỉ được 1 thời gian.</p>
                        <div class="comments">
                            <ul class="links">
                                <li><i class="blog_icon1"> </i><br><span>14/08/2020</span></li>
                                <li><a href="#"><i class="blog_icon2"> </i><br><span>admin</span></a></li>
                                <li><a href="#"><i class="blog_icon3"> </i><br><span>1206</span></a></li>
                                <li><a href="#"><i class="blog_icon4"> </i><br><span>1206</span></a></li>
                            </ul>
                            <div class="btn_blog"><a href="{{ route('temp.fit-pro.single') }}"><img src="{{ asset('templates/fit-pro/images/read.png') }}"
                                        class="img-responsive" alt="" /></a></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog_box">
                <div class="blog_grid">
                    <h3 class="wow rollIn animated" data-wow-delay="0.4s"><a href="{{ route('temp.fit-pro.single') }}">Cách tập thể hình hiệu quả các gymer nhất định phải ghi nhớ. </a></h3>
                    <a href="{{ route('temp.fit-pro.single') }}"><img src="{{ asset('templates/fit-pro/images/blog3.jpg') }}" class="img-responsive" alt="" /></a>
                    <div class="singe_desc">
                        <p>Cách tập thể hình hiệu quả các gymer nhất định phải ghi nhớ Cách tập thể hình hiệu quả là mối...</p>
                        <div class="comments">
                            <ul class="links">
                                <li><i class="blog_icon1"> </i><br><span>14/08/2020</span></li>
                                <li><a href="#"><i class="blog_icon2"> </i><br><span>admin</span></a></li>
                                <li><a href="#"><i class="blog_icon3"> </i><br><span>1206</span></a></li>
                                <li><a href="#"><i class="blog_icon4"> </i><br><span>1206</span></a></li>
                            </ul>
                            <div class="btn_blog"><a href="{{ route('temp.fit-pro.single') }}"><img src="{{ asset('templates/fit-pro/images/read.png') }}"
                                        class="img-responsive" alt="" /></a></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="dc_pagination dc_paginationA dc_paginationA06 wow fadeInDownBig animated animated"
                data-wow-delay="0.4s">
                <li><a href="#" class="current">Đầu</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">19</a></li>
                <li><a href="#">20</a></li>
                <li><a href="#" class="current">Cuối</a></li>
            </ul>
        </div>
        @include('templates.fit-pro.rightside')
        <div class="clearfix"></div>
    </div>
</div>

@endsection