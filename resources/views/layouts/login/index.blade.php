@extends('layouts.master.master')
@section('title', 'Tư vấn thiết kế website chuyên nghiệp | Chuẩn SEO GG - Giao diện đẹp')
@section('content')

<!--Content-->
@include('layouts.login.content')
<!--End content-->

<!--Popup-->
@include('layouts.popup.info')
@include('layouts.popup.error')
<!--End popup-->

@endsection
@section('scripts')
<script src="{{ asset ('js/homepage.js') }}?v={{ time() }}" type="text/javascript"></script>
<script src="{{ asset ('js/login.js') }}?v={{ time() }}" type="text/javascript"></script>
@endsection