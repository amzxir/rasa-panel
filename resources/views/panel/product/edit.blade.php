@extends('layouts.app')
@section('title' , 'ویرایش محصول')
@section('breadcrumb' , 'ویرایش محصول')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        @livewire('panel.product.edit')
    </div>
</div>
@endsection