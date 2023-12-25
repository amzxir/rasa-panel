@extends('layouts.app')
@section('title' , 'مدیریت کاربران')
@section('breadcrumb' , 'مدیریت کاربران')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card">
        @livewire('panel.user.manage')
    </div>
</div>


@endsection