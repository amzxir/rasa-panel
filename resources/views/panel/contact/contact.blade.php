@extends('layouts.app')
@section('title' , 'تماس ها')
@section('breadcrumb' , 'تماس ها')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card">
        @livewire('panel.contact.manage')
    </div>
</div>



@endsection