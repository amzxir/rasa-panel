<div>
    <div class="row">
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.old address')}}</label>
            @error('old_address')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="old_address" placeholder="{{ trans('app.old address')}}" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.new address')}}</label>
            @error('new_address')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="new_address" placeholder="{{ trans('app.new address')}}" />
        </div>
    </div>
    <div class="d-flex justify-content-center mt-10">
        <button class="btn btn-primary fw-bolder" wire:click="ConfirmCreateRoute">{{ trans('app.submit')}}</button>
    </div>
</div>
