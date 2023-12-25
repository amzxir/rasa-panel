<div>
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
    <div class="d-flex justify-content-center mt-10">
        <button class="btn btn-primary fw-bolder" wire:click="ConfirmCreatePromotion">{{ trans('app.submit')}}</button>
    </div>
</div>
