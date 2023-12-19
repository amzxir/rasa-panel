@extends('layouts.app')
@section('title' , 'اسلایدر')
@section('breadcrumb' , 'اسلایدر')
@section('content')
    <div class="container-xxl" id="kt_content_container">
        <div class="flex-lg-row-fluid ms-lg-15">
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                    <span class="svg-icon svg-icon-2 me-2">
                    </span>
                    <!--end::Svg Icon-->{{ trans('app.slide show insert')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_settings_store">
                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm004.svg-->
                    <span class="svg-icon svg-icon-2 me-2">
                    </span>
                    <!--end::Svg Icon-->{{ trans('app.slide show manage')}}</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                    <div class="card card-flush">
                        <div class="card-body pt-7">
                            <div class="row">
                                <div class="col-md-12 mb-7">
                                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.enter the transfer link')}}" />
                                </div>
                                <div class="col-md-12 mb-7">
                                    <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image1">{{ trans('app.Loading the slider image on the medium device (width: 900 px)')}}</label>
                                    <input type="file" id="image1" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" />
                                </div>
                                <div class="col-md-12 mb-7">
                                    <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image1">{{ trans('app.upload image for mobile')}}</label>
                                    <input type="file" id="image1" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-10">
                                <button class="btn btn-primary fw-bolder">{{ trans('app.submit')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
                    <div class="card card-flush">
                        <div class="card-body pt-7">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_کاربران">
                                    <thead>
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_کاربران .form-check-input" value="1">
                                                </div>
                                            </th>
                                            <th class="min-w-125px">{{ trans('app.row')}}</th>
                                            <th class="min-w-125px">{{ trans('app.image')}}</th>
                                            <th class="min-w-125px">{{ trans('app.link')}}</th>
                                            <th class="text-end min-w-100px">{{ trans('app.action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 fw-bold">
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>
                                                <img src="{{ asset('image/no-image.png')}}" width="75" height="75" alt="">
                                            </td>
                                            <td>https://rasadent.com/rasajet-panel</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{ trans('app.action')}}
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-5 m-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                    <div class="menu-item">
                                                        <a class="menu-link">{{ trans('app.delete')}}</a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a data-bs-toggle="modal" data-bs-target="#kt_modal_1" class="menu-link">{{ trans('app.edit')}}</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <ul class="pagination pagination-circle">
                                <li class="page-item previous disabled"><a href="#" class="page-link"><i class="previous"></i></a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item "><a href="#" class="page-link">3</a></li>
                                <li class="page-item "><a href="#" class="page-link">4</a></li>
                                <li class="page-item "><a href="#" class="page-link">5</a></li>
                                <li class="page-item "><a href="#" class="page-link">6</a></li>
                                <li class="page-item next"><a href="#"  class="page-link"><i class="next"></i></a></li>
                            </ul>
                            <div class="modal fade" tabindex="-1" id="kt_modal_1">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ trans('app.edit slider')}}</h5>
                            
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="fas fa-x svg-icon-2x"></i>
                                            </div>
                                        </div>
                            
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12 mb-7">
                                                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.enter the transfer link')}}" />
                                                </div>
                                                <div class="col-md-12 mb-7">
                                                    <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image1">{{ trans('app.Loading the slider image on the medium device (width: 900 px)')}}</label>
                                                    <input type="file" id="image1" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" />
                                                </div>
                                                <div class="col-md-12 mb-7">
                                                    <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image1">{{ trans('app.upload image for mobile')}}</label>
                                                    <input type="file" id="image1" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" />
                                                </div>
                                            </div>
                                        </div>
                            
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                                            <button type="button" class="btn btn-primary">{{ trans('app.submit')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection