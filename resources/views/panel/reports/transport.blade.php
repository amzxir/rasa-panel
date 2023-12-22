@extends('layouts.app')
@section('title' , 'گزارش حمل و نقل')
@section('breadcrumb' , 'گزارش حمل و نقل')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card card-xl-stretch mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">گزارش حمل و نقل</span>
            </h3>
            <div class="card-toolbar" data-kt-buttons="true">
                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_2_year_btn">سال</a>
                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_2_month_btn">ماه</a>
                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_widget_2_week_btn">هفته</a>
            </div>
        </div>
        <div class="card-body">
            <div id="kt_charts_widget_2_chart" style="height: 350px"></div>
        </div>
    </div>
</div>
@endsection