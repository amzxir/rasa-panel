@extends('layouts.app')
@section('title' , 'تنظیمات سایت')
@section('breadcrumb' , 'تنظیمات سایت')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            @livewire("panel.symbol.create")
        </div>
    </div>
</div>
@endsection