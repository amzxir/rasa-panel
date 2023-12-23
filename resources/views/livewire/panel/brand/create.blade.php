<div>
    <div class="row">
        <div class="col-md-12 mb-7">
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.enter the parent category')}}" />
        </div>
        <div class="col-md-12 mb-7">
            <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.enter the category name')}}" />
        </div>
        <div class="col-md-12 mb-7">
            <label class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 pointer" style="color: #A4A5B7" for="image">{{ trans('app.upload image category')}}</label>
            <input type="file" id="image" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 d-none" />
        </div>
        <div class="col-md-12 mb-7">
            <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.insert content in the editor')}}" rows="6"></textarea>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-10">
        <button class="btn btn-primary fw-bolder">{{ trans('app.submit')}}</button>
    </div>
</div>