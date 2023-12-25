<div>
    <div class="row">
        <div class="col-md-12 mb-7">
        <div class="alert alert-danger text-center">
            <div class="d-flex flex-column">
                <span>{{ trans('درصد کمیسیون رسادنت از هر فاکتور را مشخص فرمائید درصد فعلی کمیسیون 23 می باشد')}}</span>
            </div>
        </div>
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.commission percentage')}}</label>
            @error('commission')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire.model="commission" placeholder="{{ trans('app.commission percentage')}}" />
        </div>
    </div>
    <div class="d-flex justify-content-center mt-10">
        <button class="btn btn-primary fw-bolder" wire:click="ConfirmCreateCommission">{{ trans('app.submit')}}</button>
    </div>
</div>
