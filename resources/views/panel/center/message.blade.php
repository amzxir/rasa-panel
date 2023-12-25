@extends('layouts.app')
@section('title' , 'مرکز پیام')
@section('breadcrumb' , 'مرکز پیام')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            @livewire('panel.center.message')
        </div>
    </div>
</div>
@endsection