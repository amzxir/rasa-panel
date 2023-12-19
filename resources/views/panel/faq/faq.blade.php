@extends('layouts.app')
@section('title' , 'حریم خصوصی')
@section('breadcrumb' , 'حریم خصوصی')
@section('content')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body p-9">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <textarea name="editor1"></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-10">
                <button class="btn btn-primary fw-bolder">{{ trans('app.submit')}}</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.17.1/standard-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1', {
        // Define the toolbar groups as it is a more accessible solution.
        language: 'fa',

        toolbarGroups: [{
            "name": "basicstyles",
            "groups": ["basicstyles"]
        },
            {
                "name": "links",
                "groups": ["links"]
            },
            {
                "name": "paragraph",
                "groups": ["list", "blocks"]
            },
            {
                "name": "document",
                "groups": ["mode"]
            },
            {
                "name": "insert",
                "groups": ["insert"]
            },
            {
                "name": "styles",
                "groups": ["styles"]
            },
            {
                "name": "about",
                "groups": ["about"]
            }
        ],
        // Remove the redundant buttons from toolbar groups defined above.
        removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord'
    });
</script>
@endsection