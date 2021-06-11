@extends('layouts.master.master')
@section('title', 'Tư vấn thiết kế website chuyên nghiệp | Chuẩn SEO - Giao diện đẹp')
@section('content')
    @include('layouts.featured.title')
    @include('layouts.featured.contentFeatured')

<!--Popup-->
@include('layouts.popup.info')
<!--End popup-->

@endsection
@section('scripts')
<script src="{{ asset ('js/homepage.js') }}?v={{ time() }}" type="text/javascript"></script>
@endsection
