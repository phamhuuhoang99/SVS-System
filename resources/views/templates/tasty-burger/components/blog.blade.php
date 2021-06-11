<!-- blog -->
<section class="blog_w3ls py-5" id="blog">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-section text-center mb-md-5 mb-4">
            {{-- <p class="w3ls-title-sub">Posts</p> --}}
            <h3 class="w3ls-title mb-3">Những bài <span>Blog</span> về chúng tôi</h3>
            <p class="titile-para-text mx-auto">
                1 số cảm nghĩ của những khách hàng thân thiết khi tận hưởng dịch vụ của chúng tôi
            </p>
        </div>
        <div class="row">
            <!-- blog grid -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0">
                    <div class="card-header p-0">
                        <a href={{ URL::route("temp.tasty-burger.single") }}>
                            <img src={{ URL::asset("templates/tasty-burger/images/blog1.png") }} class="card-img-bottom img-fluid" alt="image">
                        </a>
                        <img src={{ URL::asset("templates/tasty-burger/images/te1.jpg") }} alt="" class="img-blog rounded-circle img-fluid">
                    </div>
                    <div class="card-body text-center pt-5 mt-2">
                        <h5 class="blog-title card-title mb-2">
                            <a href={{ URL::route("temp.tasty-burger.single") }}>Bữa tối tại Tasty Burger</a>
                        </h5>
                        <div class="blog_w3icon border-top border-bottom py-1 mb-3">
                            <span>Magna Kictum - 12 Tháng 10, 2019</span>
                        </div>
                        <a href={{ URL::route("temp.tasty-burger.single") }} class="button-w3ls mt-4">
                            Tìm hiểu thêm <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- //blog grid -->
            <!-- blog grid -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0">
                    <div class="card-header p-0">
                        <a href={{ URL::route("temp.tasty-burger.single") }}>
                            <img src={{ URL::asset("templates/tasty-burger/images/blog2.png") }} class="card-img-bottom img-fluid" alt="image">
                        </a>
                        <img src={{ URL::asset("templates/tasty-burger/images/te2.jpg") }} alt="" class="img-blog rounded-circle img-fluid">
                    </div>
                    <div class="card-body text-center pt-5 mt-2">
                        <h5 class="blog-title card-title mb-2">
                            <a href={{ URL::route("temp.tasty-burger.single") }}>Tại sao lại chọn Tasty Burger?</a>
                        </h5>
                        <div class="blog_w3icon border-top border-bottom py-1 mb-3">
                            <span>Auris Jlan - 15 Tháng 10, 2019</span>
                        </div>
                        <a href={{ URL::route("temp.tasty-burger.single") }} class="button-w3ls active mt-4">
                            Tìm hiểu thêm <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- //blog grid -->
            <!-- blog grid -->
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="card border-0">
                    <div class="card-header p-0">
                        <a href={{ URL::route("temp.tasty-burger.single") }}>
                            <img src={{ URL::asset("templates/tasty-burger/images/blog3.png") }} class="card-img-bottom img-fluid" alt="image">
                        </a>
                        <img src={{ URL::asset("templates/tasty-burger/images/te3.jpg") }} alt="" class="img-blog rounded-circle img-fluid">
                    </div>
                    <div class="card-body text-center pt-5 mt-2">
                        <h5 class="blog-title card-title mb-2">
                            <a href={{ URL::route("temp.tasty-burger.single") }}>Những chiếc Burger tuyệt vời</a>
                        </h5>
                        <div class="blog_w3icon border-top border-bottom py-1 mb-3">
                            <span>Dictum Orta - 20 Tháng 11, 2019</span>
                        </div>
                        <a href={{ URL::route("temp.tasty-burger.single") }} class="button-w3ls mt-4">
                            Tìm hiểu thêm <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- //blog grid -->
        </div>
    </div>
</section>
<!-- //blog -->