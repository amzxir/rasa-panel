<div>
    <div class="row">
        <div class="col-md-6 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.automatic code generation')}}</label>
            @error('code')
                <small class="error">{{$message}}</small>
            @enderror
            <div class="input-group flex-nowrap">
                <button class="input-group-text btn-secondary" id="addon-wrapping">{{ trans('app.automatic code generation')}}</button>
                <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="code" placeholder="{{ trans('app.enter the discount code')}}">
            </div>
        </div>
        <div class="col-md-6 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.enter the number of times you want to use the code (leave it blank to limit the use of the code)')}}</label>
            @error('count')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="count" placeholder="{{ trans('app.enter the number of times you want to use the code (leave it blank to limit the use of the code)')}}" />
        </div>
        <div class="col-md-6 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.enter the discount percentage of the discount code')}}</label>
            @error('discount')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="discount" placeholder="{{ trans('app.enter the discount percentage of the discount code')}}" />
        </div>
        <div class="col-md-6 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.select the target category')}}</label>
            @error('category')
                <small class="error">{{$message}}</small>
            @enderror
            <select class="form-select form-select-solid" dir="rtl" data-control="select2" wire:model="category" data-placeholder="{{ trans('app.select the target category')}}" data-hide-search="true">
                <option></option>
                <option value="ترمیمی و زیبایی">ترمیمی و زیبایی</option>
            </select>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-10">
        <button class="btn btn-primary fw-bolder" wire:click="ConfirmCreateDiscount">{{ trans('app.submit')}}</button>
    </div>
</div>
