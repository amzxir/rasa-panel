<div>
    <div class="row">
        <div class="col-md-10 mb-3">
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="name" placeholder="{{ trans('app.the name of the new sending method')}}" />
            @error('name')
                <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="col-md-2 mv-3">
            <button class="btn btn-primary fw-bolder w-100" wire:click="ConfirmCreateSend">{{ trans('app.submit')}}</button>
        </div>
    </div>
</div>
