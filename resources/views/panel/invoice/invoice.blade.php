@extends('layouts.app')
@section('title' , 'فاکتور')
@section('breadcrumb' , 'فاکتور')
@section('content')
<div class="container-xxl" id="kt_content_container">
    @livewire('panel.invoice.create')
</div>
@endsection