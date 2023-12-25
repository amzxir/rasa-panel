<div>
    <div class="form">
        <div class="mb-13 text-center">
            <h1 class="mb-3">{{ trans('app.infractions')}}</h1>
        </div>
        <div class="d-flex flex-column mb-8 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                <span class="required">{{ trans('app.subject')}}</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a subject for your issue" aria-label="Specify a subject for your issue"></i>
            </label>
            <input type="text" class="form-control form-control-solid" name="subject">
        </div>
        <div class="row g-9 mb-8">
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">{{ trans('app.product')}}</label>
                <select dir="rtl" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="انتخاب محصول" name="product" data-select2-id="select2-data-7-elqp" tabindex="-1" aria-hidden="true">
                    <option value="" data-select2-id="select2-data-9-yed4">انتخاب محصول...</option>
                    <option value="1">قالب اچ تی ام ال</option>
                    <option value="1">آنگولار</option>
                    <option value="1">وی یو ای</option>
                    <option value="1">ری اکت</option>
                    <option value="1">یو آی کیت</option>
                    <option value="3">نرم افزار لاراول</option>
                    <option value="4">Blazor اپلیکیشن</option>
                    <option value="5">Django اپلیکیشن</option>
                </select>
            </div>
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">اختصاص دادن</label>
                <select dir="rtl" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="انتخاب عضو" name="user" data-select2-id="select2-data-10-mlv1" tabindex="-1" aria-hidden="true">
                    <option value="" data-select2-id="select2-data-12-f6u8">انتخاب a user...</option>
                    <option value="1">کارینا کالرک</option>
                    <option value="2">Robert Doe</option>
                    <option value="3">قلی رضایی</option>
                    <option value="4">امید وحیدی</option>
                    <option value="5">محسن برومند</option>
                </select>
            </div>
        </div>
        <div class="row g-9 mb-8" data-select2-id="select2-data-125-phpz">
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">وضعیت</label>
                <select dir="rtl" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="باز" data-hide-search="true" data-select2-id="select2-data-13-ebn8" tabindex="-1" aria-hidden="true">
                    <option value="" data-select2-id="select2-data-132-ru3s"></option>
                    <option value="1" selected="selected" data-select2-id="select2-data-15-ph38">باز</option>
                    <option value="2" data-select2-id="select2-data-133-88sm">در انتظار</option>
                    <option value="3" data-select2-id="select2-data-134-fmqn">حل شده</option>
                    <option value="3" data-select2-id="select2-data-135-cqc3">بسته شده</option>
                </select>
            </div>
            <div class="col-md-6 fv-row">
                <label class="required fs-6 fw-bold mb-2">سررسید</label>
                <div class="position-relative d-flex align-items-center">
                    <div class="symbol symbol-20px me-4 position-absolute ms-4">
                        <span class="symbol-label bg-secondary">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"></rect>
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <input class="form-control form-control-solid ps-12" placeholder="انتخاب یک تاریخ" name="due_date">
                </div>
            </div>
        </div>
        <div class="d-flex flex-column mb-8 fv-row">
            <label class="fs-6 fw-bold mb-2">{{ trans('app.description')}}</label>
            <textarea class="form-control form-control-solid" rows="4"></textarea>
        </div>
        <div class="fv-row mb-8">
            <label class="dropzone w-100" for="upload">
                <div class="dz-message needsclick align-items-center">
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
                    <span class="svg-icon svg-icon-3hx svg-icon-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z" fill="currentColor"></path>
                            <path d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z" fill="currentColor"></path>
                            <path d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z" fill="currentColor"></path>
                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
      
                    <div class="ms-4">
                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">پرونده ها را اینجا رها کنید یا برای بارگذاری کلیک کنید.</h3>
                        <span class="fw-bold fs-7 text-gray-400">اپلود فایل بیش از 10 تا</span>
                    </div>
                </div>
            </label>
            <input type="file" class="d-none" id="upload">
        </div>
        <div class="mb-15 fv-row">
            <div class="d-flex flex-stack">
                <div class="fw-bold me-5">
                    <label class="fs-6">اعلان ها</label>
                    <div class="fs-7 text-gray-400">همه اعلان ها توسط تلفن یا ایمیل</div>
                </div>
                <div class="d-flex align-items-center">
                    <label class="form-check form-check-custom form-check-solid me-10">
                        <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="email" checked="checked">
                        <span class="form-check-label fw-bold">ایمیل</span>
                    </label>
                    <label class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="phone">
                        <span class="form-check-label fw-bold">تلفن</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary">{{ trans('app.submit')}}</button>
        </div>
    </div>
</div>
