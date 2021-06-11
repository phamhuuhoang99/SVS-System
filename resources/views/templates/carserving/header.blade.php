<?php
    function active_menu($currentRouteName,$requestName) {
        if($currentRouteName==$requestName){
            return 'active';
        } else {
            return null;
        }
    }
?>
<!--header-->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1><a class="navbar-brand" href="{{ route('temp.carserving.index') }}">
                    <span>C</span>arserving
                </a></h1>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
                <span class="fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{active_menu(Route::currentRouteName(),'temp.carserving.index')}}">
                        <a class="nav-link" href="{{ route('temp.carserving.index') }}">Trang Chủ </a>
                    </li>
                    <li class="nav-item {{active_menu(Route::currentRouteName(),'temp.carserving.about')}}">
                        <a class="nav-link" href="{{ route('temp.carserving.about') }}">Về Chúng Tôi</a>
                    </li>
                    <li class="nav-item {{active_menu(Route::currentRouteName(),'temp.carserving.services')}}">
                        <a class="nav-link" href="{{ route('temp.carserving.services') }}">Dịch Vụ</a>
                    </li>
                </ul>
                <ul class="navbar-nav search-right mt-lg-0 mt-2">
                    <li class="nav-item mr-3" title="Search"><a href="#search" class="btn search-search">
                            <span class="fa fa-search" aria-hidden="true"></span></a></li>
                    <li class="nav-item"><a href="{{ route('temp.carserving.contact') }}"
                            class="btn btn-primary d-none d-lg-block btn-style mr-2">Liên Hệ</a></li>
                </ul>

                <!-- //toggle switch for light and dark theme -->
                <!-- search popup -->
                <div id="search" class="pop-overlay">
                    <div class="popup">
                        <form action="#" class="d-sm-flex">
                            <input type="search" placeholder="Tìm kiếm.." name="search" required="required" autofocus>
                            <button type="submit">Tìm</button>
                            <a class="close" href="#url">&times;</a>
                        </form>
                    </div>
                </div>
                <!-- /search popup -->
            </div>
            <!-- toggle  for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
        </nav>
    </div>
</header>
<!--/header-->
