@extends('layouts.app')
@section('title' , 'ایجاد کاربر')
@section('breadcrumb' , 'ایجاد کاربر')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            <div class="row">
                <div class="col-md-6 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.first name and last name')}}" />
                </div>
                <div class="col-md-6 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.mobile')}}" />
                </div>
                <div class="col-md-6 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.password')}}" />
                </div>
                <div class="col-md-6 mb-7">
                    <select class="form-select form-select-solid" dir="rtl" data-control="select2" data-placeholder="{{ trans('app.access type')}}" data-hide-search="true">
                        <option></option>
                        <option value="ادمین">ادمین</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-10">
                <button class="btn btn-primary fw-bolder">{{ trans('app.submit')}}</button>
            </div>
        </div>
    </div>
</div>
@endsection