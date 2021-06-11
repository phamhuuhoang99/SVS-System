<?php
    if(!function_exists('active_menu')){
        function active_menu($currentRouteName,$requestName) {
            if($currentRouteName==$requestName){
                return 'li-active';
            } else {
                return null;
            }
        }
    }
?>
<header id="header_outer">
    <div class="container-fluid">
        <div class="header_section">
            <div class="logo">
                <a href="/">
                    <img class="img-logo" src="{{asset('img/logob.png')}}" alt="logo ">
                </a>
            </div>
            <nav class="nav" id="nav">
                <ul class="toggle">
                    <li><a href="{{route('feature')}}">Tính năng</a></li>
                    <li><a href="{{route('themes')}}">Kho giao diện</a></li>
                    <li><a href="{{route('price')}}">Bảng giá</a></li>
                </ul>
                <ul class="nav-main">
                    <li><a class="{{active_menu(Route::currentRouteName(),'feature')}}" href="{{route('feature')}}">Tính năng</a></li>
                    <li><a class="{{active_menu(Route::currentRouteName(),'themes')}}" href="{{route('themes')}}">Kho giao diện</a></li>
                    <li><a class="{{active_menu(Route::currentRouteName(),'price')}}" href="{{route('price')}}">Bảng giá</a></li>
                </ul>
                <a href="/dang-ky" class="btn-test">Dùng thử</a>
            </nav>
            <a class="res-nav_click animated wobble wow" href="javascript:void(0)"><i class="fa-bars"></i></a>
        </div>
    </div>
</header>