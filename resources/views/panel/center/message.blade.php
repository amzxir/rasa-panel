@extends('layouts.app')
@section('title' , 'مرکز پیام')
@section('breadcrumb' , 'مرکز پیام')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            <div class="row">
                <div class="col-md-12 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.name route')}}" />
                </div>
                <div class="col-md-12 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.title')}}" />
                </div>
                <div class="col-md-12 mb-7">
                    <select class="form-select form-select-solid" dir="rtl" data-control="select2" data-placeholder="{{ trans('app.user role')}}" data-hide-search="true">
                        <option></option>
                        <option value="ادمین">ادمین</option>
                    </select>
                </div>
                <div class="col-md-12 mb-7">
                    <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.message')}}" rows="6"></textarea>
                </div>
 
            </div>
            <div class="d-flex justify-content-center mt-10">
                <button class="btn btn-primary fw-bolder">{{ trans('app.submit')}}</button>
            </div>
        </div>
    </div>
</div>
@endsection