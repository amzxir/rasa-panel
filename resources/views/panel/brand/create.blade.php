@extends('layouts.app')
@section('title' , 'ایجاد برند')
@section('breadcrumb' , 'ایجاد برند')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            <div class="row">
                <div class="col-md-12 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.enter the brand')}}" />
                </div>
                <div class="col-md-12 mb-7">
                    <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image">{{ trans('app.upload image brand')}}</label>
                    <input type="file" id="image" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" />
                </div>
            </div>
            <div class="d-flex justify-content-center mt-10">
                <button class="btn btn-primary fw-bolder">{{ trans('app.submit')}}</button>
            </div>
        </div>
    </div>
</div>
@endsection