@extends('layouts.app')
@section('title' , 'مدیریت دسته بندی')
@section('breadcrumb' , 'مدیریت دسته بندی')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card">
        @livewire('panel.category.manage')
    </div>
</div>

@endsection