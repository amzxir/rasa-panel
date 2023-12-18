@extends('layouts.app')
@section('title' , 'مدیریت فرم ساز')
@section('breadcrumb' , 'مدیریت فرم ساز')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            <div class="row">
                <div class="col-md-10 mb-7">
                    <select class="form-select form-select-solid" dir="rtl" data-control="select2" data-placeholder="{{ trans('دسته بندی خود را انتخاب کنید')}}" data-hide-search="true">
                        <option></option>
                        <option value="دسته بندی اول">دسته بندی اول</option>
                    </select>
                </div>
                <div class="col-md-2 mb-7">
                    <button class="btn btn-primary">{{ trans('app.reset page')}}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            <p class="fw-bolder fs-5 mb-7 text-danger">{{ trans('app.category parents')}} :</p>
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
                            <th class="min-w-125px">{{ trans('app.name')}}</th>
                            <th class="min-w-125px">{{ trans('app.image')}}</th>
                            <th class="min-w-125px">{{ trans('app.type')}}</th>
                            <th class="min-w-125px">{{ trans('app.characteristic')}}</th>
                            <th class="min-w-125px">{{ trans('app.default')}}</th>
                            <th class="min-w-125px">{{ trans('app.add to category')}}</th>
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
                            <td>کشور سازنده</td>
                            <td>
                                <img width="75" height="75" src="{{ asset('image/no-image.png')}}" alt="">
                            </td>
                            <td>select</td>
                            <td>speciality</td>
                            <td>
                                <i class="fa-solid fa-eye text-success pointer fs-3" data-bs-toggle="modal" data-bs-target="#kt_modal_1"></i>
                                <i class="fa-solid fa-plus text-primary ms-3 pointer fs-3" data-bs-toggle="modal" data-bs-target="#kt_modal_2"></i>
                            </td>
                            <td>
                                <i class="fa-solid fa-plus text-primary ms-3 pointer fs-3" data-bs-toggle="modal" data-bs-target="#kt_modal_3"></i>
                            </td>
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
                                        <a data-bs-toggle="modal" data-bs-target="#kt_modal_4" class="menu-link">{{ trans('app.edit')}}</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <td>1</td>
                            <td>کشور سازنده</td>
                            <td>
                                <img width="75" height="75" src="{{ asset('image/no-image.png')}}" alt="">
                            </td>
                            <td>select</td>
                            <td>speciality</td>
                            <td>
                                <i class="fa-solid fa-eye text-success pointer fs-3" data-bs-toggle="modal" data-bs-target="#kt_modal_1"></i>
                                <i class="fa-solid fa-plus text-primary ms-3 pointer fs-3" data-bs-toggle="modal" data-bs-target="#kt_modal_2"></i>
                            </td>
                            <td>
                                <i class="fa-solid fa-plus text-primary ms-3 pointer fs-3" data-bs-toggle="modal" data-bs-target="#kt_modal_3"></i>
                            </td>
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
                                        <a data-bs-toggle="modal" data-bs-target="#kt_modal_4" class="menu-link">{{ trans('app.edit')}}</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <td>1</td>
                            <td>کشور سازنده</td>
                            <td>
                                <img width="75" height="75" src="{{ asset('image/no-image.png')}}" alt="">
                            </td>
                            <td>select</td>
                            <td>speciality</td>
                            <td>
                                <i class="fa-solid fa-eye text-success pointer fs-3" data-bs-toggle="modal" data-bs-target="#kt_modal_1"></i>
                                <i class="fa-solid fa-plus text-primary ms-3 pointer fs-3" data-bs-toggle="modal" data-bs-target="#kt_modal_2"></i>
                            </td>
                            <td>
                                <i class="fa-solid fa-plus text-primary ms-3 pointer fs-3" data-bs-toggle="modal" data-bs-target="#kt_modal_3"></i>
                            </td>
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
                                        <a data-bs-toggle="modal" data-bs-target="#kt_modal_4" class="menu-link">{{ trans('app.edit')}}</a>
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
                <h5 class="modal-title">{{ trans('app.default')}}</h5>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-x svg-icon-2x"></i>
                </div>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-6 mb-7">
                        <p class="fw-bolder">پاکستان</p>
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/assets/media/avatars/300-1.jpg)"></div>

                            <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="تعویض آواتار">
                            <i class="fa-solid fa-rotate fs-7"></i>

                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>

                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="انصراف avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="حذف آواتار">
                                <i class="fas fa-x fs-7"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mb-7">
                        <p class="fw-bolder">پاکستان</p>
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/assets/media/avatars/300-1.jpg)"></div>

                            <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="تعویض آواتار">
                            <i class="fa-solid fa-rotate fs-7"></i>

                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>

                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="انصراف avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="حذف آواتار">
                                <i class="fas fa-x fs-7"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mb-7">
                        <p class="fw-bolder">پاکستان</p>
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/assets/media/avatars/300-1.jpg)"></div>

                            <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="تعویض آواتار">
                            <i class="fa-solid fa-rotate fs-7"></i>

                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>

                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="انصراف avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="حذف آواتار">
                                <i class="fas fa-x fs-7"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mb-7">
                        <p class="fw-bolder">پاکستان</p>
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/assets/media/avatars/300-1.jpg)"></div>

                            <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="تعویض آواتار">
                            <i class="fa-solid fa-rotate fs-7"></i>

                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>

                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="انصراف avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="حذف آواتار">
                                <i class="fas fa-x fs-7"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="kt_modal_2">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ trans('app.add to default')}}</h5>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-x svg-icon-2x"></i>
                </div>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                            <div class="d-flex">
                                <span class="d-flex align-items-center text-danger fw-bolder">مثلا اگر خصوصیت رنگ را برای دسته بندی مورد نظر خود انتخاب کردید و محصول سه رنگ آبی ، قرمز و سبز را دارد ، میتوانید این رنگ ها را وارد کنید تا کاربر از بین آنها یک یا چند رنگ را انتخاب کند </span>
                            </div>
        
                            <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                <span class="svg-icon svg-icon-1 svg-icon-danger"><i class="fas fa-x text-danger"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.enter the attribute value')}}" />
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                <button type="button" class="btn btn-primary">{{ trans('app.submit and next')}}</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="kt_modal_3">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ trans('در این قسمت بدون نیاز به تعریف مجدد فیلد میتوانید این خصوصیت را به دسته بندی مورد نظر خود وارد کنید')}}</h5>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-x svg-icon-2x"></i>
                </div>
            </div>

            <div class="modal-body">
                <div class="col-md-12 mb-7">
                    <div class="input-group flex-nowrap">
                        <button class="input-group-text btn-secondary" id="addon-wrapping">{{ trans('app.search category')}}</button>
                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="دسته بندی را جستجو کنید ...">
                    </div>
                    <hr class="mt-7 mb-7">
                    <div class="row">
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-7">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">دسته بندی اول</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                <button type="button" class="btn btn-primary">{{ trans('app.save chnage')}}</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="kt_modal_4">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ trans('app.edit')}}</h5>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-x svg-icon-2x"></i>
                </div>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-7">
                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.example color')}}" />
                    </div>
                    <div class="col-md-6 mb-7">
                        <select class="form-select form-select-solid" dir="rtl" data-control="select2" data-placeholder="{{ trans('انتخاب کنید ...')}}" data-hide-search="true">
                            <option></option>
                            <option value="منوی انتخابی">منوی انتخابی</option>
                            <option value="منوی انتخابی">انتخابی چک باکس</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-7">
                        <select class="form-select form-select-solid" dir="rtl" data-control="select2" data-placeholder="{{ trans('انتخاب کنید ...')}}" data-hide-search="true">
                            <option></option>
                            <option value="خصوصیات ظاهری - رنگ">خصوصیات ظاهری - رنگ</option>
                            <option value="خصوصیات ظاهری - اندازه">خصوصیات ظاهری - اندازه</option>
                            <option value="خصوصیات ظاهری - بسته بندی">خصوصیات ظاهری - بسته بندی</option>
                            <option value="خصوصیات ظاهری - جنس">خصوصیات ظاهری - جنس</option>
                            <option value="اطلاعات تخصصی">اطلاعات تخصصی</option>
    
                        </select>
                    </div>
                    <div class="col-md-6 mb-7">
                        <select class="form-select form-select-solid" dir="rtl" data-control="select2" data-placeholder="{{ trans('انتخاب کنید ...')}}" data-hide-search="true">
                            <option></option>
                            <option value="قابل انتخاب - تکمیل توسط فروشنده">قابل انتخاب - تکمیل توسط فروشنده</option>
                            <option value="غیر قابل انتخاب - تکمیل توسط ادمین">غیر قابل انتخاب - تکمیل توسط ادمین</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                <button type="button" class="btn btn-primary">{{ trans('app.save chnage')}}</button>
            </div>
        </div>
    </div>
</div>

@endsection