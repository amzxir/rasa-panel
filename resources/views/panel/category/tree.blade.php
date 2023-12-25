@extends('layouts.app')
@section('title', 'درختواره دسته بندی')
@section('breadcrumb', 'درختواره دسته بندی')
@section('content')
    <div class="container-xxl" id="kt_content_container">
        <div class="card mb-5 mb-xl-10">
            <div class="card-body p-9">
                <style>
                    #tree {
                        display: inline-block;
                        padding: 10px;
                    }

                    #tree * {
                        box-sizing: border-box;
                    }

                    #tree .branch {
                        padding: 5px 0 5px 20px;
                    }

                    #tree .branch:not(:first-child) {
                        margin-left: 170px;
                    }

                    #tree .branch:not(:first-child):after {
                        content: "";
                        width: 20px;
                        border-top: 1px solid #ccc;
                        position: absolute;
                        left: 150px;
                        top: 50%;
                        margin-top: 1px;
                    }

                    .entry {
                        position: relative;
                        min-height: 42px;
                        display: block;
                    }

                    .entry:before {
                        content: "";
                        height: 100%;
                        border-left: 1px solid #ccc;
                        position: absolute;
                        left: -20px;
                    }

                    .entry:first-child:after {
                        height: 10px;
                        border-radius: 10px 0 0 0;
                    }

                    .entry:first-child:before {
                        width: 10px;
                        height: 50%;
                        top: 50%;
                        margin-top: 1px;
                        border-radius: 10px 0 0 0;
                    }

                    .entry:after {
                        content: "";
                        width: 20px;
                        transition: border 0.5s;
                        border-top: 1px solid #ccc;
                        position: absolute;
                        left: -20px;
                        top: 50%;
                        margin-top: 1px;
                    }

                    .entry:last-child:before {
                        width: 10px;
                        height: 50%;
                        border-radius: 0 0 0 10px;
                    }

                    .entry:last-child:after {
                        height: 10px;
                        border-top: none;
                        transition: border 0.5s;
                        border-bottom: 1px solid #ccc;
                        border-radius: 0 0 0 10px;
                        margin-top: -9px;
                    }

                    .entry:only-child:after {
                        width: 10px;
                        height: 0px;
                        margin-top: 1px;
                        border-radius: 0px;
                    }

                    .entry:only-child:before {
                        display: none;
                    }

                    .entry span {
                        border: 1px solid #ccc;
                        display: block;
                        min-width: 150px;
                        padding: 5px 10px;
                        line-height: 20px;
                        text-align: center;
                        position: absolute;
                        left: 0;
                        top: 50%;
                        margin-top: -15px;
                        color: #666;
                        font-family: arial, verdana, tahoma;
                        font-size: 14px;
                        display: inline-block;
                        border-radius: 5px;
                        transition: all 0.5s;
                    }

                    #tree .entry span:hover,
                    #tree .entry span:hover+.branch .entry span {
                        background: #e6e6e6;
                        color: #000;
                        border-color: #a6a6a6;
                    }

                    #tree .entry span:hover+.branch .entry::after,
                    #tree .entry span:hover+.branch .entry::before,
                    #tree .entry span:hover+.branch::before,
                    #tree .entry span:hover+.branch .branch::before {
                        border-color: #a6a6a6;
                    }
                </style>
                @livewire('panel.category.tree')
            </div>
        </div>
    </div>
@endsection
