<div>
    <div class="card-body p-9">
        <h3 class="mb-10">{{ trans('app.public information')}}</h3>
        <div class="row">
            <div class="col-md-12 mb-7">
                <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.product name persion')}}</label>
                @error('category')
                    <small class="error">{{$message}}</small>
                @enderror
                <div class="input-group flex-nowrap">
                    <button class="input-group-text btn-secondary" id="addon-wrapping">{{ trans('app.search category')}}</button>
                    <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="category" placeholder="دسته بندی را جستجو کنید ...">
                </div>
                {{-- <ul class="mt-7 ul-item">
                    <li class="item-category mb-5">دسته بندی شماره ۱</li>
                    <li class="item-category mb-5">دسته بندی شماره ۲</li>
                    <li class="item-category mb-5">دسته بندی شماره ۳</li>
                </ul> --}}
            </div>
            <div class="col-md-6 mb-7">
                <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.product name persion')}}</label>
                @error('name_fa')
                    <small class="error">{{$message}}</small>
                @enderror
                <input type="text" wire:model="name_fa" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.product name persion')}}" />
            </div>
            <div class="col-md-6 mb-7">
                <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.product name english')}}</label>
                @error('name_en')
                    <small class="error">{{$message}}</small>
                @enderror
                <input type="text" wire:model="name_en" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.product name english')}}" />
            </div>
            <div class="col-md-6 mb-7">
                <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.product name english')}}</label>
                @error('catalog')
                    <small class="error">{{$message}}</small>
                @enderror
                <input type="text" wire:model="catalog" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.product catalog file address')}}" />
            </div>
            <div class="col-md-6 mb-7">
                <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.product name english')}}</label>
                @error('video')
                    <small class="error">{{$message}}</small>
                @enderror
                <input type="text" wire:model="video" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.product video file address')}}" />
            </div>
            <div class="col-md-6 mb-7">
                <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.unit')}}</label>
                @error('unit')
                    <small class="error">{{$message}}</small>
                @enderror
                <input type="text" wire:model="unit" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.unit')}}" />
            </div>
            <div class="col-md-6 mb-7">
                <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.value')}}</label>
                @error('value')
                    <small class="error">{{$message}}</small>
                @enderror
                <input type="text" wire:model="value" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.value')}}" />
            </div>
            <div class="col-md-12 mb-7">
                <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.insert content in the editor')}}</label>
                @error('content')
                    <small class="error">{{$message}}</small>
                @enderror
                <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="content" placeholder="{{ trans('app.insert content in the editor')}}" rows="6"></textarea>
            </div>
            <div class="col-md-12 mb-7">
                <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.insert content in the editor')}}</label>
                @error('seo')
                    <small class="error">{{$message}}</small>
                @enderror
                <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="seo" placeholder="{{ trans('app.insert seo description')}}" rows="6"></textarea>
            </div>
            <div class="col-md-12 mb-7">
                <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.product brand')}}</label>
                @error('brand')
                    <small class="error">{{$message}}</small>
                @enderror
                <select data-control="select2" wire:model="brand" dir="rtl" data-placeholder="{{ trans('app.product brand')}}" class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible" data-select2-id="select2-data-7-lhjk" tabindex="-1" aria-hidden="true">
                    <option value="" data-select2-id="select2-data-9-w3zk"></option>
                    <option data-kt-flag="flags/afghanistan.svg" value="AF" data-select2-id="select2-data-135-tndm">توکویاما</option>
                </select>
            </div>
        </div>
        <hr>
        <h3 class="mb-10 mt-7">{{ trans('app.image product')}}</h3>
        <div class="row">
            <div class="col-md-3 mb-7 d-flex justify-content-center">
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
        <div class="d-flex justify-content-center mt-10">
            <button class="btn btn-primary fw-bolder" wire:click="ConfirmEditProduct">{{ trans('app.submit')}}</button>
        </div>
    </div>
</div>
