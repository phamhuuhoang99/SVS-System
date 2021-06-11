@extends('admin.master.master')

@section('page-title', 'Thông tin liên lạc')

@section('content')
<div class="contacts">
    @include('admin.contacts.table')
</div>
@endsection

@section('scripts')
<script src={{ URL::asset("js/admin/contacts.js") }} type="text/javascript"></script>
@endsection