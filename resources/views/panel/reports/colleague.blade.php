@extends('layouts.app')
@section('title' , 'گزارشات همکار')
@section('breadcrumb' , 'گزارشات همکار')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            @livewire('panel.colleague.create')
        </div>
    </div>
</div>
@endsection