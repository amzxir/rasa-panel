@extends('layouts.app')
@section('title' , 'مدیریت دسته بندی')
@section('breadcrumb' , 'مدیریت دسته بندی')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card">
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
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="{{ trans('app.serach category')}}">
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
                            <th class="min-w-125px">{{ trans('app.image')}}</th>
                            <th class="min-w-125px">{{ trans('app.name')}}</th>
                            <th class="min-w-125px">{{ trans('app.id')}}</th>
                            <th class="min-w-125px">{{ trans('app.top category')}}</th>
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
                            <td>ترمیمی و زیبایی</td>
                            <td>380</td>
                            <td>دسته بندی مادر</td>
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
                                        <a class="menu-link" data-bs-target="#kt_modal_1" data-bs-toggle="modal">{{ trans('app.banner upload')}}</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" data-bs-target="#kt_modal_2" data-bs-toggle="modal">{{ trans('app.order level')}}</a>
                                    </div>
                                    <div class="menu-item">
                                        <a data-bs-toggle="modal" data-bs-target="#kt_modal_3" class="menu-link">{{ trans('app.edit')}}</a>
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
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ trans('app.update category banner')}}</h5>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-x svg-icon-2x"></i>
                </div>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-7">
                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.redirect address')}}" />
                    </div>
                    <div class="col-md-12 mb-7">
                        <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image">{{ trans('app.upload the banner file')}}</label>
                        <input type="file" id="image" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" />
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

<div class="modal fade" tabindex="-1" id="kt_modal_2">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ trans('app.order level')}}</h5>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-x svg-icon-2x"></i>
                </div>
            </div>

            <div class="modal-body">
                <div class="col-md-12 mb-7">
                    <select class="form-select form-select-solid" dir="rtl" data-control="select2" data-placeholder="{{ trans('app.display order in search')}}" data-hide-search="true">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                <button type="button" class="btn btn-primary">{{ trans('app.submit')}}</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="kt_modal_3">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ trans('app.edit category')}}</h5>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-x svg-icon-2x"></i>
                </div>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-7">
                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.enter the parent category')}}" />
                    </div>
                    <div class="col-md-12 mb-7">
                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.enter the category name')}}" />
                    </div>
                    <div class="col-md-12 mb-7">
                        <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image">{{ trans('app.upload image category')}}</label>
                        <input type="file" id="image" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" />
                    </div>
                    <div class="col-md-12 mb-7">
                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.insert content in the editor')}}" rows="6"></textarea>
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

@endsection