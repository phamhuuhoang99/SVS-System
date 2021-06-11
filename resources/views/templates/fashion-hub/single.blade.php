@extends('templates.fashion-hub.master')
@section('title','Trung tâm thời trang thương mại điện tử trực tuyến')
@section('content')
<div class="ibanner_w3 pt-sm-5 pt-3">
    <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
        <span>f</span>ashion
        <span>h</span>ub</h4>
</div>
<!-- //inner banner -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href={{ route("temp.fashion-hub.index") }}>Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Single Page</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<section class="single_blog_wthree py-5">
    <div class="container">
        <h5 class="head_agileinfo text-center text-capitalize pb-5">
            <span>Single</span> Page</h5>
        <div class="single-page-agile-info">
            <!-- /movie-browse-agile -->
            <div class="row show-top-grids">
                <div class="col-md-7 single-left">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Tiêu đề Blog</h5>
                            <p class="card-text">” Nhân viên SVS luôn làm cho chúng tôi biết về thực hành tốt nhất và các giải pháp công nghệ sẵn có, và họ đã thành thạo trong việc tích hợp chúng vào các dự án của chúng tôi. chuyên gia tư vấn của họ cũng dễ dàng để làm việc với các dự án hoàn thành đúng thời hạn và hệ thống của họ tiếp tục chạy tốt nếu có lỗi họ sẽ sửa miễn phí.”.</p>
                            <p class="card-text">
                                <small class="text-muted">Cập nhật 3 phút trước</small>
                            </p>
                        </div>
                        <img class="card-img-bottom" src={{ asset("templates/fashion-hub/img/blg1.jpg") }} alt="Card image cap">
                    </div>
                    <div class="song-grid-right">
                        <div class="share">
                            <h5>Share</h5>
                            <div class="single-agile-shar-buttons">
                                <ul>
                                    <li>
                                        <div class="fb-like fb_iframe_widget" data-href="https://www.facebook.com/smartvietsolution" data-layout="button_count" data-action="like"
                                            data-size="small" data-show-faces="false" data-share="false" fb-xfbml-state="rendered"
                                            fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;href=;layout=button_count&amp;locale=en_GB&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small">
                                            <span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;">
                                                <iframe name="f2d4069dd7c5844" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true"
                                                    scrolling="no" title="fb:like Facebook Social Plugin" src=""
                                                    style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe>
                                            </span>
                                        </div>
                                        <script>
                                            (function (d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src =
                                                    "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));
                                        </script>
                                    </li>
                                    <li>
                                        <div class="fb-share-button fb_iframe_widget" data-href="https://www.facebook.com/smartvietsolution" data-layout="button_count" data-size="small"
                                            data-mobile-iframe="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=31&amp;href=;layout=button_count&amp;locale=en_GB&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small">
                                            <span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;">
                                                <iframe name="fb1666b41482e8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true"
                                                    scrolling="no" title="fb:share_button Facebook Social Plugin" src=""
                                                    style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe>
                                            </span>
                                        </div>
                                    </li>
                                    {{-- <li class="news-twitter">
                                        <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered"
                                            title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.85cf65311617c356fe9237c3e6c10afb.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=w3layouts&amp;show_count=false&amp;show_screen_name=true&amp;size=m&amp;time=1502102422605"
                                            style="position: static; visibility: visible; width: 126px; height: 20px;" data-screen-name="w3layouts"></iframe>
                                        <script async="" src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li>
                                    <li>
                                        <iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-mention-button twitter-mention-button-rendered twitter-tweet-button"
                                            title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.85cf65311617c356fe9237c3e6c10afb.en.html#dnt=false&amp;id=twitter-widget-1&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Faug-2016%2F24-08-2016%2Fone_movies%2Fweb%2Fsingle.html&amp;screen_name=w3layouts&amp;size=m&amp;time=1502102422608&amp;type=mention"
                                            style="position: static; visibility: visible; width: 136px; height: 20px;" data-screen-name="w3layouts"></iframe>
                                        <script async="" src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li> --}}
                                    <li>
                                        <!-- Place this tag where you want the +1 button to render. -->
                                        <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 32px; height: 20px;">
                                            <iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;"
                                                tabindex="0" vspace="0" width="100%" id="I1_1502102853328" name="I1_1502102853328"
                                                src="https://apis.google.com/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=https%3A%2F%2Fp.w3layouts.com&amp;url=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Faug-2016%2F24-08-2016%2Fone_movies%2Fweb%2Fsingle.html&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.xh47SggJVmI.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCNnAKKXzFeIiJTiMA4Bq29frxjzuA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I1_1502102853328&amp;parent=https%3A%2F%2Fp.w3layouts.com&amp;pfname=&amp;rpctoken=33261381"
                                                data-gapiattached="true" title="G+"></iframe>
                                        </div>

                                        <!-- Place this tag after the last +1 button tag. -->
                                        <script type="text/javascript">
                                            (function () {
                                                var po = document.createElement('script');
                                                po.type = 'text/javascript';
                                                po.async = true;
                                                po.src = 'https://apis.google.com/js/platform.js';
                                                var s = document.getElementsByTagName('script')[0];
                                                s.parentNode.insertBefore(po, s);
                                            })();
                                        </script>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="all-comments p-sm-5 p-3 mt-5">
                        <div class="wthree-form-left">
                            <!-- contact form grid -->
                            <div class="contact-top1">
                                <h5 class="text-dark mb-4 text-capitalize">Đăng ký nhận thông tin ưu đãi</h5>
                                <form action="#" method="get" class="f-color">
                                    <div class="form-group">
                                        <label for="contactusername">Tên</label>
                                        <input type="text" class="form-control" id="contactusername" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="contactemail">Email</label>
                                        <input type="email" class="form-control" id="contactemail" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="contactcomment">Nội dung</label>
                                        <textarea class="form-control" rows="5" id="contactcomment" required=""></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-block">Gửi</button>
                                </form>
                            </div>
                            <!--  //contact form grid ends here -->
                        </div>
                        <div class="media py-5">
                            <img class="mr-3" src={{ asset("templates/fashion-hub/img/m.png") }} alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Anh Phong Khoa</h5>
                                <p>“SVS đã thiết lập, duy trì, phát triển và toàn bộ hệ thống CNTT của chúng tôi để tôi có thể giữ cho tâm trí của tôi miễn phí để tập trung vào chỉ làm kinh doanh. Tôi hạnh phúc với các dịch vụ của họ hơn. Bất kỳ vấn đề công ty chúng tôi đáp ứng liên quan đến cơ sở hạ tầng CNTT, trang web, dữ liệu và an ninh hệ thống, ngay lập tức tôi nghĩ về SVS”.</p>
                                <div class="media mt-5">
                                    <a class="pr-3" href="#">
                                        <img src={{ asset("templates/fashion-hub/img/f.png") }} alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Chị YiSan</h5>
                                       <p> “SVS có một đội ngũ phi thường. Tôi đã học được những điều hay và chuyên nghiệp khi làm việc với đội ngũ của họ. Họ cung cấp dịch vụ nhanh chóng và chuyên nghiệp. Tôi thực sự hạnh phúc khi có được một cơ hội để làm việc với họ trong quá khứ cũng như trong tương lai..”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <img class="mr-3" src={{ asset("templates/fashion-hub/img/m.png") }} alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Anh Trần Lê Quy</h5>
                               <p> “Chúng tôi đã tìm thấy bề rộng của kiến thức SVS của là vô giá. Ngoài ra, SVS đã được với chúng tôi để đối phó với trường hợp khẩn cấp kỹ thuật của chúng tôi, cho dù vào buổi sáng sớm hoặc muộn vào ban đêm. Chúng tôi chắc chắn đánh giá cao phản hồi và độ tin cậy của họ trong kinh doanh có nhịp độ nhanh của chúng tôi.”</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Search Widget -->
                    <div class="card mb-4">
                        <h5 class="card-header">Tìm kiếm</h5>
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm theo...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Tìm Kiếm</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Categories Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Danh mục</h5>
                        <div class="card-body">
                            <div class="row">
                                <ul class="w3-tag2">
                                    <li>
                                        <a href={{ route("temp.fashion-hub.shop") }}>amet</a>
                                    </li>
                                    <li>
                                        <a href="#">placerat</a>
                                    </li>
                                    <li>
                                        <a href={{ route("temp.fashion-hub.shop") }}>Proin </a>
                                    </li>
                                    <li>
                                        <a href="#">vehicula</a>
                                    </li>
                                    <li>
                                        <a href="#">vehicula</a>
                                    </li>
                                    <li>
                                        <a href={{ route("temp.fashion-hub.shop") }}>diam</a>
                                    </li>
                                    <li>
                                        <a href={{ route("temp.fashion-hub.shop") }}>amet</a>
                                    </li>
                                    <li>
                                        <a href="#">placerat</a>
                                    </li>
                                    <li>
                                        <a href={{ route("temp.fashion-hub.shop") }}>Proin </a>
                                    </li>
                                    <li>
                                        <a href="#">vehicula</a>
                                    </li>
                                    <li>
                                        <a href="#">vehicula</a>
                                    </li>
                                    <li>
                                        <a href={{ route("temp.fashion-hub.shop") }}>velit</a>
                                    </li>
                                    <li>
                                        <a href={{ route("temp.fashion-hub.shop") }}>felis</a>
                                    </li>
                                    <li>
                                        <a href="#">mauris</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Phụ tùng</h5>
                        <div class="card-body">
                            “Phải chi chúng tôi gặp được họ sớm hơn thì chúng tôi có thể mở rộng kinh doanh thành chuỗi chuyên nghiệp từ lâu với các công nghệ tiên tiến quản lý trên di động… ”.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
