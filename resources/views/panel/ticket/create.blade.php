@extends('layouts.app')
@section('title' , 'تیکت ها')
@section('breadcrumb' , 'تیکت ها')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            @livewire('panel.ticket.create')
        </div>
    </div>
</div>
@endsection