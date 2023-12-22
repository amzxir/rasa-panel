@extends('layouts.app')
@section('title' , 'تنظیمات سایت')
@section('breadcrumb' , 'تنظیمات سایت')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            
            <div class="row">
                <div class="col-md-12 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.software name')}}" />
                </div>
                <div class="col-md-12 mb-7">
                    <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image1">{{ trans('app.software logo')}}</label>
                    <input type="file" id="image1" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" />
                </div>
                <div class="col-md-12 mb-7">
                    <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image2">{{ trans('app.selected image of instant offer')}}</label>
                    <input type="file" id="image2" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" />
                </div>
                <div class="col-md-4 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.mobile')}}" />
                </div>
                <div class="col-md-4 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.address')}}" />
                </div>
                <div class="col-md-4 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.phone')}}" />
                </div>
                <div class="col-md-4 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.email')}}" />
                </div>
                <div class="col-md-4 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('اینستاگرام')}}" />
                </div>
                <div class="col-md-4 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('تلگرام')}}" />
                </div>
                <div class="col-md-4 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('لینکدین')}}" />
                </div>
                <div class="col-md-4 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('آپارات')}}" />
                </div>
                <div class="col-md-4 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('یوتیوب')}}" />
                </div>
                <div class="col-md-4 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('فیسبوک')}}" />
                </div>
                <div class="col-md-4 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('واتس اپ')}}" />
                </div>
                <div class="col-md-4 mb-7">
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('توییتر')}}" />
                </div>
                <div class="col-md-12 mb-7">
                    <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.short slogan of the software')}}" rows="6"></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-10">
                <button class="btn btn-primary fw-bolder">{{ trans('app.submit')}}</button>
            </div>
        </div>
    </div>
</div>
@endsection