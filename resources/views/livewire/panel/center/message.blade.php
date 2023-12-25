<div>
    <div class="row">
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.name route')}}</label>
            @error('name')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="name" placeholder="{{ trans('app.name route')}}" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.title')}}</label>
            @error('title')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="title" placeholder="{{ trans('app.title')}}" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.user role')}}</label>
            @error('role')
                <small class="error">{{$message}}</small>
            @enderror
            <select class="form-select form-select-solid" dir="rtl" data-control="select2" wire:model="role" data-placeholder="{{ trans('app.user role')}}" data-hide-search="true">
                <option></option>
                <option value="ادمین">ادمین</option>
            </select>
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.message')}}</label>
            @error('message')
                <small class="error">{{$message}}</small>
            @enderror
            <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="message" placeholder="{{ trans('app.message')}}" rows="6"></textarea>
        </div>

    </div>
    <div class="d-flex justify-content-center mt-10">
        <button class="btn btn-primary fw-bolder" wire:click="ConfirmCreatemessage">{{ trans('app.submit')}}</button>
    </div>
</div>
