@extends('layouts.app')

@section('body')
    <body class="off-canvas-sidebar">
        <div id="app">
            <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="../dashboard.html">NGK Inventory System</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active">
                                <a href="{{ route('login') }}">
                                    <i class="material-icons">fingerprint</i> Login
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="wrapper wrapper-full-page">
                @yield('content')
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>

        <script src="{{ asset('/assets/js/material.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
        <!--   Sharrre Library    -->
        <script src="{{ asset('/assets/js/jquery.sharrre.js') }}"></script>
        <!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{ asset('/assets/js/jquery.tagsinput.js') }}"></script>
        <!-- Material Dashboard javascript methods -->
        <script src="{{ asset('/assets/js/material-dashboard.js') }}"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('/assets/js/demo.js') }}"></script>
        <script type="text/javascript">
            $().ready(function() {
                demo.checkFullPageBackgroundImage();

                setTimeout(function() {
                    // after 1000 ms we add the class animated to the login/register card
                    $('.card').removeClass('card-hidden');
                }, 700)

                $('.fixed-plugin .show-dropdown > a').click(function() {
                    $(this).parent().toggleClass('open');
                });
            });
        </script>
    </body>
@endsection

