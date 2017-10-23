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
                        <a class="navbar-brand" href="../dashboard.html">Material Dashboard Pro</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="../dashboard.html">
                                    <i class="material-icons">dashboard</i> Dashboard
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('register') }}">
                                    <i class="material-icons">person_add</i> Register
                                </a>
                            </li>
                            <li class="active">
                                <a href="{{ route('login') }}">
                                    <i class="material-icons">fingerprint</i> Login
                                </a>
                            </li>
                            <li class="">
                                <a href="lock.html">
                                    <i class="material-icons">lock_open</i> Lock
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="wrapper wrapper-full-page">
                @yield('content')
            </div>
            <div class="fixed-plugin">
                <div class="dropdown show-dropdown">
                    <a href="login.html#" data-toggle="dropdown">
                        <i class="fa fa-cog fa-2x"> </i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header-title">Background Style</li>
                        <li class="adjustments-line">
                            <a href="javascript:void(0)" class="switch-trigger">
                                <p>Background Image</p>
                                <div class="togglebutton switch-sidebar-image">
                                    <label>
                                        <input type="checkbox" checked="">
                                    </label>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li class="adjustments-line">
                            <a href="javascript:void(0)" class="switch-trigger active-color">
                                <p>Filters</p>
                                <div class="badge-colors pull-right">
                                    <span class="badge filter active" data-color="black"></span>
                                    <span class="badge filter badge-blue" data-color="blue"></span>
                                    <span class="badge filter badge-green" data-color="green"></span>
                                    <span class="badge filter badge-orange" data-color="orange"></span>
                                    <span class="badge filter badge-red" data-color="red"></span>
                                    <span class="badge filter badge-purple" data-color="purple"></span>
                                    <span class="badge filter badge-rose" data-color="rose"></span>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li class="header-title">Background Images</li>
                        <li class="active">
                            <a class="img-holder switch-trigger" href="javascript:void(0)">
                                <img src="../../assets/img/sidebar-1.jpg" data-src="../../assets/img/login.jpeg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a class="img-holder switch-trigger" href="javascript:void(0)">
                                <img src="../../assets/img/sidebar-2.jpg" data-src="../../assets/img/lock.jpeg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a class="img-holder switch-trigger" href="javascript:void(0)">
                                <img src="../../assets/img/sidebar-3.jpg" data-src="../../assets/img/header-doc.jpeg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a class="img-holder switch-trigger" href="javascript:void(0)">
                                <img src="../../assets/img/sidebar-4.jpg" data-src="../../assets/img/bg-pricing.jpeg" alt="" />
                            </a>
                        </li>
                        <li class="button-container">
                            <div class="">
                                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-primary btn-block btn-fill">Buy Now!</a>
                            </div>
                            <div class="">
                                <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-info btn-block">Get Free Demo</a>
                            </div>
                        </li>
                        <li class="header-title">Thank you for 95 shares!</li>
                        <li class="button-container">
                            <button id="twitter" class="btn btn-social btn-twitter btn-round"><i class="fa fa-twitter"></i> &middot; 45</button>
                            <button id="facebook" class="btn btn-social btn-facebook btn-round"><i class="fa fa-facebook-square"></i> &middot; 50</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>

        <script src="{{ asset('/assets/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/assets/js/material.min.js') }}"></script>
        <script src="{{ asset('/assets/js/perfect-scrollbar.jquery.min.js') }}"></script>
        <!-- Library for adding dinamically elements -->
        <script src="{{ asset('/assets/js/arrive.min.js') }}"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{ asset('/assets/js/jquery.validate.min.js') }}"></script>
        <!-- Promise Library for SweetAlert2 working on IE -->
        <script src="{{ asset('/assets/js/es6-promise-auto.min.js') }}"></script>
        <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
        <script src="{{ asset('/assets/js/moment.min.js') }}"></script>
        <!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
        <script src="{{ asset('/assets/js/chartist.min.js') }}"></script>
        <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{ asset('/assets/js/jquery.bootstrap-wizard.js') }}"></script>
        <!--  Notifications Plugin, full documentation here: https://bootstrap-notify.remabledesigns.com/    -->
        <script src="{{ asset('/assets/js/bootstrap-notify.js') }}"></script>
        <!--   Sharrre Library    -->
        <script src="{{ asset('/assets/js/jquery.sharrre.js') }}"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('/assets/js/bootstrap-datetimepicker.js') }}"></script>
        <!-- Vector Map plugin, full documentation here: https://jvectormap.com/documentation/ -->
        <script src="{{ asset('/assets/js/jquery-jvectormap.js') }}"></script>
        <!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
        <script src="{{ asset('/assets/js/nouislider.min.js') }}"></script>
        <!--  Google Maps Plugin    -->
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script> -->
        <!--  Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
        <script src="{{ asset('/assets/js/jquery.select-bootstrap.js') }}"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
        <script src="{{ asset('/assets/js/jquery.datatables.js') }}"></script>
        <!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
        <script src="{{ asset('/assets/js/sweetalert2.js') }}"></script>
        <!-- Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{ asset('/assets/js/jasny-bootstrap.min.js') }}"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="{{ asset('/assets/js/fullcalendar.min.js') }}"></script>
        <!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{ asset('/assets/js/jquery.tagsinput.js') }}"></script>
        <!-- Material Dashboard javascript methods -->
        <script src="{{ asset('/assets/js/material-dashboard.js') }}"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('/assets/js/demo.js') }}"></script>
        <script>
            $().ready(function() {
                demo.checkFullPageBackgroundImage();

                setTimeout(function() {
                    // after 1000 ms we add the class animated to the login/register card
                    $('.card').removeClass('card-hidden');
                }, 700)
            });
        </script>
    </body>
@endsection

