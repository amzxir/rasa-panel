@extends('layouts.app')
@section('title' , 'رساجت')
@section('breadcrumb' , 'رساجت')
@section('content')
    <div class="container-xxl" id="kt_content_container">
        <div class="flex-lg-row-fluid ms-lg-15">
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                    <span class="svg-icon svg-icon-2 me-2">
                    </span>
                    <!--end::Svg Icon-->{{ trans('app.create a new order')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_settings_store">
                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm004.svg-->
                    <span class="svg-icon svg-icon-2 me-2">
                    </span>
                    <!--end::Svg Icon-->{{ trans('app.order records')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_settings_localization">
                    <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                    <span class="svg-icon svg-icon-2 me-2">
                    </span>
                    <!--end::Svg Icon-->{{ trans('app.close the order')}}</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                    <div class="card card-flush">
                        <div class="card-body pt-7">
                            @livewire('panel.rasajet.create')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
                    <div class="card card-flush">
                        <div class="card-body pt-7">
                            @livewire('panel.rasajet.manage')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
                    <div class="card card-flush">
                        <div class="card-body pt-7">
                            @livewire('panel.rasajet.close')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection