@extends('layouts.app')
@section('title' , 'داشبورد')    
@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-4">
        <!--begin::Misc Widget 1-->
        <div class="row mb-5 mb-xl-8 g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-6">
                <!--begin::Card-->
                <div class="card card-stretch">
                    <!--begin::Link-->
                    <a href="account/overview.html" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                        <span class="svg-icon svg-icon-3x mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="currentColor" />
                                <path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="currentColor" />
                                <path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <span class="fs-4 fw-bolder">کاربر پروفایل</span>
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-6">
                <!--begin::Card-->
                <div class="card card-stretch">
                    <!--begin::Link-->
                    <a href="account/statements.html" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                        <span class="svg-icon svg-icon-3x mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="currentColor" />
                                <path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <span class="fs-4 fw-bolder">بیانه ها</span>
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-6">
                <!--begin::Card-->
                <div class="card card-stretch">
                    <!--begin::Link-->
                    <a href="account/referrals.html" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
                        <span class="svg-icon svg-icon-3x mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M21 10.7192H3C2.4 10.7192 2 11.1192 2 11.7192C2 12.3192 2.4 12.7192 3 12.7192H6V14.7192C6 18.0192 8.7 20.7192 12 20.7192C15.3 20.7192 18 18.0192 18 14.7192V12.7192H21C21.6 12.7192 22 12.3192 22 11.7192C22 11.1192 21.6 10.7192 21 10.7192Z" fill="currentColor" />
                                <path d="M11.6 21.9192C11.4 21.9192 11.2 21.8192 11 21.7192C10.6 21.4192 10.5 20.7191 10.8 20.3191C11.7 19.1191 12.3 17.8191 12.7 16.3191C12.8 15.8191 13.4 15.4192 13.9 15.6192C14.4 15.7192 14.8 16.3191 14.6 16.8191C14.2 18.5191 13.4 20.1192 12.4 21.5192C12.2 21.7192 11.9 21.9192 11.6 21.9192ZM8.7 19.7192C10.2 18.1192 11 15.9192 11 13.7192V8.71917C11 8.11917 11.4 7.71917 12 7.71917C12.6 7.71917 13 8.11917 13 8.71917V13.0192C13 13.6192 13.4 14.0192 14 14.0192C14.6 14.0192 15 13.6192 15 13.0192V8.71917C15 7.01917 13.7 5.71917 12 5.71917C10.3 5.71917 9 7.01917 9 8.71917V13.7192C9 15.4192 8.4 17.1191 7.2 18.3191C6.8 18.7191 6.9 19.3192 7.3 19.7192C7.5 19.9192 7.7 20.0192 8 20.0192C8.3 20.0192 8.5 19.9192 8.7 19.7192ZM6 16.7192C6.5 16.7192 7 16.2192 7 15.7192V8.71917C7 8.11917 7.1 7.51918 7.3 6.91918C7.5 6.41918 7.2 5.8192 6.7 5.6192C6.2 5.4192 5.59999 5.71917 5.39999 6.21917C5.09999 7.01917 5 7.81917 5 8.71917V15.7192V15.8191C5 16.3191 5.5 16.7192 6 16.7192ZM9 4.71917C9.5 4.31917 10.1 4.11918 10.7 3.91918C11.2 3.81918 11.5 3.21917 11.4 2.71917C11.3 2.21917 10.7 1.91916 10.2 2.01916C9.4 2.21916 8.59999 2.6192 7.89999 3.1192C7.49999 3.4192 7.4 4.11916 7.7 4.51916C7.9 4.81916 8.2 4.91918 8.5 4.91918C8.6 4.91918 8.8 4.81917 9 4.71917ZM18.2 18.9192C18.7 17.2192 19 15.5192 19 13.7192V8.71917C19 5.71917 17.1 3.1192 14.3 2.1192C13.8 1.9192 13.2 2.21917 13 2.71917C12.8 3.21917 13.1 3.81916 13.6 4.01916C15.6 4.71916 17 6.61917 17 8.71917V13.7192C17 15.3192 16.8 16.8191 16.3 18.3191C16.1 18.8191 16.4 19.4192 16.9 19.6192C17 19.6192 17.1 19.6192 17.2 19.6192C17.7 19.6192 18 19.3192 18.2 18.9192Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <span class="fs-4 fw-bolder">برتر مراجعات</span>
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-6">
                <!--begin::Card-->
                <div class="card card-stretch">
                    <!--begin::Link-->
                    <a href="apps/customers/view.html" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs025.svg-->
                        <span class="svg-icon svg-icon-3x mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M16.925 3.90078V8.00077L12.025 10.8008V5.10078L15.525 3.10078C16.125 2.80078 16.925 3.20078 16.925 3.90078ZM2.525 13.5008L6.025 15.5008L10.925 12.7008L6.025 9.90078L2.525 11.9008C1.825 12.3008 1.825 13.2008 2.525 13.5008ZM18.025 19.7008V15.6008L13.125 12.8008V18.5008L16.625 20.5008C17.225 20.8008 18.025 20.4008 18.025 19.7008Z" fill="currentColor" />
                                <path opacity="0.3" d="M8.52499 3.10078L12.025 5.10078V10.8008L7.125 8.00077V3.90078C7.125 3.20078 7.92499 2.80078 8.52499 3.10078ZM7.42499 20.5008L10.925 18.5008V12.8008L6.02499 15.6008V19.7008C6.02499 20.4008 6.82499 20.8008 7.42499 20.5008ZM21.525 11.9008L18.025 9.90078L13.125 12.7008L18.025 15.5008L21.525 13.5008C22.225 13.2008 22.225 12.3008 21.525 11.9008Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <span class="fs-4 fw-bolder">انتخاب های داغ</span>
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-6">
                <!--begin::Card-->
                <div class="card card-stretch">
                    <!--begin::Link-->
                    <a href="apps/projects/project.html" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                        <span class="svg-icon svg-icon-3x mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
                                <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
                                <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <span class="fs-4 fw-bolder">ترندها</span>
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-6">
                <!--begin::Card-->
                <div class="card card-stretch">
                    <!--begin::Link-->
                    <a href="apps/projects/users.html" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                        <span class="svg-icon svg-icon-3x mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z" fill="currentColor" />
                                <path d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <span class="fs-4 fw-bolder">جدید ورودها</span>
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Misc Widget 1-->
        <!--begin::لیست Widget 5-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header align-items-center border-0 mt-4">
                <h3 class="card-title align-items-start flex-column">
                    <span class="fw-bolder mb-2 text-dark">فعالیتها</span>
                    <span class="text-muted fw-bold fs-7">890 فروش</span>
                </h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_62445f03650a7">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">فیلتر تنظیمات</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Tags-->
                                <label class="form-label fw-bold">وضعیت:</label>
                                <!--end::Tags-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="انتخاب گزینه" data-dropdown-parent="#kt_menu_62445f03650a7" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">تایید شده</option>
                                        <option value="2">در انتظار</option>
                                        <option value="2">در حال پردازش</option>
                                        <option value="2">رد شد</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Tags-->
                                <label class="form-label fw-bold">نوع عضویت:</label>
                                <!--end::Tags-->
                                <!--begin::تنظیمات-->
                                <div class="d-flex">
                                    <!--begin::تنظیمات-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">نویسنده</span>
                                    </label>
                                    <!--end::تنظیمات-->
                                    <!--begin::تنظیمات-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">مشتری</span>
                                    </label>
                                    <!--end::تنظیمات-->
                                </div>
                                <!--end::تنظیمات-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Tags-->
                                <label class="form-label fw-bold">اعلان ها:</label>
                                <!--end::Tags-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                    <label class="form-check-label">فعال</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">ریست</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">تایید</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-5">
                <!--begin::timeline-->
                <div class="timeline-label">
                    <!--begin::آیتم-->
                    <div class="timeline-item">
                        <!--begin::Tags-->
                        <div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
                        <!--end::Tags-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-warning fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Text-->
                        <div class="fw-mormal timeline-content text-muted ps-3">رئوس مطالب شما را صادق نگه می دارد. و ساختار را حفظ کنید</div>
                        <!--end::Text-->
                    </div>
                    <!--end::آیتم-->
                    <!--begin::آیتم-->
                    <div class="timeline-item">
                        <!--begin::Tags-->
                        <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                        <!--end::Tags-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-success fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Content-->
                        <div class="timeline-content d-flex">
                            <span class="fw-bolder text-gray-800 ps-3">جلسه ایول</span>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::آیتم-->
                    <!--begin::آیتم-->
                    <div class="timeline-item">
                        <!--begin::Tags-->
                        <div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
                        <!--end::Tags-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-danger fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Desc-->
                        <div class="timeline-content fw-bolder text-gray-800 ps-3">سپرده گذاری کنید
                        <a href="#" class="text-primary">700دلار</a>به ایسل</div>
                        <!--end::Desc-->
                    </div>
                    <!--end::آیتم-->
                    <!--begin::آیتم-->
                    <div class="timeline-item">
                        <!--begin::Tags-->
                        <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                        <!--end::Tags-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-primary fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Text-->
                        <div class="timeline-content fw-mormal text-muted ps-3">لذت بردن از رانندگی ضعیف و حفظ ساختار عالی است</div>
                        <!--end::Text-->
                    </div>
                    <!--end::آیتم-->
                    <!--begin::آیتم-->
                    <div class="timeline-item">
                        <!--begin::Tags-->
                        <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                        <!--end::Tags-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-danger fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Desc-->
                        <div class="timeline-content fw-bold text-gray-800 ps-3">سفارش جدید قرار داده شده است
                        <a href="#" class="text-primary">#XF-2356</a>.</div>
                        <!--end::Desc-->
                    </div>
                    <!--end::آیتم-->
                    <!--begin::آیتم-->
                    <div class="timeline-item">
                        <!--begin::Tags-->
                        <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                        <!--end::Tags-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-primary fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Text-->
                        <div class="timeline-content fw-mormal text-muted ps-3">لذت بردن از رانندگی ضعیف و حفظ ساختار عالی است</div>
                        <!--end::Text-->
                    </div>
                    <!--end::آیتم-->
                    <!--begin::آیتم-->
                    <div class="timeline-item">
                        <!--begin::Tags-->
                        <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                        <!--end::Tags-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-danger fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Desc-->
                        <div class="timeline-content fw-bold text-gray-800 ps-3">سفارش جدید قرار داده شده است
                        <a href="#" class="text-primary">#XF-2356</a>.</div>
                        <!--end::Desc-->
                    </div>
                    <!--end::آیتم-->
                    <!--begin::آیتم-->
                    <div class="timeline-item mb-9">
                        <!--begin::Tags-->
                        <div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
                        <!--end::Tags-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-success fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Text-->
                        <div class="timeline-content fw-mormal text-muted ps-3">جلسه مقدماتی برنامه موبایل</div>
                        <!--end::Text-->
                    </div>
                    <!--end::آیتم-->
                </div>
                <!--end::timeline-->
            </div>
            <!--end: Card Body-->
        </div>
        <!--end: لیست Widget 5-->
        <!--begin::لیست Widget 4-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder text-dark">روندها</span>
                    <span class="text-muted mt-1 fw-bold fs-7">جدیدترین روندهای فناوری</span>
                </h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">درگاه ها</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">ساختن فاکتور</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3">ساختن پرداخت
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for امکاناتusage و reference"></i></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">بیل تولید کنید</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">اشتراک</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">برنامه ریزی ها</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">صورتحساب</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">بیانه ها</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                            <!--end::Input-->
                                            <!--end::Tags-->
                                            <span class="form-check-label text-muted fs-6">وضعیت</span>
                                            <!--end::Tags-->
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3">تنظیمات</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-5">
                <!--begin::آیتم-->
                <div class="d-flex align-items-sm-center mb-7">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::بخش-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <div class="flex-grow-1 me-2">
                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">بالا نویسندگان</a>
                            <span class="text-muted fw-bold d-block fs-7">جوادی و جمشیدی</span>
                        </div>
                        <span class="badge badge-light fw-bolder my-2">+82$</span>
                    </div>
                    <!--end::بخش-->
                </div>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <div class="d-flex align-items-sm-center mb-7">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::بخش-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <div class="flex-grow-1 me-2">
                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">محبوب نویسندگان</a>
                            <span class="text-muted fw-bold d-block fs-7">حسینی و رضایی</span>
                        </div>
                        <span class="badge badge-light fw-bolder my-2">+280$</span>
                    </div>
                    <!--end::بخش-->
                </div>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <div class="d-flex align-items-sm-center mb-7">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::بخش-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <div class="flex-grow-1 me-2">
                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">جدید کاربران</a>
                            <span class="text-muted fw-bold d-block fs-7">محمدی و سعیدی</span>
                        </div>
                        <span class="badge badge-light fw-bolder my-2">+4500$</span>
                    </div>
                    <!--end::بخش-->
                </div>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <div class="d-flex align-items-sm-center mb-7">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::بخش-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <div class="flex-grow-1 me-2">
                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">فعال مشتریان</a>
                            <span class="text-muted fw-bold d-block fs-7">جوادی و جمشیدی</span>
                        </div>
                        <span class="badge badge-light fw-bolder my-2">+686$</span>
                    </div>
                    <!--end::بخش-->
                </div>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <div class="d-flex align-items-sm-center mb-7">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::بخش-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <div class="flex-grow-1 me-2">
                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">تم پرفروش</a>
                            <span class="text-muted fw-bold d-block fs-7">ورزشی</span>
                        </div>
                        <span class="badge badge-light fw-bolder my-2">+726$</span>
                    </div>
                    <!--end::بخش-->
                </div>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <div class="d-flex align-items-sm-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label">
                            <img src="assets/media/svg/brand-logos/fox-hub.svg" class="h-50 align-self-center" alt="" />
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::بخش-->
                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                        <div class="flex-grow-1 me-2">
                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">اپلیکیشن فاکس</a>
                            <span class="text-muted fw-bold d-block fs-7">اپلیکیشن مالی</span>
                        </div>
                        <span class="badge badge-light fw-bolder my-2">+145$</span>
                    </div>
                    <!--end::بخش-->
                </div>
                <!--end::آیتم-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::لیست Widget 4-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-8 ps-xl-12">
        <!--begin::Engage widget 1-->
        <div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px bg-primary mb-5 mb-xl-8" style="background-color: ;background-position: 100% 50px;background-size: 500px auto;background-image:url('assets/media/misc/city.png')">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column justify-content-center ps-lg-12">
                <!--begin::Title-->
                <h3 class="text-white fs-2qx fw-bolder mb-7">ما در حال کار هستیم
                <br />برای تقویت خلق و خوی دوست داشتنی</h3>
                <!--end::Title-->
                <!--begin::Actions-->
                <div class="m-0">
                    <a href='#' class="btn btn-success fw-bold px-6 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">ساختن  فروشگاه</a>
                </div>
                <!--begin::Actions-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Engage widget 1-->
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-6">
                <!--begin::مخلوط Widget 5-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Beader-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">روندها</span>
                            <span class="text-muted fw-bold fs-7">اخرین روندها</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 3-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="menu-item px-3">
                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">درگاه ها</div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">ساختن فاکتور</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link flex-stack px-3">ساختن پرداخت
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for امکاناتusage و reference"></i></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">بیل تولید کنید</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">اشتراک</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">برنامه ریزی ها</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">صورتحساب</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">بیانه ها</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                    <!--end::Input-->
                                                    <!--end::Tags-->
                                                    <span class="form-check-label text-muted fs-6">وضعیت</span>
                                                    <!--end::Tags-->
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-1">
                                    <a href="#" class="menu-link px-3">تنظیمات</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 3-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column">
                        <!--begin::Chart-->
                        <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="primary" style="height: 150px"></div>
                        <!--end::Chart-->
                        <!--begin::آیتمs-->
                        <div class="mt-5">
                            <!--begin::آیتم-->
                            <div class="d-flex flex-stack mb-5">
                                <!--begin::بخش-->
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light">
                                            <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="" />
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">بالا نویسندگان</a>
                                        <div class="fs-7 text-muted fw-bold mt-1">محمد ابراهیمی</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::بخش-->
                                <!--begin::Tags-->
                                <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                <!--end::Tags-->
                            </div>
                            <!--end::آیتم-->
                            <!--begin::آیتم-->
                            <div class="d-flex flex-stack mb-5">
                                <!--begin::بخش-->
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light">
                                            <img src="assets/media/svg/brand-logos/figma-1.svg" class="h-50" alt="" />
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div>
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">بالاترین فروش</a>
                                        <div class="fs-7 text-muted fw-bold mt-1">پیت شاپ</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::بخش-->
                                <!--begin::Tags-->
                                <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                <!--end::Tags-->
                            </div>
                            <!--end::آیتم-->
                            <!--begin::آیتم-->
                            <div class="d-flex flex-stack">
                                <!--begin::بخش-->
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-3">
                                        <div class="symbol-label bg-light">
                                            <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="" />
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="py-1">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">نامزدی برتر</a>
                                        <div class="fs-7 text-muted fw-bold mt-1">KT.com</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::بخش-->
                                <!--begin::Tags-->
                                <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                <!--end::Tags-->
                            </div>
                            <!--end::آیتم-->
                        </div>
                        <!--end::آیتمs-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::مخلوط Widget 5-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6">
                <!--begin::لیست Widget 3-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bolder text-dark">انجام دادن</h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 3-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="menu-item px-3">
                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">درگاه ها</div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">ساختن فاکتور</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link flex-stack px-3">ساختن پرداخت
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for امکاناتusage و reference"></i></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">بیل تولید کنید</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">اشتراک</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">برنامه ریزی ها</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">صورتحساب</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">بیانه ها</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                    <!--end::Input-->
                                                    <!--end::Tags-->
                                                    <span class="form-check-label text-muted fs-6">وضعیت</span>
                                                    <!--end::Tags-->
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-1">
                                    <a href="#" class="menu-link px-3">تنظیمات</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 3-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <!--begin::آیتم-->
                        <div class="d-flex align-items-center mb-8">
                            <!--begin::Bullet-->
                            <span class="bullet bullet-vertical h-40px bg-success"></span>
                            <!--end::Bullet-->
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid mx-5">
                                <input class="form-check-input" type="checkbox" value="" />
                            </div>
                            <!--end::Checkbox-->
                            <!--begin::توضیحات-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">ساختن لوگو فروشگاه</a>
                                <span class="text-muted fw-bold d-block">سررسید در 2 روز</span>
                            </div>
                            <!--end::توضیحات-->
                            <span class="badge badge-light-success fs-8 fw-bolder">جدید</span>
                        </div>
                        <!--end:آیتم-->
                        <!--begin::آیتم-->
                        <div class="d-flex align-items-center mb-8">
                            <!--begin::Bullet-->
                            <span class="bullet bullet-vertical h-40px bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid mx-5">
                                <input class="form-check-input" type="checkbox" value="" />
                            </div>
                            <!--end::Checkbox-->
                            <!--begin::توضیحات-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">جلسه ذینفعان</a>
                                <span class="text-muted fw-bold d-block">سررسید سه روز</span>
                            </div>
                            <!--end::توضیحات-->
                            <span class="badge badge-light-primary fs-8 fw-bolder">جدید</span>
                        </div>
                        <!--end:آیتم-->
                        <!--begin::آیتم-->
                        <div class="d-flex align-items-center mb-8">
                            <!--begin::Bullet-->
                            <span class="bullet bullet-vertical h-40px bg-warning"></span>
                            <!--end::Bullet-->
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid mx-5">
                                <input class="form-check-input" type="checkbox" value="" />
                            </div>
                            <!--end::Checkbox-->
                            <!--begin::توضیحات-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">تخمین زدن</a>
                                <span class="text-muted fw-bold d-block">سررسید در 5 روز</span>
                            </div>
                            <!--end::توضیحات-->
                            <span class="badge badge-light-warning fs-8 fw-bolder">جدید</span>
                        </div>
                        <!--end:آیتم-->
                        <!--begin::آیتم-->
                        <div class="d-flex align-items-center mb-8">
                            <!--begin::Bullet-->
                            <span class="bullet bullet-vertical h-40px bg-primary"></span>
                            <!--end::Bullet-->
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid mx-5">
                                <input class="form-check-input" type="checkbox" value="" />
                            </div>
                            <!--end::Checkbox-->
                            <!--begin::توضیحات-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">ویترین برنامه</a>
                                <span class="text-muted fw-bold d-block">سررسید در 2 روز</span>
                            </div>
                            <!--end::توضیحات-->
                            <span class="badge badge-light-primary fs-8 fw-bolder">جدید</span>
                        </div>
                        <!--end:آیتم-->
                        <!--begin::آیتم-->
                        <div class="d-flex align-items-center mb-8">
                            <!--begin::Bullet-->
                            <span class="bullet bullet-vertical h-40px bg-danger"></span>
                            <!--end::Bullet-->
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid mx-5">
                                <input class="form-check-input" type="checkbox" value="" />
                            </div>
                            <!--end::Checkbox-->
                            <!--begin::توضیحات-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">ملاقات پروژه ها</a>
                                <span class="text-muted fw-bold d-block">سررسید در دوازده روز</span>
                            </div>
                            <!--end::توضیحات-->
                            <span class="badge badge-light-danger fs-8 fw-bolder">جدید</span>
                        </div>
                        <!--end:آیتم-->
                        <!--begin::آیتم-->
                        <div class="d-flex align-items-center">
                            <!--begin::Bullet-->
                            <span class="bullet bullet-vertical h-40px bg-success"></span>
                            <!--end::Bullet-->
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid mx-5">
                                <input class="form-check-input" type="checkbox" value="" />
                            </div>
                            <!--end::Checkbox-->
                            <!--begin::توضیحات-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">مشتریان بروزرسانی</a>
                                <span class="text-muted fw-bold d-block">سررسید در یک هفته</span>
                            </div>
                            <!--end::توضیحات-->
                            <span class="badge badge-light-success fs-8 fw-bolder">جدید</span>
                        </div>
                        <!--end:آیتم-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end:لیست Widget 3-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::جداول Widget 5-->
        <div class="card mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">اخرین محصولات</span>
                    <span class="text-muted mt-1 fw-bold fs-7">بیشتر از 400 محصول جدید</span>
                </h3>
                <div class="card-toolbar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1 active" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">ماه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">هفته</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">روز</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <div class="tab-content">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="border-0">
                                        <th class="p-0 w-50px"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 min-w-140px"></th>
                                        <th class="p-0 min-w-110px"></th>
                                        <th class="p-0 min-w-50px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-45px me-2">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">برد سیمونز</a>
                                            <span class="text-muted fw-bold d-block">خالق فیلم</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">React, HTML</td>
                                        <td class="text-end">
                                            <span class="badge badge-light-success">تایید شده</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-45px me-2">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">محبوب نویسندگان</a>
                                            <span class="text-muted fw-bold d-block">موفق ترین</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">Python, MYSQL</td>
                                        <td class="text-end">
                                            <span class="badge badge-light-warning">درحال پردازش</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-45px me-2">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">جدید کاربران</a>
                                            <span class="text-muted fw-bold d-block">کاربران</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">Laravel</td>
                                        <td class="text-end">
                                            <span class="badge badge-light-primary">موفقیت آمیز</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-45px me-2">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">فعال مشتریان</a>
                                            <span class="text-muted fw-bold d-block">خالق فیلم</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                        <td class="text-end">
                                            <span class="badge badge-light-danger">رد شد</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-45px me-2">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">تم پرفروش</a>
                                            <span class="text-muted fw-bold d-block">برتر مشتریان</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                        <td class="text-end">
                                            <span class="badge badge-light-warning">درحال پردازش</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="border-0">
                                        <th class="p-0 w-50px"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 min-w-140px"></th>
                                        <th class="p-0 min-w-110px"></th>
                                        <th class="p-0 min-w-50px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-45px me-2">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">برد سیمونز</a>
                                            <span class="text-muted fw-bold d-block">خالق فیلم</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">React, HTML</td>
                                        <td class="text-end">
                                            <span class="badge badge-light-success">تایید شده</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-45px me-2">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">محبوب نویسندگان</a>
                                            <span class="text-muted fw-bold d-block">موفق ترین</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">Python, MYSQL</td>
                                        <td class="text-end">
                                            <span class="badge badge-light-warning">درحال پردازش</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-45px me-2">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">فعال مشتریان</a>
                                            <span class="text-muted fw-bold d-block">خالق فیلم</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                        <td class="text-end">
                                            <span class="badge badge-light-danger">رد شد</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="border-0">
                                        <th class="p-0 w-50px"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 min-w-140px"></th>
                                        <th class="p-0 min-w-110px"></th>
                                        <th class="p-0 min-w-50px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-45px me-2">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">تم پرفروش</a>
                                            <span class="text-muted fw-bold d-block">برتر مشتریان</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                        <td class="text-end">
                                            <span class="badge badge-light-warning">درحال پردازش</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-45px me-2">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">فعال مشتریان</a>
                                            <span class="text-muted fw-bold d-block">خالق فیلم</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                        <td class="text-end">
                                            <span class="badge badge-light-danger">رد شد</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-45px me-2">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">جدید کاربران</a>
                                            <span class="text-muted fw-bold d-block">کاربران</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">Laravel</td>
                                        <td class="text-end">
                                            <span class="badge badge-light-primary">موفقیت آمیز</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-45px me-2">
                                                <span class="symbol-label">
                                                    <img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">محبوب نویسندگان</a>
                                            <span class="text-muted fw-bold d-block">موفق ترین</span>
                                        </td>
                                        <td class="text-end text-muted fw-bold">Python, MYSQL</td>
                                        <td class="text-end">
                                            <span class="badge badge-light-warning">درحال پردازش</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::جداول Widget 5-->
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-6">
                <!--begin::مخلوط Widget 8-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack">
                            <!--begin:Info-->
                            <div class="d-flex align-items-center">
                                <!--begin:Image-->
                                <div class="symbol symbol-60px me-5">
                                    <span class="symbol-label bg-danger-light">
                                        <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
                                    </span>
                                </div>
                                <!--end:Image-->
                                <!--begin:Title-->
                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-5">ماهانه اشتراک</a>
                                    <span class="text-muted fw-bold">سررسید تا تاریخ 5 فروردین 1400</span>
                                </div>
                                <!--end:Title-->
                            </div>
                            <!--begin:Info-->
                            <!--begin:Menu-->
                            <div class="ms-1">
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">عملیات سریع</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">تیکت جدید</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">جدید مشتری</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">گروه جدید</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">گروه مدیر</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">گروه کارکنان</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">گروه عضوها</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">مخاطبین جدید</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">گزارش ایجاد کنید</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Heading-->
                        <!--begin:Stats-->
                        <div class="d-flex flex-column w-100 mt-12">
                            <span class="text-dark me-2 fw-bolder pb-3">پردازش</span>
                            <div class="progress h-5px w-100">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end:Stats-->
                        <!--begin:team-->
                        <div class="d-flex flex-column mt-10">
                            <div class="text-dark me-2 fw-bolder pb-4">تیم</div>
                            <div class="d-flex">
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
                                    <img src="assets/media/avatars/300-6.jpg" alt="" />
                                </a>
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="اسفندk Larson">
                                    <img src="assets/media/avatars/300-5.jpg" alt="" />
                                </a>
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
                                    <img src="assets/media/avatars/300-9.jpg" alt="" />
                                </a>
                                <a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alice Micto">
                                    <img src="assets/media/avatars/300-10.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!--end:team-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::مخلوط Widget 8-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6">
                <!--begin::مخلوط Widget 8-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack">
                            <!--begin:Info-->
                            <div class="d-flex align-items-center">
                                <!--begin:Image-->
                                <div class="symbol symbol-60px me-5">
                                    <span class="symbol-label bg-primary-light">
                                        <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
                                    </span>
                                </div>
                                <!--end:Image-->
                                <!--begin:Title-->
                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-5">ماهانه اشتراک</a>
                                    <span class="text-muted fw-bold">سررسید تا تاریخ 5 فروردین 1400</span>
                                </div>
                                <!--end:Title-->
                            </div>
                            <!--begin:Info-->
                            <!--begin:Menu-->
                            <div class="ms-1">
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">عملیات سریع</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">تیکت جدید</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">جدید مشتری</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">گروه جدید</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">گروه مدیر</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">گروه کارکنان</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">گروه عضوها</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">مخاطبین جدید</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">گزارش ایجاد کنید</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Heading-->
                        <!--begin:Stats-->
                        <div class="d-flex flex-column w-100 mt-12">
                            <span class="text-dark me-2 fw-bolder pb-3">پردازش</span>
                            <div class="progress h-5px w-100">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end:Stats-->
                        <!--begin:team-->
                        <div class="d-flex flex-column mt-10">
                            <div class="text-dark me-2 fw-bolder pb-4">تیم</div>
                            <div class="d-flex">
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
                                    <img src="assets/media/avatars/300-6.jpg" alt="" />
                                </a>
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="اسفندk Larson">
                                    <img src="assets/media/avatars/300-5.jpg" alt="" />
                                </a>
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
                                    <img src="assets/media/avatars/300-9.jpg" alt="" />
                                </a>
                                <a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alice Micto">
                                    <img src="assets/media/avatars/300-10.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!--end:team-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::مخلوط Widget 8-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->
<!--begin::فعالیتها drawer-->
<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
    <div class="card shadow-none rounded-0">
        <!--begin::Header-->
        <div class="card-header" id="kt_activities_header">
            <h3 class="card-title fw-bolder text-dark">گزارش ها</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body position-relative" id="kt_activities_body">
            <!--begin::Content-->
            <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
                <!--begin::timeline items-->
                <div class="timeline">
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
                                        <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">در پروژه اپلیکیشن موبایل  کار جدید برای شما وجود دارد:</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">اضافه شده در ساعت 4:12</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                            <!--begin::timeline details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Record-->
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                    <!--begin::Title-->
                                    <a href="apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">ملاقات با مشتری</a>
                                    <!--end::Title-->
                                    <!--begin::Tags-->
                                    <div class="min-w-175px pe-2">
                                        <span class="badge badge-light text-muted">طراح نرم افزار</span>
                                    </div>
                                    <!--end::Tags-->
                                    <!--begin::users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                        </div>
                                        <!--end::user-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::user-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">A</div>
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::users-->
                                    <!--begin::پردازش-->
                                    <div class="min-w-125px pe-2">
                                        <span class="badge badge-light-primary">درحال پردازش</span>
                                    </div>
                                    <!--end::پردازش-->
                                    <!--begin::Actions-->
                                    <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">نمایش</a>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Record-->
                                <!--begin::Record-->
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                    <!--begin::Title-->
                                    <a href="apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">آماده سازی تحویل پروژه</a>
                                    <!--end::Title-->
                                    <!--begin::Tags-->
                                    <div class="min-w-175px">
                                        <span class="badge badge-light text-muted">توسعه دهنده سیستم</span>
                                    </div>
                                    <!--end::Tags-->
                                    <!--begin::users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="assets/media/avatars/300-20.jpg" alt="img" />
                                        </div>
                                        <!--end::user-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">B</div>
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::users-->
                                    <!--begin::پردازش-->
                                    <div class="min-w-125px">
                                        <span class="badge badge-light-success">کامل شد</span>
                                    </div>
                                    <!--end::پردازش-->
                                    <!--begin::Actions-->
                                    <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">نمایش</a>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Record-->
                            </div>
                            <!--end::timeline details-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor" />
                                        <path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n2">
                            <!--begin::timeline heading-->
                            <div class="overflow-auto pe-3">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">دعوت نامه برای ساخت طراحی های جذاب که کارگاه انسانی رابیانمی کنند</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">ارسال شده در ساعت 4:23</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                        <img src="assets/media/avatars/300-1.jpg" alt="img" />
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
                                        <path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::timeline heading-->
                            <div class="mb-5 pe-3">
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 پروژه ورودی جدید پرونده ها:</a>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">ارسال شده در ساعت 10:30</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="دی Hummer">
                                        <img src="assets/media/avatars/300-23.jpg" alt="img" />
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                            <!--begin::timeline details-->
                            <div class="overflow-auto pb-5">
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                    <!--begin::آیتم-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-bold">
                                            <!--begin::Desc-->
                                            <a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bolder">اپلیکیشن مالی</a>
                                            <!--end::Desc-->
                                            <!--begin::شماره کارت-->
                                            <div class="text-gray-400">1.9mb</div>
                                            <!--end::شماره کارت-->
                                        </div>
                                        <!--begin::Info-->
                                    </div>
                                    <!--end::آیتم-->
                                    <!--begin::آیتم-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-bold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bolder">مشتری نتایج تست</a>
                                            <!--end::Desc-->
                                            <!--begin::شماره کارت-->
                                            <div class="text-gray-400">18kb</div>
                                            <!--end::شماره کارت-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::آیتم-->
                                    <!--begin::آیتم-->
                                    <div class="d-flex flex-aligns-center">
                                        <!--begin::Icon-->
                                        <img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-1 fw-bold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bolder">گزارشات مالی</a>
                                            <!--end::Desc-->
                                            <!--begin::شماره کارت-->
                                            <div class="text-gray-400">20mb</div>
                                            <!--end::شماره کارت-->
                                        </div>
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::آیتم-->
                                </div>
                            </div>
                            <!--end::timeline details-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">وظیفه
                                <a href="#" class="text-primary fw-bolder me-1">#45890</a>ادغام با
                                <a href="#" class="text-primary fw-bolder me-1">#45890</a>داشبورد پروژه ها:</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">آغاز شده در 4:23 بعد از ظهر توسط</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">3 مفهوم جدید طراحی برنامه اضافه شده است:</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">ایجاد شده در 4:23 بعد از ظهر توسط</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="اسفندcus Dotson">
                                        <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                            <!--begin::timeline details-->
                            <div class="overflow-auto pb-5">
                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                    <!--begin::آیتم-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::آیتم-->
                                    <!--begin::آیتم-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::آیتم-->
                                    <!--begin::آیتم-->
                                    <div class="overlay">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::آیتم-->
                                </div>
                            </div>
                            <!--end::timeline details-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                                        <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">کیس جدید
                                <a href="#" class="text-primary fw-bolder me-1">#67890</a>در پروژه طراحی دیتابیس چند سکویی به شما اختصاص داده شده است</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">اضافه شده در ساعت 4:12</div>
                                        <!--end::Info-->
                                        <!--begin::user-->
                                        <a href="#" class="text-primary fw-bolder me-1">رضا علی ابادی</a>
                                        <!--end::user-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">رسید به دست شما سفارش جدید</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">در 5:05 صبح توسط</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                        <img src="assets/media/avatars/300-4.jpg" alt="img" />
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                            <!--begin::timeline details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
                                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z" fill="currentColor" />
                                            <path d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                        <!--begin::Content-->
                                        <div class="mb-3 mb-md-0 fw-bold">
                                            <h4 class="text-gray-900 fw-bolder">پردازش دیتابی کامل شد</h4>
                                            <div class="fs-6 text-gray-700 pe-7">وارد ادمین داشبورد شوید تا مطمئن شوید که یکپارچگی داده ها موفق است</div>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Actions-->
                                        <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">پردازش</a>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::timeline details-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                    <!--begin::timeline item-->
                    <div class="timeline-item">
                        <!--begin::timeline line-->
                        <div class="timeline-line w-40px"></div>
                        <!--end::timeline line-->
                        <!--begin::timeline icon-->
                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                            <div class="symbol-label bg-light">
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
                                        <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
                                        <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::timeline icon-->
                        <!--begin::timeline content-->
                        <div class="timeline-content mt-n1">
                            <!--begin::timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">سفارش جدید
                                <a href="#" class="text-primary fw-bolder me-1">#67890</a>برای برآورد پلان و بودجه قرار داده شده است</div>
                                <!--end::Title-->
                                <!--begin::توضیحات-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">در ساعت 4:23 بعد از ظهر توسط</div>
                                    <!--end::Info-->
                                    <!--begin::user-->
                                    <a href="#" class="text-primary fw-bolder me-1">محسن علی ابادی</a>
                                    <!--end::user-->
                                </div>
                                <!--end::توضیحات-->
                            </div>
                            <!--end::timeline heading-->
                        </div>
                        <!--end::timeline content-->
                    </div>
                    <!--end::timeline item-->
                </div>
                <!--end::timeline items-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_activities_footer">
            <a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">نمایش تمام فعالیت ها
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
            <span class="svg-icon svg-icon-3 svg-icon-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                    <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon--></a>
        </div>
        <!--end::Footer-->
    </div>
</div>
<!--end::فعالیتها drawer-->
<!--begin::چت drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
    <!--begin::Messenger-->
    <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::user-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">رضا علی ابادی</a>
                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-bold text-muted">فعال</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::user-->
            </div>
            <!--end::Title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="bi bi-three-dots fs-3"></i>
                    </button>
                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">مخاطبین</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">افزودن مخاطب</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">دعوت از مخاطبین
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="برای ارسال دعوت نامه یک ایمیل تماس مشخص کنید"></i></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">گروه ها</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">ساختن گروه</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">دعوت کاربران</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">تنظیمات</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">تنظیمات</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::پیام ها-->
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                <!--begin::پیام(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">دو دقیقه پیش</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">چقدر احتمال دارد که شرکت ما را به دوستان و خانواده خود پیشنهاد دهید؟?</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(in)-->
                <!--begin::پیام(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">5دقیقه پیش</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">شما</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">سلام ، ما فقط در حال نوشتن هستیم تا به شما اطلاع دهیم که در مخزن گیت هاب مشترک شده اید.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(out)-->
                <!--begin::پیام(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">یکساعت پیش</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">بله فهمیدم</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(in)-->
                <!--begin::پیام(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">2 ساعت</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">شما</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">شما برای همه موارد اعلان دریافت خواهید کرد ، درخواستها را بکشید!</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(out)-->
                <!--begin::پیام(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">3 ساعت</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">شما می توانید با فشردن اینجا بلافاصله این مخزن را باز کنید:
                        <a href="https://keenthemes.com">satrasweb.ir</a></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(in)-->
                <!--begin::پیام(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">4 ساعت</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">شما</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">بیشتر دوره های بازرگانی خریداری شده در طول این فروش!</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(out)-->
                <!--begin::پیام(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">5 ساعت</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">کمپانی BBQ برای جشن گرفتن دستاوردها و اهداف سه ماهه آخر. غذا و نوشیدنی ارائه می شود</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(in)-->
                <!--begin::پیام(template for out)-->
                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">فقط</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">شما</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text"></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(template for out)-->
                <!--begin::پیام(template for in)-->
                <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::user-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
                                <span class="text-muted fs-7 mb-1">فقط</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::user-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Bigمعامله for you.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::پیام(template for in)-->
            </div>
            <!--end::پیام ها-->
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="نوشتن پیام"></textarea>
            <!--end::Input-->
            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="بزودی">
                        <i class="bi bi-paperclip fs-3"></i>
                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="بزودی">
                        <i class="bi bi-upload fs-3"></i>
                    </button>
                </div>
                <!--end::Actions-->
                <!--begin::ارسال-->
                <button class="btn btn-primary" type="button" data-kt-element="send">ارسال</button>
                <!--end::ارسال-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::چت drawer-->
<!--end::کشوs-->
<!--end::Main-->
<!--begin::Engage drawers-->
<!--begin::دموها drawer-->
<div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bolder text-gray-700">کاوش کنید</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body" id="kt_engage_demos_body">
            <!--begin::Content-->
            <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body" data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
                <!--begin::Wrapper-->
                <div class="mb-0">
                    <!--begin::Heading-->
                    <div class="mb-7">
                        <div class="d-flex flex-stack">
                            <h3 class="mb-0">مترونیک مجوزها</h3>
                            <a href="https://themeforest.net/licenses/stوard" class="fw-bold" target="_blank">لاینسس شده سوالات متداول</a>
                        </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::لاینسس شده-->
                    <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                        <div class="d-flex flex-stack">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">منظم لاینسس شده</div>
                                    <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-dark" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client in a single end product which end کاربران are not charged for"></i>
                                </div>
                                <div class="fs-7 text-muted">برای محصول نهایی که توسط شما یا یک مشتری استفاده می شود</div>
                            </div>
                            <div class="text-nowrap">
                                <span class="text-muted fs-7 fw-bold me-n1">$</span>
                                <span class="text-dark fs-1 fw-bolder">39</span>
                            </div>
                        </div>
                    </div>
                    <!--end::لاینسس شده-->
                    <!--begin::لاینسس شده-->
                    <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                        <div class="d-flex flex-stack">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">تمدید شده لاینسس شده</div>
                                    <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-dark" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client, in a single end product which end کاربران can be charged for."></i>
                                </div>
                                <div class="fs-7 text-muted">برای یک برنامه SaaS با کاربران پرداخت</div>
                            </div>
                            <div class="text-nowrap">
                                <span class="text-muted fs-7 fw-bold me-n1">$</span>
                                <span class="text-dark fs-1 fw-bolder">969</span>
                            </div>
                        </div>
                    </div>
                    <!--end::لاینسس شده-->
                    <!--begin::لاینسس شده-->
                    <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                        <div class="d-flex flex-stack">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">سفارشی لاینسس شده</div>
                                </div>
                                <div class="fs-7 text-muted">برای پیشنهادات مجوز سفارشی با ما تماس بگیرید.</div>
                            </div>
                            <div class="text-nowrap">
                                <a href="https://keenthemes.com/contact/" class="btn btn-sm btn-success" target="_blank">تماس با ما</a>
                            </div>
                        </div>
                    </div>
                    <!--end::لاینسس شده-->
                    <!--begin::خرید-->
                    <a href="https://www.rtl-theme.com/metronic-admin-html-template/" class="btn btn-primary mb-15 w-100">خرید</a>
                    <!--end::خرید-->
                    <!--begin::دموها-->
                    <div class="mb-0">
                        <h3 class="fw-bolder text-center mb-6">دموهای مترونیک</h3>
                        <!--begin::Row-->
                        <div class="row g-5">
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo1.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo1" class="btn btn-sm btn-success shadow">دمو 1</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo2.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo2" class="btn btn-sm btn-success shadow">دمو 2</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo3.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo3" class="btn btn-sm btn-success shadow">دمو 3</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo4.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo4" class="btn btn-sm btn-success shadow">دمو 4</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo5.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo5" class="btn btn-sm btn-success shadow">دمو 5</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo6.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo6" class="btn btn-sm btn-success shadow">دمو 6</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo7.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo7" class="btn btn-sm btn-success shadow">دمو 7</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo8.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo8" class="btn btn-sm btn-success shadow">دمو 8</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo9.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo9" class="btn btn-sm btn-success shadow">دمو 9</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo10.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo10" class="btn btn-sm btn-success shadow">دمو 10</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo11.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo11" class="btn btn-sm btn-success shadow">دمو 11</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo12.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo12" class="btn btn-sm btn-success shadow">دمو 12</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo13.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo13" class="btn btn-sm btn-success shadow">دمو 13</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo14.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo14" class="btn btn-sm btn-success shadow">دمو 14</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo15.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo15" class="btn btn-sm btn-success shadow">دمو 15</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo16.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo16" class="btn btn-sm btn-success shadow">دمو 16</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo17.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo17" class="btn btn-sm btn-success shadow">دمو 17</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo18.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo18" class="btn btn-sm btn-success shadow">دمو 18</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo19.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo19" class="btn btn-sm btn-success shadow">دمو 19</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo20.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo20" class="btn btn-sm btn-success shadow">دمو 20</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo21.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo21" class="btn btn-sm btn-success shadow">دمو 21</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo22.png" alt="demo" class="w-100 opacity-25" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">بزودی</div>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo23.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="Https://preview.keenthemes.com/metronic8/demo23" class="btn btn-sm btn-success shadow">دمو 23</a>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::دمو-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo24.png" alt="demo" class="w-100 opacity-25" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">بزودی</div>
                                    </div>
                                </div>
                                <!--end::دمو-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::دموها-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
<!--end::دموها drawer-->
<!--begin::کمک drawer-->
<div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_help_header">
            <h5 class="card-title fw-bold text-gray-600">یادگیری و الهام گرفتن</h5>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body" id="kt_help_body">
            <!--begin::Content-->
            <div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body" data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
                <!--begin::پشتیبانی-->
                <div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
                    <!--begin::Heading-->
                    <h2 class="fw-bolder mb-5">پشتیبانی
                    <a href="https://rtl-theme.com" class="">rtl-theme.com</a></h2>
                    <!--end::Heading-->
                    <!--begin::توضیحات-->
                    <div class="fs-5 fw-bold mb-5">
                        <span class="text-gray-500">جامعه توسعه دهندگان ما را برای یافتن پاسخ سوال شما و کمک به دیگران پیوست کنید.</span>
                        <a class="explore-link d-none" href="https://keenthemes.com/licensing">سوالات متداول</a>
                    </div>
                    <!--end::توضیحات-->
                    <!--begin::Link-->
                    <a href="https://rtl-theme.com" class="btn btn-lg explore-btn-primary w-100">پشتیبانی</a>
                    <!--end::Link-->
                </div>
                <!--end::پشتیبانی-->
                <!--begin::Link-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                        <span class="svg-icon svg-icon-warning svg-icon-2x svg-icon-lg-3x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Info-->
                    <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column me-2 me-lg-5">
                            <!--begin::Title-->
                            <a href="documents/getting-started.html" class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">اسناد و ویدیوها</a>
                            <!--end::Title-->
                            <!--begin::توضیحات-->
                            <div class="text-muted fw-bold fs-7 fs-lg-6">از راهنماها و آموزش های ویدیویی گرفته تا دموهای زنده و نمونه کد برای شروع.</div>
                            <!--end::توضیحات-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Link-->
                <!--begin::Link-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                        <span class="svg-icon svg-icon-primary svg-icon-2x svg-icon-lg-3x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="currentColor" />
                                <path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="currentColor" />
                                <path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Info-->
                    <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column me-2 me-lg-5">
                            <!--begin::Title-->
                            <a href="documents/base/utilities.html" class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">پلاگین ها و کامپوننت ها</a>
                            <!--end::Title-->
                            <!--begin::توضیحات-->
                            <div class="text-muted fw-bold fs-7 fs-lg-6">بررسی 300+ in-house کامپوننت ها و customized 3rd-party plugins.</div>
                            <!--end::توضیحات-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Link-->
                <!--begin::Link-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
                        <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
                        <span class="svg-icon svg-icon-info svg-icon-2x svg-icon-lg-3x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="currentColor" />
                                <path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Info-->
                    <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column me-2 me-lg-5">
                            <!--begin::Title-->
                            <a href="Https://preview.keenthemes.com/metronic8/demo9/layout-builder.html" class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">قالب بندی سازنده</a>
                            <!--end::Title-->
                            <!--begin::توضیحات-->
                            <div class="text-muted fw-bold fs-7 fs-lg-6">طرح بندی خود را بسازید، آن را نمایش دهید و HTML را برای ادغام سمت سرور صادر کنید.</div>
                            <!--end::توضیحات-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Link-->
                <!--begin::Link-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-success">
                        <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                        <span class="svg-icon svg-icon-success svg-icon-2x svg-icon-lg-3x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
                                <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
                                <path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Info-->
                    <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column me-2 me-lg-5">
                            <!--begin::Title-->
                            <a href="https://rtl-theme.com/metronic" class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">مترونیک دانلود</a>
                            <!--end::Title-->
                            <!--begin::توضیحات-->
                            <div class="text-muted fw-bold fs-7 fs-lg-6">فریمورک و دمو دلخواه خود را با یک کلیک دانلود کنید.</div>
                            <!--end::توضیحات-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Link-->
                <!--begin::Link-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
                        <!--begin::Svg Icon | path: icons/duotune/electronics/elc009.svg-->
                        <span class="svg-icon svg-icon-danger svg-icon-2x svg-icon-lg-3x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M13 9V8C13 7.4 13.4 7 14 7H15C16.7 7 18 5.7 18 4V3C18 2.4 17.6 2 17 2C16.4 2 16 2.4 16 3V4C16 4.6 15.6 5 15 5H14C12.3 5 11 6.3 11 8V9H13Z" fill="currentColor" />
                                <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V10C2 9.4 2.4 9 3 9H21C21.6 9 22 9.4 22 10V21C22 21.6 21.6 22 21 22ZM5 12C4.4 12 4 12.4 4 13C4 13.6 4.4 14 5 14C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12ZM8 12C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14C8.6 14 9 13.6 9 13C9 12.4 8.6 12 8 12ZM11 12C10.4 12 10 12.4 10 13C10 13.6 10.4 14 11 14C11.6 14 12 13.6 12 13C12 12.4 11.6 12 11 12ZM14 12C13.4 12 13 12.4 13 13C13 13.6 13.4 14 14 14C14.6 14 15 13.6 15 13C15 12.4 14.6 12 14 12ZM9 15C8.4 15 8 15.4 8 16C8 16.6 8.4 17 9 17C9.6 17 10 16.6 10 16C10 15.4 9.6 15 9 15ZM12 15C11.4 15 11 15.4 11 16C11 16.6 11.4 17 12 17C12.6 17 13 16.6 13 16C13 15.4 12.6 15 12 15ZM15 15C14.4 15 14 15.4 14 16C14 16.6 14.4 17 15 17C15.6 17 16 16.6 16 16C16 15.4 15.6 15 15 15ZM19 18C18.4 18 18 18.4 18 19C18 19.6 18.4 20 19 20C19.6 20 20 19.6 20 19C20 18.4 19.6 18 19 18ZM7 19C7 18.4 6.6 18 6 18H5C4.4 18 4 18.4 4 19C4 19.6 4.4 20 5 20H6C6.6 20 7 19.6 7 19ZM7 16C7 15.4 6.6 15 6 15H5C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17H6C6.6 17 7 16.6 7 16ZM17 14H19C19.6 14 20 13.6 20 13C20 12.4 19.6 12 19 12H17C16.4 12 16 12.4 16 13C16 13.6 16.4 14 17 14ZM18 17H19C19.6 17 20 16.6 20 16C20 15.4 19.6 15 19 15H18C17.4 15 17 15.4 17 16C17 16.6 17.4 17 18 17ZM17 19C17 18.4 16.6 18 16 18H9C8.4 18 8 18.4 8 19C8 19.6 8.4 20 9 20H16C16.6 20 17 19.6 17 19Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Info-->
                    <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column me-2 me-lg-5">
                            <!--begin::Title-->
                            <a href="documents/getting-started/changelog.html" class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">جدید</a>
                            <!--end::Title-->
                            <!--begin::توضیحات-->
                            <div class="text-muted fw-bold fs-7 fs-lg-6">اخرین ها ویژگی ها و بهبودهایی که با در نظر گرفتن نظرات کاربران ما اضافه شده است.</div>
                            <!--end::توضیحات-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Link-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
<!--end::کمک drawer-->
<!--end::Engage drawers-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
        </svg>
    </span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--begin::Modal - ارتقا دهید plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="mb-3">یک برنامه را ارتقا کنید</h1>
                    <div class="text-muted fw-bold fs-5">اگر به اطلاعات لازم دارید ، لطفاً بررسی کنید
                    <a href="#" class="link-primary fw-bolder">دستورالعمل قیمت گذاری</a>.</div>
                </div>
                <!--end::Heading-->
                <!--begin::برنامه ریزی ها-->
                <div class="d-flex flex-column">
                    <!--begin::Nav group-->
                    <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">ماهانه</button>
                        <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">سالانه</button>
                    </div>
                    <!--end::Nav group-->
                    <!--begin::Row-->
                    <div class="row mt-10">
                        <!--begin::Col-->
                        <div class="col-lg-6 mb-10 mb-lg-0">
                            <!--begin::Tabs-->
                            <div class="nav flex-column">
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                    <!--end::توضیحات-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::رادیو-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
                                        </div>
                                        <!--end::رادیو-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">استارت آپ</h2>
                                            <div class="fw-bold opacity-50">برای استارت آپ ها</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
                                        <span class="fs-7 opacity-50">/
                                        <span data-kt-element="period">دوشنبه</span></span>
                                    </div>
                                    <!--end::قیمت-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                    <!--end::توضیحات-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::رادیو-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="advanced" />
                                        </div>
                                        <!--end::رادیو-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">پیشرفته</h2>
                                            <div class="fw-bold opacity-50">برتر برای 100+ تیم اندازه</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
                                        <span class="fs-7 opacity-50">/
                                        <span data-kt-element="period">دوشنبه</span></span>
                                    </div>
                                    <!--end::قیمت-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                    <!--end::توضیحات-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::رادیو-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="enterprise" />
                                        </div>
                                        <!--end::رادیو-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">شرکت، پروژه
                                            <span class="badge badge-light-success ms-2 fs-7">محبوب ترین</span></h2>
                                            <div class="fw-bold opacity-50">مقدار برتر برای 1000+ تیم</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                                        <span class="fs-7 opacity-50">/
                                        <span data-kt-element="period">دوشنبه</span></span>
                                    </div>
                                    <!--end::قیمت-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
                                    <!--end::توضیحات-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::رادیو-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="custom" />
                                        </div>
                                        <!--end::رادیو-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">سفارشی</h2>
                                            <div class="fw-bold opacity-50">دوباره مجوز سفارشی را دوباره تهیه کنید</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="ms-5">
                                        <a href="#" class="btn btn-sm btn-primary">تماس با ما</a>
                                    </div>
                                    <!--end::قیمت-->
                                </div>
                                <!--end::Tab link-->
                            </div>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Tab content-->
                            <div class="tab-content rounded h-100 bg-light p-10">
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">برنامه ی استارت اپ شما چیست؟?</h2>
                                        <div class="text-muted fw-bold">بهینه برای اندازه 10+ تیم استارت آپ</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">فعال ترین کاربران</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">حداکثر 30 ادغام پروژه</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و تحلیل</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Finance ماژول</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">ماژول حسابداری</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">بستر شبکه</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">فضای نامحدود ابر</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">برنامه ی استارت اپ شما چیست؟?</h2>
                                        <div class="text-muted fw-bold">بهینه برای اندازه 100+ تیم کمپانی</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">فعال ترین کاربران</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">حداکثر 30 ادغام پروژه</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و تحلیل</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance ماژول</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">ماژول حسابداری</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">بستر شبکه</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">فضای نامحدود ابر</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">برنامه ی استارت اپ شما چیست؟?</h2>
                                        <div class="text-muted fw-bold">بهینه برای 1000+ تیم سازمانی</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">فعال ترین کاربران</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">حداکثر 30 ادغام پروژه</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و تحلیل</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance ماژول</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">ماژول حسابداری</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">بستر شبکه</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">فضای نامحدود ابر</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                    <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::برنامه ریزی ها-->
                <!--begin::Actions-->
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">انصراف</button>
                    <button type="submit" class="btn btn-primary">ارتقا طرح</button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - ارتقا دهید plan-->
<!--begin::Modal - ساختن اپ-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>ساختن اپ</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
                    <!--begin::کناری-->
                    <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                        <!--begin::Nav-->
                        <div class="stepper-nav ps-lg-10">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Tags-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">جزییات</h3>
                                    <div class="stepper-desc">نام اپلیکیشن شما</div>
                                </div>
                                <!--end::Tags-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <!--begin::Icon-->
                                <!--begin::Tags-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">فریمورک ها</h3>
                                    <div class="stepper-desc">انتخاب فریمورک اپلیکیشن</div>
                                </div>
                                <!--begin::Tags-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">3</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Tags-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">دیتابیس</h3>
                                    <div class="stepper-desc">انتخاب نوع دیتابیس</div>
                                </div>
                                <!--end::Tags-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">4</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Tags-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">صورتحساب</h3>
                                    <div class="stepper-desc">جزییات پرداخت</div>
                                </div>
                                <!--end::Tags-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">5</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Tags-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">کامل شد</h3>
                                    <div class="stepper-desc">ثبت بازخورد</div>
                                </div>
                                <!--end::Tags-->
                            </div>
                            <!--end::Step 5-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--begin::کناری-->
                    <!--begin::Content-->
                    <div class="flex-row-fluid py-lg-5 px-lg-15">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">اپلیکیشن نام</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="نام برنامه منحصر به فرد خود را مشخص کنید"></i>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                            <span class="required">دسته بندی</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="دسته برنامه خود را انتخاب کنید"></i>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin:تنظیمات-->
                                        <div class="fv-row">
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:برچسب-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor" />
                                                                    <path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bolder fs-6">دوره های آنلاین سریع</span>
                                                        <span class="fs-7 text-muted">ایجاد یک ساختار متن واضح فقط یک  سئو است</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="category" value="1" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:برچسب-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-danger">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bolder fs-6">بحث های چهره به چهره</span>
                                                        <span class="fs-7 text-muted">ایجاد یک ساختار متن روشن فقط یک جنبه است</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="category" value="2" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin:برچسب-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-success">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor" />
                                                                    <path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bolder fs-6">آموزش مقدماتی کامل</span>
                                                        <span class="fs-7 text-muted">ایجاد یک متن متن روشن برای نوشتن متن</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="category" value="3" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end:تنظیمات-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                            <span class="required">انتخاب فریمورک</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your apps framework"></i>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin:برچسب-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="fab fa-html5 text-warning fs-2x"></i>
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">HTML5</span>
                                                    <span class="fs-7 text-muted">پروژه وب پایه</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:برچسب-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
                                            </span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin:برچسب-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-success">
                                                        <i class="fab fa-react text-success fs-2x"></i>
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">ReactJS</span>
                                                    <span class="fs-7 text-muted">چارچوب برنامه قوی و انعطاف پذیر</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:برچسب-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="framework" value="2" />
                                            </span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin:برچسب-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-danger">
                                                        <i class="fab fa-angular text-danger fs-2x"></i>
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">Angular</span>
                                                    <span class="fs-7 text-muted">مدیریت قوی دیتاها</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:برچسب-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="framework" value="3" />
                                            </span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer">
                                            <!--begin:برچسب-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="fab fa-vuejs text-primary fs-2x"></i>
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">Vue</span>
                                                    <span class="fs-7 text-muted">چارچوب سبک و پاسخگو</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:برچسب-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="framework" value="4" />
                                            </span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Tags-->
                                        <label class="required fs-5 fw-bold mb-2">نام دیتابیس</label>
                                        <!--end::Tags-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                            <span class="required">انتخاب موتور دیتابیس</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="انتخاب your app database engine"></i>
                                        </label>
                                        <!--end::Tags-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin::Tags-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin::Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-success">
                                                        <i class="fas fa-database text-success fs-2x"></i>
                                                    </span>
                                                </span>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">MYSQL</span>
                                                    <span class="fs-7 text-muted">دیتابیس پایه</span>
                                                </span>
                                                <!--end::Info-->
                                            </span>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
                                            </span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin::Tags-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin::Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-danger">
                                                        <i class="fab fa-google text-danger fs-2x"></i>
                                                    </span>
                                                </span>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">فایربیس</span>
                                                    <span class="fs-7 text-muted">گوگل بیس</span>
                                                </span>
                                                <!--end::Info-->
                                            </span>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="dbengine" value="2" />
                                            </span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer">
                                            <!--begin::Tags-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin::Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="fab fa-amazon text-warning fs-2x"></i>
                                                    </span>
                                                </span>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">DynamoDB</span>
                                                    <span class="fs-7 text-muted">دیتابیس سریع</span>
                                                </span>
                                                <!--end::Info-->
                                            </span>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="dbengine" value="3" />
                                            </span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">نام بر روی کارت</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="نام دارنده کارت را مشخص کنید"></i>
                                        </label>
                                        <!--end::Tags-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="مکس اندره" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Tags-->
                                        <label class="required fs-6 fw-bold form-label mb-2">شماره کارت</label>
                                        <!--end::Tags-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder="شماره کارت را وارد کنید" name="card_number" value="4111 1111 1111 1111" />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                                <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                                <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                            </div>
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-md-8 fv-row">
                                            <!--begin::Tags-->
                                            <label class="required fs-6 fw-bold form-label mb-2">تاریخ انقضا</label>
                                            <!--end::Tags-->
                                            <!--begin::Row-->
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="ماه">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="سال">
                                                        <option></option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                        <option value="2032">2032</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <!--begin::Tags-->
                                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                <span class="required">CVV</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                                <!--end::Input-->
                                                <!--begin::CVV icon-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                    <span class="svg-icon svg-icon-2hx">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M22 7H2V11H22V7Z" fill="currentColor" />
                                                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::CVV icon-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Tags-->
                                        <div class="me-5">
                                            <label class="fs-6 fw-bold form-label">کارت را برای صورتحساب بیشتر ذخیره کنید؟?</label>
                                            <div class="fs-7 fw-bold text-muted">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی بودجه را بررسی کنید</div>
                                        </div>
                                        <!--end::Tags-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                            <span class="form-check-label fw-bold text-muted">ذخیره کارت</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100 text-center">
                                    <!--begin::Heading-->
                                    <h1 class="fw-bolder text-dark mb-3">ریلیز !</h1>
                                    <!--end::Heading-->
                                    <!--begin::توضیحات-->
                                    <div class="text-muted fw-bold fs-3">برنامه خود را برای شروع پروژه خود ثبت کنید.</div>
                                    <!--end::توضیحات-->
                                    <!--begin::Illustration-->
                                    <div class="text-center px-4 py-15">
                                        <img src="assets/media/illustrations/sigma-1/9.png" alt="" class="mw-100 mh-300px" />
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-10">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                    <span class="svg-icon svg-icon-3 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
                                            <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->برگشت</button>
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Wrapper-->
                                <div>
                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                        <span class="indicator-label">ثبت
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-3 ms-2 me-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></span>
                                        <span class="indicator-progress">لطفا صبر کنید...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">ادامه
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-3 ms-1 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - ساختن اپ-->
<!--begin::Modal - Users جستجو-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">جستجو کاربران</h1>
                    <div class="text-muted fw-bold fs-5">همکاران را به پروژه خود دعوت کنید</div>
                </div>
                <!--end::Content-->
                <!--begin::جستجو-->
                <div id="kt_modal_users_search_hوler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden" />
                        <!--end::Hidden input-->
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="با نام کاربری ، نام کامل یا ایمیل جستجو کنید ..." data-kt-search-element="input" />
                        <!--end::Input-->
                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                            <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                        </span>
                        <!--end::Spinner-->
                        <!--begin::ریست-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <!--end::ریست-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Wrapper-->
                    <div class="py-5">
                        <!--begin::پیشنهادات-->
                        <div data-kt-search-element="suggestions">
                            <!--begin::Heading-->
                            <h3 class="fw-bold mb-5">اخیراً جستجو شده:</h3>
                            <!--end::Heading-->
                            <!--begin::users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::user-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">مرادی نیا</span>
                                        <span class="badge badge-light">کارگردان هنری</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                                <!--begin::user-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">میلاد مرادی</span>
                                        <span class="badge badge-light">بازاریابی تحلیلی</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                                <!--begin::user-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">جلالی</span>
                                        <span class="badge badge-light">مهندس نرم افزار</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                                <!--begin::user-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">محسن برومند</span>
                                        <span class="badge badge-light">توسعه دهنده وب</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                                <!--begin::user-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">رضا علی ابادی</span>
                                        <span class="badge badge-light">طراح یو ای و یوایکس</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::user-->
                            </div>
                            <!--end::users-->
                        </div>
                        <!--end::پیشنهادات-->
                        <!--begin::Results(add d-none to below element to hide the کاربران list by default)-->
                        <div data-kt-search-element="results" class="d-none">
                            <!--begin::users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">مرادی نیا</a>
                                            <div class="fw-bold text-muted">smith@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">میلاد مرادی</a>
                                            <div class="fw-bold text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">جلالی</a>
                                            <div class="fw-bold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">محسن برومند</a>
                                            <div class="fw-bold text-muted">sean@dellito.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">رضا علی ابادی</a>
                                            <div class="fw-bold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">میکائیل کرمانی</a>
                                            <div class="fw-bold text-muted">mik@pex.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">محمد رصایی</a>
                                            <div class="fw-bold text-muted">f.mit@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">امید وحیدی</a>
                                            <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">نیلو مرادی</a>
                                            <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">علی کاربر</a>
                                            <div class="fw-bold text-muted">dam@consilting.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">الهام بارانی</a>
                                            <div class="fw-bold text-muted">emma@intenso.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">آنا کوهی</a>
                                            <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                            <div class="fw-bold text-muted">robert@benko.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">جواد مولای</a>
                                            <div class="fw-bold text-muted">miller@mapple.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">لقمان کامرانی</a>
                                            <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2" selected="selected">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">احسان ورزقانی</a>
                                            <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3">متفرقه</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::user-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">الهام بارانی</a>
                                            <div class="fw-bold text-muted">emma@intenso.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">مهمان</option>
                                            <option value="2">مدیر</option>
                                            <option value="3" selected="selected">متفرقه </option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::user-->
                            </div>
                            <!--end::users-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-center mt-15">
                                <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">انصراف</button>
                                <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">کاربران انتخاب شده را اضافه کنید</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Results-->
                        <!--begin::Empty-->
                        <div data-kt-search-element="empty" class="text-center d-none">
                            <!--begin::Message-->
                            <div class="fw-bold py-10">
                                <div class="text-gray-600 fs-3 mb-2">هیچ کاربری پیدا نشد</div>
                                <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                            </div>
                            <!--end::Message-->
                            <!--begin::Illustration-->
                            <div class="text-center px-5">
                                <img src="assets/media/illustrations/sigma-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::جستجو-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users جستجو-->
<!--begin::Modal - دعوت دوستs-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">دعوت از دوستان</h1>
                    <!--end::Title-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fw-bold fs-5">اگر به اطلاعات بیشتری نیاز دارید ، لطفاً این مورد را بررسی کنید
                    <a href="#" class="link-primary fw-bolder">صفحه سوالات متداول</a>.</div>
                    <!--end::توضیحات-->
                </div>
                <!--end::Heading-->
                <!--begin::Google Contacts Invite-->
                <div class="btn btn-light-primary fw-bolder w-100 mb-8">
                <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />دعوت از مخاطبین جمیل</div>
                <!--end::Google Contacts Invite-->
                <!--begin::Separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">or</span>
                </div>
                <!--end::Separator-->
                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="ایمیل ها را اینجا تایپ کنید یا"></textarea>
                <!--end::Textarea-->
                <!--begin::users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-bold mb-2">دعوت از کاربران</div>
                    <!--end::Heading-->
                    <!--begin::لیست-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">مرادی نیا</a>
                                    <div class="fw-bold text-muted">smith@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">میلاد مرادی</a>
                                    <div class="fw-bold text-muted">melody@altbox.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">جلالی</a>
                                    <div class="fw-bold text-muted">max@kt.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">محسن برومند</a>
                                    <div class="fw-bold text-muted">sean@dellito.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">رضا علی ابادی</a>
                                    <div class="fw-bold text-muted">brian@exchange.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">میکائیل کرمانی</a>
                                    <div class="fw-bold text-muted">mik@pex.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">محمد رصایی</a>
                                    <div class="fw-bold text-muted">f.mit@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">امید وحیدی</a>
                                    <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">نیلو مرادی</a>
                                    <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">علی کاربر</a>
                                    <div class="fw-bold text-muted">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">الهام بارانی</a>
                                    <div class="fw-bold text-muted">emma@intenso.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">آنا کوهی</a>
                                    <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                    <div class="fw-bold text-muted">robert@benko.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">جواد مولای</a>
                                    <div class="fw-bold text-muted">miller@mapple.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">لقمان کامرانی</a>
                                    <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2" selected="selected">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">احسان ورزقانی</a>
                                    <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3">متفرقه</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                        <!--begin::user-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                    <div class="fw-bold text-muted">robert@benko.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">مهمان</option>
                                    <option value="2">مدیر</option>
                                    <option value="3" selected="selected">متفرقه </option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::user-->
                    </div>
                    <!--end::لیست-->
                </div>
                <!--end::users-->
                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Tags-->
                    <div class="me-5 fw-bold">
                        <label class="fs-6">افزودن کاربران</label>
                        <div class="fs-7 text-muted">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی بودجه را بررسی کنید</div>
                    </div>
                    <!--end::Tags-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                        <span class="form-check-label fw-bold text-muted">همه بدهکار هستیم</span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
@endsection