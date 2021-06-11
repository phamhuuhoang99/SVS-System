@extends('admin.master.master')

@section('page-title', 'Tổng quan')

@section('content')
<div class="dashboard">
    @include('admin.dashboard.total-summary')
</div>
@endsection

@section('scripts')
@include('admin.dashboard.scripts')
@endsection