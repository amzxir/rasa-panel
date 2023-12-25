@extends('layouts.app')
@section('title' , 'روش ارسال')
@section('breadcrumb' , 'روش ارسال')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            @livewire('panel.send.create')
        </div>
    </div>
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            @livewire('panel.send.manage')
        </div>
    </div>
</div>
@endsection