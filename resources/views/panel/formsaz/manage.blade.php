@extends('layouts.app')
@section('title' , 'مدیریت فرم ساز')
@section('breadcrumb' , 'مدیریت فرم ساز')
@section('content')
<div class="container-xxl" id="kt_content_container">
    @livewire('panel.formsaz.manage')
</div>

@endsection