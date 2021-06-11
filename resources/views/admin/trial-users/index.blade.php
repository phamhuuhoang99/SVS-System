@extends('admin.master.master')

@section('page-title', 'Tài khoản dùng thử')

@section('content')
<div class="trial-users">
    @include('admin.trial-users.table')
</div>
@endsection

@section('scripts')
<script src={{ URL::asset("js/admin/trial-users.js") }} type="text/javascript"></script>
@endsection