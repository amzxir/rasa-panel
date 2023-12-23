@extends('layouts.app')
@section('title' , 'ایجاد محصول')
@section('breadcrumb' , 'ایجاد محصول')
@section('content')
    <div class="container-xxl" id="kt_content_container">
        <div class="flex-lg-row-fluid ms-lg-15">
            @livewire('panel.product.create')
        </div>
    </div>
@endsection