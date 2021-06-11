<!-- right side -->
<div class="col-lg-4 event-right mt-lg-0 mt-sm-5 mt-4">
    <div class="event-right1">
        <div class="search1">
            <form class="form-inline" action="#" method="post">
                <input class="form-control rounded-0 mr-sm-2" type="search" placeholder="Tìm kiếm ..."
                    aria-label="Search" required>
                <button class="btn bg-dark text-white rounded-0 mt-3" type="submit">Tìm kiếm</button>
            </form>
        </div>
        <div class="categories my-4 p-4 border">
            <h3 class="blog-title text-dark">Danh mục</h3>
            <ul>
                <li class="mt-3">
                    <i class="fas fa-check mr-2"></i>
                    <a href="{{route('temp.edulearn.single') }}">Ghi nhớ mọi thứ nhanh chóng, dễ dàng</a>
                </li>
                <li class="mt-3">
                    <i class="fas fa-check mr-2"></i>
                    <a href="{{route('temp.edulearn.single') }}">Làm việc hiệu quả hơn, cuộc sống thuận lợi hơn</a>
                </li>
                <li class="mt-3">
                    <i class="fas fa-check mr-2"></i>
                    <a href="{{route('temp.edulearn.single') }}">Tập trung làm việc với nguồn năng lượng cao</a>
                </li>
                <li class="mt-3">
                    <i class="fas fa-check mr-2"></i>
                    <a href="{{route('temp.edulearn.single') }}">Học cách kiểm soát được hoạt động của não bộ</a>
                </li>
                <li class="mt-3">
                    <i class="fas fa-check mr-2"></i>
                    <a href="{{route('temp.edulearn.single') }}">Biết cách khai thác và khai phá sức mạnh của não bộ mà trước đây bạn chưa thể làm được</a>
                </li>
                <li class="mt-3">
                    <i class="fas fa-check mr-2"></i>
                    <a href="{{route('temp.edulearn.single') }}">Có được một niềm tin vào chính mình luôn tự tin và thành công chinh phục được bộ não của mình</a>
                </li>
            </ul>
        </div>
        <div class="posts p-4 border">
            <h3 class="blog-title text-dark">Sự kiện</h3>
            <div class="posts-grids">
                <div class="row posts-grid mt-4">
                    <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                        <a href="{{route('temp.edulearn.single') }}">
                            <img src="{{ asset('templates/edulearn/images/c1.jpg') }}" alt=" " class="img-fluid" />
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                        <h4>
                            <a href="{{route('temp.edulearn.single') }}" class="text-dark">Lịch thi mới</a>
                        </h4>
                        <ul class="wthree_blog_events_list mt-2">
                            <li class="mr-2 text-dark">
                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i>15/05/18
                            </li>
                            <li>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <a href="{{route('temp.edulearn.single') }}" class="text-dark ml-2">Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row posts-grid mt-4">
                    <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                        <a href="{{route('temp.edulearn.single') }}">
                            <img src="{{ asset('templates/edulearn/images/c2.jpg') }}" alt=" " class="img-fluid" />
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                        <h4>
                            <a href="{{route('temp.edulearn.single') }}" class="text-dark">Khóa học hè</a>
                        </h4>
                        <ul class="wthree_blog_events_list mt-2">
                            <li class="mr-2 text-dark">
                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i>23/05/18
                            </li>
                            <li>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <a href="{{route('temp.edulearn.single') }}" class="text-dark ml-2">Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row posts-grid mt-4">
                    <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                        <a href="{{route('temp.edulearn.single') }}">
                            <img src="{{ asset('templates/edulearn/images/c3.jpg') }}" alt=" " class="img-fluid" />
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                        <h4>
                            <a href="{{route('temp.edulearn.single') }}" class="text-dark">Thông báo nhập học</a>
                        </h4>
                        <ul class="wthree_blog_events_list mt-2">
                            <li class="mr-2 text-dark">
                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i>13/06/18
                            </li>
                            <li>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <a href="{{route('temp.edulearn.single') }}" class="text-dark ml-2">Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tags mt-4 p-4 border">
            <h3 class="blog-title text-dark">Tags</h3>
            <ul class="mt-4">
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">thiết kế</a>
                </li>
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">phát triển</a>
                </li>
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">Mới nhất</a>
                </li>
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">Giá</a>
                </li>
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">Công cụ</a>
                </li>
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">Kinh doanh</a>
                </li>
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">không gian làm việc</a>
                </li>
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">Khóa học</a>
                </li>
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">Lợi ích</a>
                </li>
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">Nội dung</a>
                </li>
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">Bài báo</a>
                </li>
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">Nhíp ảnh</a>
                </li>
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">Nguyên cứu</a>
                </li>
                <li>
                    <a href="{{route('temp.edulearn.single') }}" class="text-dark border">Phần mềm</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- //right side -->