@extends('layouts.app')
@section('title' , 'تعریف کمیسیون از خرید')
@section('breadcrumb' , 'تعریف کمیسیون از خرید')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            @livewire('panel.comission.create')
        </div>
    </div>
</div>
@endsection