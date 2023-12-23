<div>
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
                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" wire:model="search" placeholder="{{ trans('app.serach product')}}">
            </div>
        </div>
        <div class="card-toolbar">
            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                <button type="button" class="btn btn-light-info me-3 btn-sm">{{ trans('app.offer of the month')}}</button>
                <button type="button" class="btn btn-light-info me-3 btn-sm">{{ trans('app.best seller')}}</button>
                <button type="button" class="btn btn-light-info me-3 btn-sm">{{ trans('app.instant offer')}}</button>
                <button type="button" class="btn btn-light-info me-3 btn-sm">{{ trans('app.amazing offer')}}</button>
                <button type="button" class="btn btn-light-info me-3 btn-sm">{{ trans('app.new product')}}</button>
                <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    فیلتر
                </button>
                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bolder">فیلتر محصولات</div>
                    </div>
                    <div class="separator border-gray-200"></div>
                    <div class="px-7 py-5" data-kt-user-table-filter="form">
                        <div class="mb-7">
                            <input type="text" wire:model="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.name product')}}" />
                        </div>
                        <div class="mb-7">
                            <input type="text" wire:model="code" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.code product')}}" />
                        </div>
                        <div class="mb-7">
                            <input type="text" wire:model="category" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.category product')}}" />
                        </div>
                        <div class="mb-7">
                            <select class="form-select form-select-solid fw-bolder select2-hidden-accessible" wire:model="status" dir="rtl" data-kt-select2="true" data-placeholder="{{ trans('app.status product')}}" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true" data-select2-id="select2-data-10-mptt" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="select2-data-12-26ex"></option>
                                <option value="تایید شده">تایید شده</option>
                                <option value="تایید نشده">تایید نشده</option>
                            </select>
                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-light btn-active-light-primary fw-bold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">ریست</button>
                            <button type="submit" class="btn btn-primary fw-bold px-6" wire:click="ConfirmFilter">تایید</button>
                        </div>
                    </div>
                </div>
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
                        <th class="min-w-125px">{{ trans('app.code')}}</th>
                        <th class="min-w-125px">{{ trans('app.name product')}}</th>
                        <th class="min-w-125px">{{ trans('app.category')}}</th>
                        <th class="min-w-125px">{{ trans('app.seller')}}</th>
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
                        <td class="d-flex align-items-center">
                            <div class="symbol symbol-50px overflow-hidden me-3">
                                <a href="#">
                                    {{-- <div class="symbol-label"> --}}
                                        <img src="assets/media/avatars/300-6.jpg" alt="مرادی نیا" width="100" height="100">
                                    {{-- </div> --}}
                                </a>
                            </div>
                        </td>
                        <td>135233</td>
                        <td>نوار پرداخت آمالگام _دوریدنت</td>
                        <td>نوار پرداخت آمالگام	</td>
                        <td>
                            <i class="fa-solid fa-eye pointer text-success" data-bs-toggle="modal" data-bs-target="#kt_modal_1"></i>
                            <div class="modal fade" tabindex="-1" id="kt_modal_1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ trans('app.shop products')}}</h5>
                            
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="fas fa-x svg-icon-2x"></i>
                                            </div>
                                        </div>
                            
                                        <div class="modal-body">
                                            <div class="alert alert-success text-center" role="alert">
                                                <p>آراد دنتال</p>
                                                <p>تعداد 12 عددی میزان 10 عدد به قیمت 300000 تومان</p>
                                            </div>
                                        </div>
                            
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <a class="menu-link" wire:click="ConfirmDelete">{{ trans('app.delete')}}</a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" wire:click="ConfirmProductOk">{{ trans('app.confirmed')}}</a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" wire:click="ConfirmProductNotOk">{{ trans('app.not confirmed')}}</a>
                                </div>
                                <div class="menu-item">
                                    <a href="{{ route('edit-product')}}" class="menu-link">{{ trans('app.edit')}}</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link ">{{ trans('app.brands and properties')}}</a>
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
                        <td>2</td>
                        <td class="d-flex align-items-center">
                            <div class="symbol symbol-50px overflow-hidden me-3">
                                <a href="#">
                                    {{-- <div class="symbol-label"> --}}
                                        <img src="assets/media/avatars/300-6.jpg" alt="مرادی نیا" width="100" height="100">
                                    {{-- </div> --}}
                                </a>
                            </div>
                        </td>
                        <td>135233</td>
                        <td>نوار پرداخت آمالگام _دوریدنت</td>
                        <td>نوار پرداخت آمالگام	</td>
                        <td>
                            <i class="fa-solid fa-eye pointer text-success" data-bs-toggle="modal" data-bs-target="#kt_modal_1"></i>
                            <div class="modal fade" tabindex="-1" id="kt_modal_1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ trans('app.shop products')}}</h5>
                            
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="fas fa-x svg-icon-2x"></i>
                                            </div>
                                        </div>
                            
                                        <div class="modal-body">
                                            <div class="alert alert-success text-center" role="alert">
                                                <p>آراد دنتال</p>
                                                <p>تعداد 12 عددی میزان 10 عدد به قیمت 300000 تومان</p>
                                            </div>
                                        </div>
                            
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <a class="menu-link" wire:click="ConfirmDelete">{{ trans('app.delete')}}</a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" wire:click="ConfirmProductOk">{{ trans('app.confirmed')}}</a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" wire:click="ConfirmProductNotOk">{{ trans('app.not confirmed')}}</a>
                                </div>
                                <div class="menu-item">
                                    <a href="{{ route('edit-product')}}" class="menu-link">{{ trans('app.edit')}}</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link ">{{ trans('app.brands and properties')}}</a>
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
                        <td>3</td>
                        <td class="d-flex align-items-center">
                            <div class="symbol symbol-50px overflow-hidden me-3">
                                <a href="#">
                                    {{-- <div class="symbol-label"> --}}
                                        <img src="assets/media/avatars/300-6.jpg" alt="مرادی نیا" width="100" height="100">
                                    {{-- </div> --}}
                                </a>
                            </div>
                        </td>
                        <td>135233</td>
                        <td>نوار پرداخت آمالگام _دوریدنت</td>
                        <td>نوار پرداخت آمالگام	</td>
                        <td>
                            <i class="fa-solid fa-eye pointer text-success" data-bs-toggle="modal" data-bs-target="#kt_modal_1"></i>
                            <div class="modal fade" tabindex="-1" id="kt_modal_1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ trans('app.shop products')}}</h5>
                            
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="fas fa-x svg-icon-2x"></i>
                                            </div>
                                        </div>
                            
                                        <div class="modal-body">
                                            <div class="alert alert-success text-center" role="alert">
                                                <p>آراد دنتال</p>
                                                <p>تعداد 12 عددی میزان 10 عدد به قیمت 300000 تومان</p>
                                            </div>
                                        </div>
                            
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <a class="menu-link" wire:click="ConfirmDelete">{{ trans('app.delete')}}</a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" wire:click="ConfirmProductOk">{{ trans('app.confirmed')}}</a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" wire:click="ConfirmProductNotOk">{{ trans('app.not confirmed')}}</a>
                                </div>
                                <div class="menu-item">
                                    <a href="{{ route('edit-product')}}" class="menu-link">{{ trans('app.edit')}}</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#" class="menu-link ">{{ trans('app.brands and properties')}}</a>
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
