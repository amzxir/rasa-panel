@extends('layouts.app')
@section('title' , 'گزارش فروش')
@section('breadcrumb' , 'گزارش فروش')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
		<div class="card card-xl-stretch mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">گزارش فروش</span>
                </h3>
            </div>
            <div class="card-body">
                @livewire('panel.reports.seller')
                {{-- <div id="kt_charts_widget_2_chart" style="height: 350px"></div> --}}
            </div>
        </div>
    </div>
</div>
@endsection