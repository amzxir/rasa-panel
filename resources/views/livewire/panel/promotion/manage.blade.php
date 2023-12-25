<div>
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
                    <th class="min-w-125px">{{ trans('app.location')}}</th>
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
                    <td>Middle-on</td>
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
    <div class="modal fade" tabindex="-1" id="kt_modal_1" wire:ignore.self>
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
                            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.enter the banner transfer link')}}</label>
                            @error('link')
                                <small class="error">{{$message}}</small>
                            @enderror
                            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="link" placeholder="{{ trans('app.enter the banner transfer link')}}" />
                        </div>
                        <div class="col-md-12 mb-7">
                            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.placement of the banner')}}</label>
                            @error('placement')
                                <small class="error">{{$message}}</small>
                            @enderror
                            <select class="form-select form-select-solid" dir="rtl" data-control="select2" wire:model="placement" data-placeholder="{{ trans('app.placement of the banner')}}" data-hide-search="true">
                                <option></option>
                                <option value="تکرار در بالای همه ی صفحات">تکرار در بالای همه ی صفحات</option>
                                <option value="صفحه ی اصلی - بخش اول - راست">صفحه ی اصلی - بخش اول - راست</option>
                                <option value="صفحه ی اصلی - بخش اول - چپ">صفحه ی اصلی - بخش اول - چپ</option>
                                <option value="صفحه ی اصلی - بخش دوم - راست - اول">صفحه ی اصلی - بخش دوم - راست - اول</option>
                                <option value="صفحه ی اصلی - بخش دوم - راست - دوم">صفحه ی اصلی - بخش دوم - راست - دوم</option>
                                <option value="صفحه ی اصلی - بخش دوم - راست - سوم">صفحه ی اصلی - بخش دوم - راست - سوم</option>
                                <option value="صفحه ی اصلی - بخش دوم - راست - چهارم">صفحه ی اصلی - بخش دوم - راست - چهارم</option>
                                <option value="صفحه ی اصلی - بخش سوم - راست">صفحه ی اصلی - بخش سوم - راست</option>
                                <option value="صفحه ی اصلی - بخش سوم - چپ">صفحه ی اصلی - بخش سوم - چپ</option>
                                <option value="صفحه ی اصلی - سرتاسری - میان صفحه">صفحه ی اصلی - سرتاسری - میان صفحه</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-7">
                            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.upload image promotion')}}</label>
                            @error('image')
                                <small class="error">{{$message}}</small>
                            @enderror
                            <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image1">{{ trans('app.upload image promotion')}}</label>
                            <input type="file" id="image1" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" wire:model="image" />
                        </div>
                    </div>
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                    <button type="button" class="btn btn-primary" wire:click="ConfirmEditPromotion">{{ trans('app.submit')}}</button>
                </div>
            </div>
        </div>
    </div>
</div>
