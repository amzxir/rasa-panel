@extends('layouts.app')
@section('title' , 'مدیریت برند')
@section('breadcrumb' , 'مدیریت برند')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card">
        @livewire('panel.brand.manage')
    </div>
</div>

@endsection