@extends('layouts.app')
@section('title' , 'ایجاد دسته بندی')
@section('breadcrumb' , 'ایجاد دسته بندی')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            @livewire('panel.category.create')
        </div>
    </div>
</div>
@endsection