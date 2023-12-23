@extends('layouts.app')
@section('title' , 'مدیریت محصول')
@section('breadcrumb' , 'مدیریت محصول')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card">
        @livewire('panel.product.manage')
    </div>
</div>

@endsection