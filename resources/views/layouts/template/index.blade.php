@extends('layouts.master.master')
@section('title', 'Tư vấn thiết kế website chuyên nghiệp | Chuẩn SEO - Giao diện đẹp')
@section('content')
    @include('layouts.template.banner')
    @include('layouts.template.introduce')
    @include('layouts.template.theme')
<!--Slider-->
    @include('layouts.home.slider')
    <script src="{{ asset ('js/slider.js') }}?v={{ time() }}" type="text/javascript"></script>
<!--End slider-->
<!-- About -->
    @include('layouts.home.about')
<!-- End about -->
<!--Popup-->
    @include('layouts.popup.info')
<!--End popup-->
@endsection
@section('scripts')
<script src="{{ asset ('js/homepage.js') }}?v={{ time() }}" type="text/javascript"></script>
@endsection