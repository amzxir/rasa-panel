@extends('layouts.app')
@section('title' , 'ایجاد محصول')
@section('breadcrumb' , 'ایجاد محصول')
@section('content')
    <div class="container-xxl" id="kt_content_container">
        <div class="flex-lg-row-fluid ms-lg-15">
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                    <span class="svg-icon svg-icon-2 me-2">
                    </span>
                    <!--end::Svg Icon-->{{ trans('app.category')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_settings_store">
                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm004.svg-->
                    <span class="svg-icon svg-icon-2 me-2">
                    </span>
                    <!--end::Svg Icon-->{{ trans('app.public information')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_settings_localization">
                    <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                    <span class="svg-icon svg-icon-2 me-2">
                    </span>
                    <!--end::Svg Icon-->{{ trans('app.seo')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_settings_محصولات">
                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm005.svg-->
                    <span class="svg-icon svg-icon-2 me-2">
                    </span>
                    <!--end::Svg Icon-->{{ trans('app.image')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_settings_customers">
                    <!--begin::Svg Icon | path: icons/duotune/communication/com014.svg-->
                    <span class="svg-icon svg-icon-2 me-2">
                    </span>
                    <!--end::Svg Icon-->{{ trans('app.files')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#nav-property-tab">
                    <!--begin::Svg Icon | path: icons/duotune/communication/com014.svg-->
                    <span class="svg-icon svg-icon-2 me-2">
                    </span>
                    <!--end::Svg Icon-->{{ trans('app.product features')}}</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                    <div class="card card-flush">
                        <div class="card-body pt-7">
                            <div class="alert alert-primary text-center fw-bolder mb-8" role="alert">{{ trans('app.discoun enter and select a categoryt')}}</div>
                            <div class="input-group flex-nowrap">
                                <button class="input-group-text btn-secondary" id="addon-wrapping">{{ trans('app.search category')}}</button>
                                <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="دسته بندی را جستجو کنید ...">
                            </div>
                            <ul class="mt-7 ul-item">
                                <li class="item-category mb-5">دسته بندی شماره ۱</li>
                                <li class="item-category mb-5">دسته بندی شماره ۲</li>
                                <li class="item-category mb-5">دسته بندی شماره ۳</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
                    <div class="card card-flush">
                        <div class="card-body pt-7">
                            <div class="row">
                                <div class="col-md-6 mb-7">
                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.product name persion')}}" />
                                </div>
                                <div class="col-md-6 mb-7">
                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.product name english')}}" />
                                </div>
                                <div class="col-md-6 mb-7">
                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.unit')}}" />
                                </div>
                                <div class="col-md-6 mb-7">
                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.value')}}" />
                                </div>
                                <div class="col-md-12 mb-7">
                                    <select data-control="select2" dir="rtl" data-placeholder="{{ trans('app.product brand')}}" class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible" data-select2-id="select2-data-7-lhjk" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="select2-data-9-w3zk"></option>
                                        <option data-kt-flag="flags/afghanistan.svg" value="AF" data-select2-id="select2-data-135-tndm">توکویاما</option>
                                    </select>
                                    <span class="select2 select2-container select2-container--bootstrap5 select2-container--above select2-container--focus" data-select2-id="select2-data-8-aga1" style="width: 100%;">
                                        <span class="selection"></span>
                                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
                    <div class="card card-flush">
                        <div class="card-body pt-7">
                            <div class="row">
                                <div class="col-md-12 mb-7">
                                    <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.insert content in the editor')}}" rows="6"></textarea>
                                </div>
                                <div class="col-md-12 mb-7">
                                    <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.insert seo description')}}" rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_ecommerce_settings_محصولات" role="tabpanel">
                    <div class="card card-flush mb-5 mb-xl-8">
                        <div class="card-body pt-7">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" id="inputGroupFile01">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_ecommerce_settings_customers" role="tabpanel">
                    <div class="card card-flush">
                        <div class="card-body pt-7">
                            <div class="row">
                                <div class="col-md-12 mb-7">
                                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.product catalog file address')}}" />
                                </div>
                                <div class="col-md-12 mb-7">
                                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.product video file address')}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-property-tab" role="tabpanel">
                    <div class="card card-flush">
                        <div class="card-body pt-7">
                            <div class="row mb-10 border-bottom pb-5">
                                <div class="col-lg-4 fw-bold fs-5">{{ trans('app.characteristic')}}</div>
                                <div class="col-lg-8 fw-bold fs-5">{{ trans('app.property')}}</div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">گارانتی</label>
                                <div class="col-lg-8 fv-row">
                                    <select class="form-select form-select-solid form-select-lg">
                                        <option value="">انتخاب کنید</option>
                                        <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa Indonesia - Indonesian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary fw-bolder">{{ trans('app.submit')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection