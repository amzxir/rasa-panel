<div>
    <div class="row">
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.enter the brand')}}</label>
            @error('brand')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="brand" placeholder="{{ trans('app.enter the brand')}}" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.upload image brand')}}</label>
            @error('image')
                <small class="error">{{$message}}</small>
            @enderror
            <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image">{{ trans('app.upload image brand')}}</label> 
            <input type="file" id="image" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" wire:model="image" />
        </div>
    </div>
    <div class="d-flex justify-content-center mt-10">
        <button class="btn btn-primary fw-bolder" wire:click="ConfirmCreateBrand">{{ trans('app.submit')}}</button>
    </div>
</div>
