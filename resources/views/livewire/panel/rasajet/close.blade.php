<div>
    <div class="row">
        <div class="col-md-6 mb-7">
            <div class="input-group flex-nowrap">
                <button class="input-group-text btn-secondary" id="addon-wrapping">{{ trans('app.search')}}</button>
                <input type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.enter the product name')}}">
            </div>
        </div>
        <div class="col-md-3 mb-7">
            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#kt_modal_2">{{ trans('app.invoices in the queue:')}} 0</button>
        </div>
        <div class="col-md-3 mb-7">
            <button class="btn btn-secondary w-100" data-bs-toggle="modal" data-bs-target="#kt_modal_3">{{ trans('app.complete the invoice')}}</button>
        </div>
    </div>
    
    <div class="modal fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ trans('app.list order')}}</h5>
    
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-x svg-icon-2x"></i>
                    </div>
                </div>
    
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_کاربران">
                            <thead>
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_کاربران .form-check-input" value="1">
                                        </div>
                                    </th>
                                    <th class="min-w-125px">{{ trans('app.row')}}</th>
                                    <th class="min-w-125px">{{ trans('app.recipient name')}}</th>
                                    <th class="min-w-125px">{{ trans('app.mobile')}}</th>
                                    <th class="min-w-125px">{{ trans('app.order')}}</th>
                                    <th class="min-w-125px">{{ trans('app.date')}}</th>
                                    <th class="min-w-125px">{{ trans('app.status')}}</th>
                                    <th class="min-w-125px">{{ trans('app.select invoice')}}</th>
                                    <th class="text-end min-w-100px">{{ trans('app.create invoice')}}</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>-</td>
                                    <td>09380213171</td>
                                    <td>سییسسیب</td>
                                    <td>1402-05-14 14:41:21</td>
                                    <td>بررسی شده</td>
                                    <td><i class="fa-solid fa-hand-pointer pointer text-danger"></i></td>
                                    <td class="text-end"><i class="fa-solid fa-file-lines pointer text-primary"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>-</td>
                                    <td>09380213171</td>
                                    <td>سییسسیب</td>
                                    <td>1402-05-14 14:41:21</td>
                                    <td>بررسی شده</td>
                                    <td><i class="fa-solid fa-hand-pointer pointer text-danger"></i></td>
                                    <td class="text-end"><i class="fa-solid fa-file-lines pointer text-primary"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>-</td>
                                    <td>09380213171</td>
                                    <td>سییسسیب</td>
                                    <td>1402-05-14 14:41:21</td>
                                    <td>بررسی شده</td>
                                    <td><i class="fa-solid fa-hand-pointer pointer text-danger"></i></td>
                                    <td class="text-end"><i class="fa-solid fa-file-lines pointer text-primary"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class="pagination pagination-circle">
                        <li class="page-item previous disabled"><a href="#" class="page-link"><i class="previous"></i></a></li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item "><a href="#" class="page-link">3</a></li>
                        <li class="page-item "><a href="#" class="page-link">4</a></li>
                        <li class="page-item "><a href="#" class="page-link">5</a></li>
                        <li class="page-item "><a href="#" class="page-link">6</a></li>
                        <li class="page-item next"><a href="#"  class="page-link"><i class="next"></i></a></li>
                    </ul>
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="kt_modal_3">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ trans('app.complete or edit the invoice')}}</h5>
    
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-x svg-icon-2x"></i>
                    </div>
                </div>
    
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_کاربران">
                            <thead>
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_کاربران .form-check-input" value="1">
                                        </div>
                                    </th>
                                    <th class="min-w-125px">{{ trans('app.row')}}</th>
                                    <th class="min-w-125px">{{ trans('app.product')}}</th>
                                    <th class="min-w-125px">{{ trans('app.price')}}</th>
                                    <th class="min-w-125px">{{ trans('app.quantity')}}</th>
                                    <th class="text-end min-w-100px">{{ trans('app.delete')}}</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>لورم</td>
                                    <td>120/000</td>
                                    <td>2</td>
                                    <td class="text-end"><i class="fas fa-trash pointer text-danger"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>لورم</td>
                                    <td>120/000</td>
                                    <td>2</td>
                                    <td class="text-end"><i class="fas fa-trash pointer text-danger"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="{{ trans('app.address')}}" rows="6"></textarea>
                    </div>
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ trans('app.close')}}</button>
                    <button type="button" class="btn btn-primary">{{ trans('app.save chnage')}}</button>
                </div>
            </div>
        </div>
    </div>
</div>
