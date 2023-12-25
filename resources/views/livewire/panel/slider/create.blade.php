<div>
    <div class="row">
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.enter the transfer link')}}</label>
            @error('link')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="link" placeholder="{{ trans('app.enter the transfer link')}}" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.Loading the slider image on the medium device (width: 900 px)')}}</label>
            @error('image_device_desktop')
                <small class="error">{{$message}}</small>
            @enderror
            <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image1">{{ trans('app.Loading the slider image on the medium device (width: 900 px)')}}</label>
            <input type="file" id="image1" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" wire:model="image_device_desktop" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.upload image for mobile')}}</label>
            @error('image_device_mobile')
                <small class="error">{{$message}}</small>
            @enderror
            <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image1">{{ trans('app.upload image for mobile')}}</label>
            <input type="file" id="image1" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" wire:model="image_device_mobile" />
        </div>
    </div>
    <div class="d-flex justify-content-center mt-10">
        <button class="btn btn-primary fw-bolder" wire:click="ConfirmCreateSlider">{{ trans('app.submit')}}</button>
    </div>
</div>
