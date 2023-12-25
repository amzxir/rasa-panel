<div>
    <div class="row">
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.choose the order receiving method')}}</label>
            @error('order_receiver')
                <small class="error">{{$message}}</small>
            @enderror
            <select data-control="select2" wire:model.defer="order_receiver" wire:ignore.self dir="rtl" data-placeholder="{{ trans('app.choose the order receiving method')}}" class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible" data-select2-id="select2-data-7-lhjk" tabindex="-1" aria-hidden="true">
                <option value="" data-select2-id="select2-data-9-w3zk"></option>
                <option value="اینستاگرام" data-select2-id="select2-data-135-tndm">اینستاگرام</option>
                <option value="تلگرام" data-select2-id="select2-data-136-tndm">تلگرام</option>
                <option value="تبلیغات" data-select2-id="select2-data-137-tndm">تبلیغات</option>
                <option value="مرکز تماس" data-select2-id="select2-data-138-tndm">مرکز تماس</option>
                <option value="دوست آشنا" data-select2-id="select2-data-139-tndm">دوست آشنا</option>
            </select>
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.recipient name')}}</label>
            @error('recipient_name')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="recipient_name"  placeholder="{{ trans('app.recipient name')}}" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.mobile receiver')}}</label>
            @error('mobile_receiver')
                <small class="error">{{$message}}</small>
            @enderror
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="mobile_receiver" placeholder="{{ trans('app.mobile receiver')}}" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="required form-label fs-6 fw-bolder text-gray-700 mb-3">{{ trans('app.order')}}</label>
            @error('order')
                <small class="error">{{$message}}</small>
            @enderror
            <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="order" placeholder="{{ trans('app.order')}}" rows="6"></textarea>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary" wire:click="ConfirmCreateOrder">{{ trans('app.submit')}}</button>
    </div>
</div>
