@extends('layouts.app')

@section('body')
    <body>
        <div class="wrapper" id="app">
            <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
                <!--
            Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
            Tip 2: you can also add an image using data-image tag
            Tip 3: you can change the color of the sidebar with data-background-color="white | black"
        -->
                <div class="logo">
                    <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                        CT
                    </a>
                    <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                        Creative Tim
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <div class="user">
                        <div class="photo">
                            <img src="../assets/img/faces/avatar.jpg" />
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="dashboard.html#collapseExample" class="collapsed">
                                <span>
                                    Tania Andrew
                                    <b class="caret"></b>
                                </span>
                            </a>
                            <div class="clearfix"></div>
                            <div class="collapse" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="dashboard.html#">
                                            <span class="sidebar-mini">MP</span>
                                            <span class="sidebar-normal">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dashboard.html#">
                                            <span class="sidebar-mini">EP</span>
                                            <span class="sidebar-normal">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dashboard.html#">
                                            <span class="sidebar-mini">S</span>
                                            <span class="sidebar-normal">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="active">
                            <a href="dashboard.html">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <!-- <li>
                            <a data-toggle="collapse" href="dashboard.html#pagesExamples">
                                <i class="material-icons">image</i>
                                <p>Pages
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="pagesExamples">
                                <ul class="nav">
                                    <li>
                                        <a href="pages/pricing.html">
                                            <span class="sidebar-mini">P</span>
                                            <span class="sidebar-normal">Pricing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/timeline.html">
                                            <span class="sidebar-mini">T</span>
                                            <span class="sidebar-normal">Timeline</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/login.html">
                                            <span class="sidebar-mini">LP</span>
                                            <span class="sidebar-normal">Login Page</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/register.html">
                                            <span class="sidebar-mini">RP</span>
                                            <span class="sidebar-normal">Register Page</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/lock.html">
                                            <span class="sidebar-mini">LSP</span>
                                            <span class="sidebar-normal">Lock Screen Page</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/user.html">
                                            <span class="sidebar-mini">UP</span>
                                            <span class="sidebar-normal">User Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a data-toggle="collapse" href="dashboard.html#componentsExamples">
                                <i class="material-icons">apps</i>
                                <p>Components
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="componentsExamples">
                                <ul class="nav">
                                    <li>
                                        <a href="components/buttons.html">
                                            <span class="sidebar-mini">B</span>
                                            <span class="sidebar-normal">Buttons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/grid.html">
                                            <span class="sidebar-mini">GS</span>
                                            <span class="sidebar-normal">Grid System</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/panels.html">
                                            <span class="sidebar-mini">P</span>
                                            <span class="sidebar-normal">Panels</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/sweet-alert.html">
                                            <span class="sidebar-mini">SA</span>
                                            <span class="sidebar-normal">Sweet Alert</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/notifications.html">
                                            <span class="sidebar-mini">N</span>
                                            <span class="sidebar-normal">Notifications</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/icons.html">
                                            <span class="sidebar-mini">I</span>
                                            <span class="sidebar-normal">Icons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components/typography.html">
                                            <span class="sidebar-mini">T</span>
                                            <span class="sidebar-normal">Typography</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a data-toggle="collapse" href="dashboard.html#formsExamples">
                                <i class="material-icons">content_paste</i>
                                <p>Forms
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="formsExamples">
                                <ul class="nav">
                                    <li>
                                        <a href="forms/regular.html">
                                            <span class="sidebar-mini">RF</span>
                                            <span class="sidebar-normal">Regular Forms</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/extended.html">
                                            <span class="sidebar-mini">EF</span>
                                            <span class="sidebar-normal">Extended Forms</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/validation.html">
                                            <span class="sidebar-mini">VF</span>
                                            <span class="sidebar-normal">Validation Forms</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/wizard.html">
                                            <span class="sidebar-mini">W</span>
                                            <span class="sidebar-normal">Wizard</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a data-toggle="collapse" href="dashboard.html#tablesExamples">
                                <i class="material-icons">grid_on</i>
                                <p>Tables
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="tablesExamples">
                                <ul class="nav">
                                    <li>
                                        <a href="tables/regular.html">
                                            <span class="sidebar-mini">RT</span>
                                            <span class="sidebar-normal">Regular Tables</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables/extended.html">
                                            <span class="sidebar-mini">ET</span>
                                            <span class="sidebar-normal">Extended Tables</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables/datatables.net.html">
                                            <span class="sidebar-mini">DT</span>
                                            <span class="sidebar-normal">DataTables.net</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a data-toggle="collapse" href="dashboard.html#mapsExamples">
                                <i class="material-icons">place</i>
                                <p>Maps
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="mapsExamples">
                                <ul class="nav">
                                    <li>
                                        <a href="maps/google.html">
                                            <span class="sidebar-mini">GM</span>
                                            <span class="sidebar-normal">Google Maps</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="maps/fullscreen.html">
                                            <span class="sidebar-mini">FSM</span>
                                            <span class="sidebar-normal">Full Screen Map</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="maps/vector.html">
                                            <span class="sidebar-mini">VM</span>
                                            <span class="sidebar-normal">Vector Map</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="widgets.html">
                                <i class="material-icons">widgets</i>
                                <p>Widgets</p>
                            </a>
                        </li>
                        <li>
                            <a href="charts.html">
                                <i class="material-icons">timeline</i>
                                <p>Charts</p>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="material-icons">date_range</i>
                                <p>Calendar</p>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <nav class="navbar navbar-transparent navbar-absolute">
                    <div class="container-fluid">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                                <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                                <i class="material-icons visible-on-sidebar-mini">view_list</i>
                            </button>
                        </div>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="dashboard.html#"> Dashboard </a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <!-- <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="dashboard.html#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">dashboard</i>
                                        <p class="hidden-lg hidden-md">Dashboard</p>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">notifications</i>
                                        <span class="notification">5</span>
                                        <p class="hidden-lg hidden-md">
                                            Notifications
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="dashboard.html#">Mike John responded to your email</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.html#">You have 5 new tasks</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.html#">You're now friend with Andrew</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.html#">Another Notification</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.html#">Another One</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="dashboard.html#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="material-icons">person</i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                    </a>
                                </li>
                                <li class="separator hidden-lg hidden-md"></li>
                            </ul> -->
                            <!-- <form class="navbar-form navbar-right" role="search">
                                <div class="form-group form-search is-empty">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="material-input"></span>
                                </div>
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </form> -->
                        </div>
                    </div>
                </nav>
                @yield('content')
                <footer class="footer">
                    <div class="container-fluid">
                        <!-- <nav class="pull-left">
                            <ul>
                                <li>
                                    <a href="dashboard.html#">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard.html#">
                                        Company
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard.html#">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard.html#">
                                        Blog
                                    </a>
                                </li>
                            </ul>
                        </nav> -->
                        <p class="copyright pull-right">
                            &copy; 2017
                            <a href="https://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </div>
                </footer>
            </div>
        </div>
        <div class="fixed-plugin">
            <div class="dropdown show-dropdown">
                <a href="dashboard.html#" data-toggle="dropdown">
                    <i class="fa fa-cog fa-2x"> </i>
                </a>
                <ul class="dropdown-menu">
                    <li class="header-title"> Sidebar Filters</li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger active-color">
                            <div class="badge-colors text-center">
                                <span class="badge filter badge-purple" data-color="purple"></span>
                                <span class="badge filter badge-blue" data-color="blue"></span>
                                <span class="badge filter badge-green" data-color="green"></span>
                                <span class="badge filter badge-orange" data-color="orange"></span>
                                <span class="badge filter badge-red" data-color="red"></span>
                                <span class="badge filter badge-rose active" data-color="rose"></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="header-title">Sidebar Background</li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger background-color">
                            <div class="text-center">
                                <span class="badge filter badge-white" data-color="white"></span>
                                <span class="badge filter badge-black active" data-color="black"></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger">
                            <p>Sidebar Mini</p>
                            <div class="togglebutton switch-sidebar-mini">
                                <label>
                                    <input type="checkbox" unchecked="">
                                </label>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger">
                            <p>Sidebar Image</p>
                            <div class="togglebutton switch-sidebar-image">
                                <label>
                                    <input type="checkbox" checked="">
                                </label>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="header-title">Images</li>
                    <li class="active">
                        <a class="img-holder switch-trigger" href="javascript:void(0)">
                            <img src="../assets/img/sidebar-1.jpg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a class="img-holder switch-trigger" href="javascript:void(0)">
                            <img src="../assets/img/sidebar-2.jpg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a class="img-holder switch-trigger" href="javascript:void(0)">
                            <img src="../assets/img/sidebar-3.jpg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a class="img-holder switch-trigger" href="javascript:void(0)">
                            <img src="../assets/img/sidebar-4.jpg" alt="" />
                        </a>
                    </li>
                    <li class="button-container">
                        <div class="">
                            <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-rose btn-block">Buy Now</a>
                        </div>
                        <div class="">
                            <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-info btn-block">Get Free Demo</a>
                        </div>
                    </li>
                    <li class="header-title">Thank you for 95 shares!</li>
                    <li class="button-container">
                        <button id="twitter" class="btn btn-social btn-twitter btn-round"><i class="fa fa-twitter"></i> &middot; 45</button>
                        <button id="facebook" class="btn btn-social btn-facebook btn-round"><i class="fa fa-facebook-square"> &middot;</i>50</button>
                    </li>
                </ul>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <!--   Core JS Files   -->
        <!-- <script src="{{ asset('/assets/js/jquery-3.2.1.min.js') }}"></script> -->
        <!-- <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script> -->
        <script src="{{ asset('/assets/js/material.min.js') }}"></script>
        <script src="{{ asset('/assets/js/perfect-scrollbar.jquery.min.js') }}"></script>
        <!-- Library for adding dinamically elements -->
        <!-- <script src="{{ asset('/assets/js/arrive.min.js') }}"></script> -->
        <!-- Forms Validations Plugin -->
        <!-- <script src="{{ asset('/assets/js/jquery.validate.min.js') }}"></script> -->
        <!-- Promise Library for SweetAlert2 working on IE -->
        <!-- <script src="{{ asset('/assets/js/es6-promise-auto.min.js') }}"></script> -->
        <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
        <!-- <script src="{{ asset('/assets/js/moment.min.js') }}"></script> -->
        <!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
        <!-- <script src="{{ asset('/assets/js/chartist.min.js') }}"></script> -->
        <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <!-- <script src="{{ asset('/assets/js/jquery.bootstrap-wizard.js') }}"></script> -->
        <!--  Notifications Plugin, full documentation here: https://bootstrap-notify.remabledesigns.com/    -->
        <!-- <script src="{{ asset('/assets/js/bootstrap-notify.js') }}"></script> -->
        <!--   Sharrre Library    -->
        <!-- <script src="{{ asset('/assets/js/jquery.sharrre.js') }}"></script> -->
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <!-- <script src="{{ asset('/assets/js/bootstrap-datetimepicker.js') }}"></script> -->
        <!-- Vector Map plugin, full documentation here: https://jvectormap.com/documentation/ -->
        <!-- <script src="{{ asset('/assets/js/jquery-jvectormap.js') }}"></script> -->
        <!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
        <!-- <script src="{{ asset('/assets/js/nouislider.min.js') }}"></script> -->
        <!--  Google Maps Plugin    -->
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script> -->
        <!--  Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
        <!-- <script src="{{ asset('/assets/js/jquery.select-bootstrap.js') }}"></script> -->
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
        <script src="{{ asset('/assets/js/jquery.datatables.js') }}"></script>
        <!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
        <!-- <script src="{{ asset('/assets/js/sweetalert2.js') }}"></script> -->
        <!-- Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
        <!-- <script src="{{ asset('/assets/js/jasny-bootstrap.min.js') }}"></script> -->
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <!-- <script src="{{ asset('/assets/js/fullcalendar.min.js') }}"></script> -->
        <!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <!-- <script src="{{ asset('/assets/js/jquery.tagsinput.js') }}"></script> -->
        <!-- Material Dashboard javascript methods -->
        <script src="{{ asset('/assets/js/material-dashboard.js') }}"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <!-- <script src="{{ asset('/assets/js/demo.js') }}"></script> -->
        <!-- <script>
            $(document).ready(function() {

                // Javascript method's body can be found in assets/js/demos.js
                demo.initDashboardPageCharts();

                demo.initVectorMap();
            });
        </script> -->
    </body>
@endsection
