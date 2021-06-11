@extends('layouts.master.master')
@section('title', 'Tư vấn thiết kế website chuyên nghiệp | Chuẩn SEO - Giao diện đẹp')
@section('content')
    @include('layouts.themes.banner')
    @include('layouts.themes.introduce')
    @include('layouts.themes.themes', [
        'title'=>'Thiết kế web thời trang',
        'img1'=>'/img/fashion/theFashionHub.jpg', 'sub1'=>'The Fashion Hub', 'hrefreal1'=>'kho-giao-dien/fashion-hub',
        'img2'=>'/img/fashion/theDownyShoes.jpg', 'sub2'=>'The Downy Shoes', 'hrefreal2'=>'kho-giao-dien/downyshoes',
        'img3'=>'/img/fashion/theEliteShoppy.jpg', 'sub3'=>'The Elite Shoppy', 'hrefreal3'=>'kho-giao-dien/eliteshoppy',
        'img4'=>'/img/fashion/theClassicStyle.jpg', 'sub4'=>'The Classic Style', 'hrefreal4'=>'kho-giao-dien/classicstyle'
    ])
    @include('layouts.themes.themes', [
        'title'=>'Thiết kế web làm đẹp',
        'img1'=>'/img/cosmetic/beautyspa.jpg', 'sub1'=>'The Beauty Spa', 'hrefreal1'=>'kho-giao-dien/beautyspa',
        'img2'=>'/img/cosmetic/pedicure.jpg', 'sub2'=>'Peridure Beauty Spa', 'hrefreal2'=>'kho-giao-dien/pedicure',
        'img3'=>'/img/cosmetic/menspa.jpg', 'sub3'=>'Men Spa', 'hrefreal3'=>'kho-giao-dien/menspa',
        'img4'=>'/img/cosmetic/hairsalon.jpg', 'sub4'=>'Hair Salon', 'hrefreal4'=>'kho-giao-dien/hairsalon'
    ])
    @include('layouts.themes.themes', [
        'title'=>'Thiết kế web khách sạn',
        'img1'=>'/img/themes/luxus.jpg', 'sub1'=>'Luxus', 'hrefreal1'=>'kho-giao-dien/luxus',
        'img2'=>'/img/themes/mug-hotel.jpg', 'sub2'=>'Mug Hotel', 'hrefreal2'=>'kho-giao-dien/mug-hotel',
        'img3'=>'/img/themes/hotel-deluxe.jpg', 'sub3'=>'Hotel Deluxe', 'hrefreal3'=>'kho-giao-dien/hotel-deluxe',
        'img4'=>'/img/themes/hotels-starter.jpg', 'sub4'=>'Hotels Starter', 'hrefreal4'=>'kho-giao-dien/hotels-starter'
    ])
    @include('layouts.themes.themes', [
        'title'=>'Thiết kế web nội thất',
        'img1'=>'/img/furniture/interior-home.jpg','sub1'=>'Interior Home', 'hrefreal1'=>'kho-giao-dien/interior-home',
        'img2'=>'/img/furniture/lighting.jpg', 'sub2'=>'Lighting', 'hrefreal2'=>'kho-giao-dien/lighting',
        'img3'=>'/img/furniture/inwardly.jpg', 'sub3'=>'Inwardly', 'hrefreal3'=>'kho-giao-dien/inwardly',
        'img4'=>'/img/furniture/amenity.jpg', 'sub4'=>'Amenity','hrefreal4'=>'kho-giao-dien/amenity'
    ])
    @include('layouts.themes.themes', [
        'title'=>'Thiết kế web gym',
        'img1'=>'/img/electronic/yoga-lite.jpg', 'sub1'=>'Yoga Lite', 'hrefreal1'=>'kho-giao-dien/yoga-lite',
        'img2'=>'/img/electronic/fitness-freak.jpg', 'sub2'=>'Fitness Freak', 'hrefreal2'=>'kho-giao-dien/fitness-freak',
        'img3'=>'/img/electronic/befit.jpg', 'sub3'=>'Befit', 'hrefreal3'=>'kho-giao-dien/befit',
        'img4'=>'/img/electronic/fit-pro.jpg', 'sub4'=>'Fit Pro', 'hrefreal4'=>'kho-giao-dien/fit-pro'
    ])
    @include('layouts.themes.themes', [
        'title'=>'Thiết kế web giáo dục',
        'img1'=>'/img/watch/mastery.jpg', 'sub1'=>'Mastery', 'hrefreal1'=>'kho-giao-dien/mastery',
        'img2'=>'/img/watch/skill.jpg', 'sub2'=>'Skill', 'hrefreal2'=>'kho-giao-dien/skill',
        'img3'=>'/img/watch/learning.jpg', 'sub3'=>'Learning', 'hrefreal3'=>'kho-giao-dien/learning',
        'img4'=>'/img//watch/edulearn.jpg', 'sub4'=>'Edu Learn', 'hrefreal4'=>'kho-giao-dien/edulearn'
    ])
    @include('layouts.themes.themes', [
        'title'=>'Thiết kế web thú cưng',
        'img1'=>'/img/family/best-pet.jpg', 'sub1'=>'Best Pet', 'hrefreal1'=>'kho-giao-dien/best-pet',
        'img2'=>'/img/family/pet-sitter.jpg', 'sub2'=>'Pet Sitter', 'hrefreal2'=>'kho-giao-dien/pet-sitter',
        'img3'=>'/img/family/cat-life.jpg', 'sub3'=>'Cat Life', 'hrefreal3'=>'kho-giao-dien/cat-life',
        'img4'=>'/img/family/cat-club.jpg', 'sub4'=>'Cat Club', 'hrefreal4'=>'kho-giao-dien/cat-club'
    ])
    @include('layouts.themes.themes', [
        'title'=>'Thiết kế web sức khỏe',
        'img1'=>'/img/jewelry/child-care.jpg', 'sub1'=>'Child Care', 'hrefreal1'=>'kho-giao-dien/child-care',
        'img2'=>'/img/jewelry/clinic.jpg', 'sub2'=>'New Clinic', 'hrefreal2'=>'kho-giao-dien/clinic',
        'img3'=>'/img/jewelry/health-plus.jpg', 'sub3'=>'Health Plus', 'hrefreal3'=>'kho-giao-dien/health-plus',
        'img4'=>'/img/jewelry/dental-health.jpg', 'sub4'=>'Dental Health','hrefreal4'=>'kho-giao-dien/dental-health'
    ])
    @include('layouts.themes.themes', [
        'title'=>'Thiết kế web xế cưng',
        'img1'=>'/img/book/carserving.jpg', 'sub1'=>'Car Service', 'hrefreal1'=>'kho-giao-dien/carserving',
        'img2'=>'/img/book/car-clean.jpg', 'sub2'=>'Car Clean', 'hrefreal2'=>'kho-giao-dien/car-clean',
        'img3'=>'/img/book/auto-car.jpg', 'sub3'=>'Auto Car', 'hrefreal3'=>'kho-giao-dien/auto-car',
        'img4'=>'/img/book/auto-show.jpg', 'sub4'=>'Auto Show', 'hrefreal4'=>'kho-giao-dien/auto-show'
    ])
    @include('layouts.themes.themes', [
        'title'=>'Thiết kế web nhà hàng',
        'img1'=>'/img/themes/baking.jpg', 'sub1'=>'Baking', 'hrefreal1'=>'kho-giao-dien/baking',
        'img2'=>'/img/themes/cake-bakery.jpg', 'sub2'=>'Cake Bakery', 'hrefreal2'=>'kho-giao-dien/cake-bakery',
        'img3'=>'/img/themes/tasty-burger.jpg', 'sub3'=>'Tasty Burger', 'hrefreal3'=>'kho-giao-dien/tasty-burger',
        'img4'=>'/img/themes/food-chef.jpg', 'sub4'=>'Food Chef', 'hrefreal4'=>'kho-giao-dien/food-chef'
    ])
    @include('layouts.themes.otherthemes')

<!--Popup-->
@include('layouts.popup.info')
<!--End popup-->

@endsection

@section('scripts')
<script src="{{ asset ('js/homepage.js') }}?v={{ time() }}" type="text/javascript"></script>
@endsection