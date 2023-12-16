<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>رسادنت - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/custom/leaflet/leaflet.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('layouts.menu')
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('layouts.header')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="container-xxl" id="kt_content_container">
                        @yield('content')
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>

    
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
    <script src="{{ asset('assets/plugins/custom/leaflet/leaflet.bundle.js')}}"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/custom/modals/select-location.js')}}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js')}}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
</body>
</html>