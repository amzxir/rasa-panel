<div>
    <div class="row">
        <div class="col-md-6 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.first name and last name')}}</label>
            @error('name')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="name" placeholder="{{ trans('app.first name and last name')}}" />
        </div>
        <div class="col-md-6 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.mobile')}}</label>
            @error('mobile')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="mobile" placeholder="{{ trans('app.mobile')}}" />
        </div>
        <div class="col-md-6 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.password')}}</label>
            @error('password')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="password" placeholder="{{ trans('app.password')}}" />
        </div>
        <div class="col-md-6 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.access type')}}</label>
            @error('access')
                <small class="error">{{$message}}</small>
            @enderror
            <select class="form-select form-select-solid" dir="rtl" wire:model="access" data-control="select2" data-placeholder="{{ trans('app.access type')}}" data-hide-search="true">
                <option></option>
                <option value="ادمین">ادمین</option>
            </select>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-10">
        <button class="btn btn-primary fw-bolder" wire:click="ConfirmCreateUser">{{ trans('app.submit')}}</button>
    </div>
</div>
