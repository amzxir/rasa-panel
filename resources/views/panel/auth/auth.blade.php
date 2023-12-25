@extends('layouts.app')
@section('title' , 'احراز هویت')
@section('breadcrumb' , 'احراز هویت')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card">
        @livewire('panel.auth.auth')
    </div>
</div>


@endsection