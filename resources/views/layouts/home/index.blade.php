@extends('layouts.master.master')
@section('title', 'Tư vấn thiết kế website chuyên nghiệp | Chuẩn SEO GG - Giao diện đẹp')
@section('content')

<!--Valuable-->
@include('layouts.home.valuable')
<!--End valuable-->

<!--Customer benefit-->
@include('layouts.home.customer')
<!--End customer benefit-->

<!-- Templates -->
@include('layouts.home.templates.index')
<!-- End templates -->

<!-- Marketing -->
@include('layouts.home.marketing')
<!-- End marketing -->

<!-- Navtabs -->
@include('layouts.home.navtabs')
<!-- End navtabs -->

<!--Slider-->
@include('layouts.home.slider')
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
<script src="{{ asset ('js/navtabs.js') }}?v={{ time() }}" type="text/javascript"></script>
<script src="{{ asset ('js/slider.js') }}?v={{ time() }}" type="text/javascript"></script>
@endsection