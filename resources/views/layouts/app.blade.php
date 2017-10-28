<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('/assets/css/material-dashboard.css') }}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('/assets/css/demo.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="{{ asset('/assets/vendor/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="{{ asset('/assets/css/material-icons.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <layout app-name="{{ config('app.name', 'Laravel') }}" :is-authenticated="{{ Auth::check() ? 'true' : 'false' }}"></layout>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('assets/js/material.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="{{ asset('assets/js/material-dashboard.js') }}"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('assets/js/demo.js') }}"></script>
    @yield('scripts')
</body>
</html>
