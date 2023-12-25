<div>
    <div class="row">
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.software name')}}</label>
            @error('name')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="name" placeholder="{{ trans('app.software name')}}" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.software logo')}}</label>
            @error('logo')
                <small class="error">{{$message}}</small>
            @enderror
            <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image1">{{ trans('app.software logo')}}</label>
            <input type="file" id="image1" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" wire:model="logo" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.selected image of instant offer')}}</label>
            @error('image')
                <small class="error">{{$message}}</small>
            @enderror
            <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image2">{{ trans('app.selected image of instant offer')}}</label>
            <input type="file" id="image2" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" wire:model="image" />
        </div>
        <div class="col-md-4 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.mobile')}}</label>
            @error('mobile')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="mobile" placeholder="{{ trans('app.mobile')}}" />
        </div>
        <div class="col-md-4 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.address')}}</label>
            @error('address')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="address" placeholder="{{ trans('app.address')}}" />
        </div>
        <div class="col-md-4 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.phone')}}</label>
            @error('phone')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="phone" placeholder="{{ trans('app.phone')}}" />
        </div>
        <div class="col-md-4 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.email')}}</label>
            @error('email')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="email" placeholder="{{ trans('app.email')}}" />
        </div>
        <div class="col-md-4 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('اینستاگرام')}}</label>
            @error('instagram')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="insta" placeholder="{{ trans('اینستاگرام')}}" />
        </div>
        <div class="col-md-4 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('تلگرام')}}</label>
            @error('telegram')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="telegram" placeholder="{{ trans('تلگرام')}}" />
        </div>
        <div class="col-md-4 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('لینکدین')}}</label>
            @error('linkedin')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="linkedin" placeholder="{{ trans('لینکدین')}}" />
        </div>
        <div class="col-md-4 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('آپارات')}}</label>
            @error('aparat')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="aparat" placeholder="{{ trans('آپارات')}}" />
        </div>
        <div class="col-md-4 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('یوتیوب')}}</label>
            @error('youtube')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wirer:model="youtube" placeholder="{{ trans('یوتیوب')}}" />
        </div>
        <div class="col-md-4 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('فیسبوک')}}</label>
            @error('facebook')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="facebook" placeholder="{{ trans('فیسبوک')}}" />
        </div>
        <div class="col-md-4 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('واتس اپ')}}</label>
            @error('whatsapp')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="whatsapp" placeholder="{{ trans('واتس اپ')}}" />
        </div>
        <div class="col-md-4 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('توییتر')}}</label>
            @error('twitter')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="twitter" placeholder="{{ trans('توییتر')}}" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.short slogan of the software')}}</label>
            @error('slogan')
                <small class="error">{{$message}}</small>
            @enderror
            <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="slogan" placeholder="{{ trans('app.short slogan of the software')}}" rows="6"></textarea>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-10">
        <button class="btn btn-primary fw-bolder" wire:click="ConfirmCreatePublic">{{ trans('app.submit')}}</button>
    </div>
</div>
