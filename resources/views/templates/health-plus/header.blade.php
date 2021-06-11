<?php
    function active_menu($currentRouteName,$requestName) {
        if($currentRouteName==$requestName){
            return 'menu__item--current';
        } else {
            return null;
        }
    }
?>
<div class="main" id="home">
    <!-- banner -->
    <div class="header_agileinfo">
        <div class="w3_agileits_header_text">
            <ul class="top_agile_w3l_info_icons">
                <li><i class="fa fa-home" aria-hidden="true"></i>Quận Gò Vấp, Hồ Chí Minh.</li>
                <li class="second"><i class="fa fa-phone" aria-hidden="true"></i>035 618 5047</li>

                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:maria@example.com"> smartvietsolution@gmail.com</a></li>
            </ul>

        </div>
        <div class="agileinfo_social_icons">
            <ul class="agileits_social_list">
                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_rss"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>

    <div class="header-bottom">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <div class="logo">
                    <h1><a class="navbar-brand" href="{{route('temp.health-plus.index')}}"><span>H</span>ealth <i class="fa fa-plus" aria-hidden="true"></i> <p>Quality Care 4U</p></a></h1>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--sebastian">
                    <ul id="m_nav_list" class="m_nav menu__list">
                        <li class="m_nav_item menu__item {{active_menu(Route::currentRouteName(),'temp.health-plus.index')}}" id="m_nav_item_1"> <a href="{{route('temp.health-plus.index')}}" class="menu__link"> Trang Chủ </a></li>
                        <li class="m_nav_item menu__item {{active_menu(Route::currentRouteName(),'temp.health-plus.about')}}" id="moble_nav_item_2"> <a href="{{route('temp.health-plus.about')}}" class="menu__link"> Về Chúng Tôi </a> </li>
                        <li class="m_nav_item menu__item {{active_menu(Route::currentRouteName(),'temp.health-plus.appointment')}}" id="moble_nav_item_4"> <a href="{{route('temp.health-plus.appointment')}}" class="menu__link">Đặt Lịch  </a> </li>
                        <li class="m_nav_item menu__item {{active_menu(Route::currentRouteName(),'temp.health-plus.gallery')}}" id="moble_nav_item_5"> <a href="{{route('temp.health-plus.gallery')}}" class="menu__link">Phòng Ban</a> </li>
                        <li class="m_nav_item menu__item {{active_menu(Route::currentRouteName(),'temp.health-plus.contact')}}" id="moble_nav_item_6"> <a href="{{route('temp.health-plus.contact')}}" class="menu__link"> Liên Hệ </a> </li>
                    </ul>
                </nav>

            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>