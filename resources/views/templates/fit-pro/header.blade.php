<?php
    function active_menu($currentRouteName,$requestName) {
        if($currentRouteName==$requestName){
            return 'active';
        } else {
            return null;
        }
    }
?>
<div class="banner @if(!$check) two @endif" id="home">
    <div class="header-bottom">
     <div class="fixed-header">
        <div class="container">
            <div class="logo">
                <a href="{{ route('temp.fit-pro.index') }}"><h1>Fit<span>Pro</span></h1></a>
            </div>
            <span class="menu"> </span>
            <div class="top-menu">
            <nav class="navigation">
                <ul class="cl-effect-16">
                    <li><a class="{{active_menu(Route::currentRouteName(),'temp.fit-pro.index')}}" href="{{ route('temp.fit-pro.index') }}">Trang chủ</a></li>
                    <li><a class="{{active_menu(Route::currentRouteName(),'temp.fit-pro.about')}}" href="{{ route('temp.fit-pro.about') }}">Về chúng tôi</a></li>
                    <li><a class="{{active_menu(Route::currentRouteName(),'temp.fit-pro.trainers')}}" href="{{ route('temp.fit-pro.trainers') }}">Trainers</a></li>
                    <li><a class="{{active_menu(Route::currentRouteName(),'temp.fit-pro.blog')}}" href="{{ route('temp.fit-pro.blog') }}">Blog</a></li>
                    <li><a class="{{active_menu(Route::currentRouteName(),'temp.fit-pro.contact')}}" href="{{ route('temp.fit-pro.contact') }}">Liên hệ</a></li>
                <ul>
            </nav>
            </div>
        <!-- script for menu -->
                <script>
                $( "span.menu" ).click(function() {
                  $( ".top-menu" ).slideToggle( "slow", function() {
                    // Animation complete.
                  });
                });
            </script>
            <!-- script for menu -->
            <script>
        $(document).ready(function() {
             var navoffeset=$(".header-bottom").offset().top;
             $(window).scroll(function(){
                var scrollpos=$(window).scrollTop();
                if(scrollpos >=navoffeset){
                    $(".header-bottom").addClass("fixed");
                }else{
                    $(".header-bottom").removeClass("fixed");
                }
             });

        });
        </script>
            <div class="clearfix"></div>
        </div>
     </div>
</div>
@if($check)
    <div class="slider">
         <div id="cbp-fwslider" class="cbp-fwslider">
            <ul>
                <li><a href="#"><img src="{{ asset('templates/fit-pro/images/slide3.png') }}" alt="img01"/></a></li>
                <li><a href="#"><img src="{{ asset('templates/fit-pro/images/slide2.png') }}" alt="img02"/></a></li>
                <li><a href="#"><img src="{{ asset('templates/fit-pro/images/slide3.png') }}" alt="img03"/></a></li>
                <li><a href="#"><img src="{{ asset('templates/fit-pro/images/slide2.png') }}" alt="img04"/></a></li>
                <li><a href="#"><img src="{{ asset('templates/fit-pro/images/slide4.png') }}" alt="img05"/></a></li>
            </ul>
        </div>
    </div>
    @endif
</div>
<link rel="stylesheet" type="text/css" href="{{asset('templates/fit-pro/css/component.css') }}" />
<script src="{{asset('templates/fit-pro/js/modernizr.custom.js') }}"></script>
<script src="{{asset('templates/fit-pro/js/jquery.cbpFWSlider.min.js') }}"></script>
<script>
    $( function() {
        $( '#cbp-fwslider' ).cbpFWSlider();

    } );
</script>