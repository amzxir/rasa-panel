<div>
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            <div class="row">
                <div class="col-md-12 mb-7">
                    <div class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                        <div class="d-flex">
                            <span class="d-flex align-items-center text-danger fw-bolder">فیلد ها برای دسته بندی انتخاب شده زیر دسته بندی ها اعمال خواهد شد</span>
                        </div>
    
                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                            <span class="svg-icon svg-icon-1 svg-icon-danger"><i class="fas fa-x text-danger"></i></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-12 mb-7">
                    <div class="input-group flex-nowrap">
                        <button class="input-group-text btn-secondary" id="addon-wrapping">{{ trans('app.search category')}}</button>
                        <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="category" placeholder="دسته بندی را جستجو کنید ...">
                    </div>
                    @error('category')
                        <small class="error">{{$message}}</small>
                    @enderror
                    <hr class="mt-7 mb-7">
                    {{-- <div class="row">
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            <div class="row">
                <div class="col-md-6 mb-7">
                    <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('نوع فیلد')}}</label>
                    @error('field')
                        <small class="error">{{$message}}</small>
                    @enderror
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="field" placeholder="{{ trans('app.example color')}}" />
                </div>
                <div class="col-md-6 mb-7">
                    <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('نوع فیلد')}}</label>
                    @error('menu')
                        <small class="error">{{$message}}</small>
                    @enderror
                    <select class="form-select form-select-solid" dir="rtl" data-control="select2" wire:model="menu" data-placeholder="{{ trans('انتخاب کنید ...')}}" data-hide-search="true">
                        <option></option>
                        <option value="منوی انتخابی">منوی انتخابی</option>
                        <option value="انتخابی چک باکس">انتخابی چک باکس</option>
                    </select>
                </div>
                <div class="col-md-6 mb-7">
                    <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('خصوصیات')}}</label>
                    @error('peroperty')
                        <small class="error">{{$message}}</small>
                    @enderror
                    <select class="form-select form-select-solid" dir="rtl" data-control="select2" wire:model="peroperty" data-placeholder="{{ trans('انتخاب کنید ...')}}" data-hide-search="true">
                        <option></option>
                        <option value="خصوصیات ظاهری - رنگ">خصوصیات ظاهری - رنگ</option>
                        <option value="خصوصیات ظاهری - اندازه">خصوصیات ظاهری - اندازه</option>
                        <option value="خصوصیات ظاهری - بسته بندی">خصوصیات ظاهری - بسته بندی</option>
                        <option value="خصوصیات ظاهری - جنس">خصوصیات ظاهری - جنس</option>
                        <option value="اطلاعات تخصصی">اطلاعات تخصصی</option>

                    </select>
                </div>
                <div class="col-md-6 mb-7">
                    <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('نوع تکمیلی رو انتحاب کنید')}}</label>
                    @error('compelete')
                        <small class="error">{{$message}}</small>
                    @enderror
                    <select class="form-select form-select-solid" dir="rtl" data-control="select2" wire:model="compelete" data-placeholder="{{ trans('انتخاب کنید ...')}}" data-hide-search="true">
                        <option></option>
                        <option value="قابل انتخاب - تکمیل توسط فروشنده">قابل انتخاب - تکمیل توسط فروشنده</option>
                        <option value="غیر قابل انتخاب - تکمیل توسط ادمین">غیر قابل انتخاب - تکمیل توسط ادمین</option>
                    </select>
                </div>
                <div class="col-md-6 mb-7">
                    <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('نمایش در ')}}</label>
                    @error('see')
                        <small class="error">{{$message}}</small>
                    @enderror
                    <select class="form-select form-select-solid" dir="rtl" data-control="select2" wire:model="see" data-placeholder="{{ trans('انتخاب کنید ...')}}" data-hide-search="true">
                        <option></option>
                        <option value="نمایش در قیمت ها">نمایش در قیمت ها</option>
                        <option value="غیر قابل نمایش در قیمت ها">غیر قابل نمایش در قیمت ها</option>
                    </select>
                </div>
                <div class="col-md-6 mb-7">
                    <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.Separator by -')}}</label>
                    @error('separator')
                        <small class="error">{{$message}}</small>
                    @enderror
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="separator" placeholder="{{ trans('app.Separator by -')}}" />
                </div>
            </div>
            <div class="d-flex justify-content-center mt-10">
                <button class="btn btn-primary fw-bolder" wire:click="ConfirmCreateFormsaz">{{ trans('app.submit')}}</button>
            </div>
        </div>
    </div>
</div>
