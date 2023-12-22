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
                            <div class="row">
                                <div class="col-md-12 mb-7">
                                    <select data-control="select2" dir="rtl" data-placeholder="{{ trans('app.choose the order receiving method')}}" class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible" data-select2-id="select2-data-7-lhjk" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="select2-data-9-w3zk"></option>
                                        <option value="اینستاگرام" data-select2-id="select2-data-135-tndm">اینستاگرام</option>
                                        <option value="تلگرام" data-select2-id="select2-data-136-tndm">تلگرام</option>
                                        <option value="تبلیغات" data-select2-id="select2-data-137-tndm">تبلیغات</option>
                                        <option value="مرکز تماس" data-select2-id="select2-data-138-tndm">مرکز تماس</option>
                                        <option value="دوست آشنا" data-select2-id="select2-data-139-tndm">دوست آشنا</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-7">
                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.recipient name')}}" />
                                </div>
                                <div class="col-md-12 mb-7">
                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.mobile receiver')}}" />
                                </div>
                                <div class="col-md-12 mb-7">
                                    <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.order')}}" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary">{{ trans('app.submit')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
                    <div class="card card-flush">
                        <div class="card-body pt-7">
                            <div class="card-header border-0 pt-6">
                                <div class="card-title">
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="{{ trans('app.serach mobile')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-4">
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
                                                <th class="min-w-125px">{{ trans('app.mobile')}}</th>
                                                <th class="min-w-125px">{{ trans('app.date')}}</th>
                                                <th class="text-end min-w-100px">{{ trans('app.order')}}</th>
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
                                                <td>09925219311</td>
                                                <td>1402-07-24 05:14:19</td>
                                                <td class="text-end">
                                                    <i class="fas fa-eye pointer text-success" data-bs-toggle="modal" data-bs-target="#kt_modal_1"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1">
                                                    </div>
                                                </td>
                                                <td>2</td>
                                                <td>09925219311</td>
                                                <td>1402-07-24 05:14:19</td>
                                                <td class="text-end">
                                                    <i class="fas fa-eye pointer text-success" data-bs-toggle="modal" data-bs-target="#kt_modal_1"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1">
                                                    </div>
                                                </td>
                                                <td>3</td>
                                                <td>09925219311</td>
                                                <td>1402-07-24 05:14:19</td>
                                                <td class="text-end">
                                                    <i class="fas fa-eye pointer text-success" data-bs-toggle="modal" data-bs-target="#kt_modal_1"></i>
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
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" tabindex="-1" id="kt_modal_1">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{ trans('app.order')}}</h5>
                    
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-x svg-icon-2x"></i>
                                    </div>
                                </div>
                    
                                <div class="modal-body">
     
                                </div>
                    
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
                    <div class="card card-flush">
                        <div class="card-body pt-7">
                            <div class="row">
                                <div class="col-md-6 mb-7">
                                    <div class="input-group flex-nowrap">
                                        <button class="input-group-text btn-secondary" id="addon-wrapping">{{ trans('app.search')}}</button>
                                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.enter the product name')}}">
                                    </div>
                                </div>
                                <div class="col-md-3 mb-7">
                                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#kt_modal_2">{{ trans('app.invoices in the queue:')}} 0</button>
                                </div>
                                <div class="col-md-3 mb-7">
                                    <button class="btn btn-secondary w-100" data-bs-toggle="modal" data-bs-target="#kt_modal_3">{{ trans('app.complete the invoice')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" tabindex="-1" id="kt_modal_2">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{ trans('app.list order')}}</h5>
                    
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-x svg-icon-2x"></i>
                                    </div>
                                </div>
                    
                                <div class="modal-body">
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
                                                    <th class="min-w-125px">{{ trans('app.recipient name')}}</th>
                                                    <th class="min-w-125px">{{ trans('app.mobile')}}</th>
                                                    <th class="min-w-125px">{{ trans('app.order')}}</th>
                                                    <th class="min-w-125px">{{ trans('app.date')}}</th>
                                                    <th class="min-w-125px">{{ trans('app.status')}}</th>
                                                    <th class="min-w-125px">{{ trans('app.select invoice')}}</th>
                                                    <th class="text-end min-w-100px">{{ trans('app.create invoice')}}</th>
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
                                                    <td>-</td>
                                                    <td>09380213171</td>
                                                    <td>سییسسیب</td>
                                                    <td>1402-05-14 14:41:21</td>
                                                    <td>بررسی شده</td>
                                                    <td><i class="fa-solid fa-hand-pointer pointer text-danger"></i></td>
                                                    <td class="text-end"><i class="fa-solid fa-file-lines pointer text-primary"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="1">
                                                        </div>
                                                    </td>
                                                    <td>2</td>
                                                    <td>-</td>
                                                    <td>09380213171</td>
                                                    <td>سییسسیب</td>
                                                    <td>1402-05-14 14:41:21</td>
                                                    <td>بررسی شده</td>
                                                    <td><i class="fa-solid fa-hand-pointer pointer text-danger"></i></td>
                                                    <td class="text-end"><i class="fa-solid fa-file-lines pointer text-primary"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="1">
                                                        </div>
                                                    </td>
                                                    <td>3</td>
                                                    <td>-</td>
                                                    <td>09380213171</td>
                                                    <td>سییسسیب</td>
                                                    <td>1402-05-14 14:41:21</td>
                                                    <td>بررسی شده</td>
                                                    <td><i class="fa-solid fa-hand-pointer pointer text-danger"></i></td>
                                                    <td class="text-end"><i class="fa-solid fa-file-lines pointer text-primary"></i></td>
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
                                </div>
                    
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" tabindex="-1" id="kt_modal_3">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{ trans('app.complete or edit the invoice')}}</h5>
                    
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-x svg-icon-2x"></i>
                                    </div>
                                </div>
                    
                                <div class="modal-body">
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
                                                    <th class="min-w-125px">{{ trans('app.product')}}</th>
                                                    <th class="min-w-125px">{{ trans('app.price')}}</th>
                                                    <th class="min-w-125px">{{ trans('app.quantity')}}</th>
                                                    <th class="text-end min-w-100px">{{ trans('app.delete')}}</th>
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
                                                    <td>لورم</td>
                                                    <td>120/000</td>
                                                    <td>2</td>
                                                    <td class="text-end"><i class="fas fa-trash pointer text-danger"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="1">
                                                        </div>
                                                    </td>
                                                    <td>2</td>
                                                    <td>لورم</td>
                                                    <td>120/000</td>
                                                    <td>2</td>
                                                    <td class="text-end"><i class="fas fa-trash pointer text-danger"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.address')}}" rows="6"></textarea>
                                    </div>
                                </div>
                    
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                                    <button type="button" class="btn btn-primary">{{ trans('app.save chnage')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection