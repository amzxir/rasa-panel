<div>
    <div class="row">
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.enter the parent category')}}</label>
            @error('parent_category')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="parent_category" placeholder="{{ trans('app.enter the parent category')}}" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.enter the category name')}}</label>
            @error('name')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="name" placeholder="{{ trans('app.enter the category name')}}" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.upload image category')}}</label>
            @error('image')
                <small class="error">{{$message}}</small>
            @enderror
            <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image">{{ trans('app.upload image category')}}</label>
            <input type="file" id="image" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" wire:model="image" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.insert content in the editor')}}</label>
            @error('description')
                <small class="error">{{$message}}</small>
            @enderror
            <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="description" placeholder="{{ trans('app.insert content in the editor')}}" rows="6"></textarea>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-10">
        <button class="btn btn-primary fw-bolder" wire:click="ConfirmCreateCategory">{{ trans('app.submit')}}</button>
    </div>
</div>
