@extends('layouts.app')
@section('title' , 'تعریف کمیسیون از خرید')
@section('breadcrumb' , 'تعریف کمیسیون از خرید')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            <div class="row">
                <div class="col-md-12 mb-7">
                <div class="alert alert-danger text-center">
                    <div class="d-flex flex-column">
                        <span>{{ trans('درصد کمیسیون رسادنت از هر فاکتور را مشخص فرمائید درصد فعلی کمیسیون 23 می باشد')}}</span>
                    </div>
                </div>
                </div>
                <div class="col-md-12 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.commission percentage')}}" />
                </div>
            </div>
            <div class="d-flex justify-content-center mt-10">
                <button class="btn btn-primary fw-bolder">{{ trans('app.submit')}}</button>
            </div>
        </div>
    </div>
</div>
@endsection