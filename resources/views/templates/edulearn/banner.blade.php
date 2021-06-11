<?php
    function active_menu($currentRouteName,$requestName) {
        if($currentRouteName==$requestName){
            return 'active';
        } else {
            return null;
        }
    }
?>
    <!-- navigation -->
    <div class="navigation-w3ls">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-nav">
            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item {{active_menu(Route::currentRouteName(),'temp.edulearn.index')}}">
                        <a class="nav-link text-white" href="{{route('temp.edulearn.index') }}">Trang chủ
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item {{active_menu(Route::currentRouteName(),'temp.edulearn.about')}}">
                        <a class="nav-link text-white" href="{{route('temp.edulearn.about') }}">Về chúng tôi</a>
                    </li>
                    <li class="nav-item dropdown {{active_menu(Route::currentRouteName(),'temp.edulearn.language')}}
                        {{active_menu(Route::currentRouteName(),'temp.edulearn.business')}}
                        {{active_menu(Route::currentRouteName(),'temp.edulearn.software')}}
                        {{active_menu(Route::currentRouteName(),'temp.edulearn.communication')}}
                        {{active_menu(Route::currentRouteName(),'temp.edulearn.social_media')}}
                        {{active_menu(Route::currentRouteName(),'temp.edulearn.photography')}}
                        {{active_menu(Route::currentRouteName(),'temp.edulearn.course_details')}}">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Khóa học</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('temp.edulearn.language') }}">Ngoại Ngữ</a>
                            <a class="dropdown-item" href="{{route('temp.edulearn.communication') }}">Giao tiếp</a>
                            <a class="dropdown-item" href="{{route('temp.edulearn.business') }}">Kinh doanh</a>
                            <a class="dropdown-item" href="{{route('temp.edulearn.software') }}">Phần mềm</a>
                            <a class="dropdown-item" href="{{route('temp.edulearn.social_media') }}">Truyền thông</a>
                            <a class="dropdown-item" href="{{route('temp.edulearn.photography') }}">Nhíp ảnh</a>
                            <a class="dropdown-item" href="{{route('temp.edulearn.course_details') }}">Chi tiết khóa học</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('temp.edulearn.form') }}">Đăng ký ngay</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown
                        {{active_menu(Route::currentRouteName(),'temp.edulearn.form')}}
                        {{active_menu(Route::currentRouteName(),'temp.edulearn.faq')}}
                    ">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Xem thêm
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('temp.edulearn.form') }}">Tuyển sinh</a>
                            <a class="dropdown-item" href="{{route('temp.edulearn.faq') }}">Câu hỏi thường gặp</a>
                        </div>
                    </li>
                    <li class="nav-item {{active_menu(Route::currentRouteName(),'temp.edulearn.blog')}}">
                        <a class="nav-link text-white" href="{{route('temp.edulearn.blog') }}">Blog</a>
                    </li>
                    <li class="nav-item {{active_menu(Route::currentRouteName(),'temp.edulearn.gallery')}}">
                        <a class="nav-link text-white" href="{{route('temp.edulearn.gallery') }}">Bộ sưu tập</a>
                    </li>
                    <li class="nav-item {{active_menu(Route::currentRouteName(),'temp.edulearn.contact')}}">
                        <a class="nav-link text-white" href="{{route('temp.edulearn.contact') }}">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- //navigation -->