<?php
    function active_menu($currentRouteName,$requestName) {
        if($currentRouteName==$requestName){
            return 'active';
        } else {
            return null;
        }
    }
?>
<header class="w3l-header">
    <div class="hero-header-11">
        <div class="hero-header-11-content">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
                    <a class="navbar-brand" href="{{route('temp.skill.index') }}"><img src="{{ asset('templates/skill/images/logo-icon.png') }}" alt="" />Skill</a>
                    <!-- if logo is image enable this
				<a class="navbar-brand" href="#index.html">
						<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
				</a> -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
						<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					</button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{active_menu(Route::currentRouteName(),'temp.skill.index')}}">
                                <a class="nav-link" href="{{route('temp.skill.index') }}">Trang Chủ  <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{active_menu(Route::currentRouteName(),'temp.skill.about')}}">
                                <a class="nav-link" href="{{route('temp.skill.about') }}">Về Chúng Tôi</a>
                            </li>
                            <li class="nav-item {{active_menu(Route::currentRouteName(),'temp.skill.services')}}">
                                <a class="nav-link" href="{{route('temp.skill.services') }}">Dịch Vụ</a>
                            </li>
                            <li class="nav-item {{active_menu(Route::currentRouteName(),'temp.skill.contact')}}">
                                <a class="nav-link" href="{{route('temp.skill.contact') }}">Liên Hệ</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- //header -->