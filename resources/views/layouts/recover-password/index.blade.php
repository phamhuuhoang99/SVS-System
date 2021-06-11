@extends('layouts.master.master')
@section('title', 'Tư vấn thiết kế website chuyên nghiệp | Chuẩn SEO GG - Giao diện đẹp')
@section('content')

<!--Content-->
@if ($type === "sendEmail")
    @include('layouts.recover-password.sendEmail')
@elseif ($type === "createPassword")
    @include('layouts.recover-password.createPassword')
@endif
<!--End content-->

<!--Popup-->
<!--Popup-->
@include('layouts.popup.sendEmailSuccess')
@include('layouts.popup.resetPasswordSuccess')
@include('layouts.popup.info')
<!--End popup-->

@endsection
@section('scripts')
<script src="{{ asset ('js/homepage.js') }}?v={{ time() }}" type="text/javascript"></script>
<script src="{{ asset ('js/recover-password.js') }}?v={{ time() }}" type="text/javascript"></script>
@endsection