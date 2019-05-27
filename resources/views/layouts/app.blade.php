<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!--Ajax-->
     <!--Ajax End-->
    <!-- Multiselect -->



    
      <link href="http://bladephp.co/download/multiselect/jquery.multiselect.css" rel="stylesheet" />
    
    
        <link href="{{asset('public/admin/css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{asset('public/admin/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{asset('public/admin/assets/ionicon/css/ionicons.min.cs')}}s" rel="stylesheet" />
        <link href="{{asset('public/admin/css/material-design-iconic-font.min.css')}}" rel="stylesheet"><!-- animate css -->
        <link href="{{asset('public/admin/css/animate.css')}}" rel="stylesheet" />
        <!-- Waves-effect -->
        <link href="{{asset('public/admin/css/waves-effect.css')}}" rel="stylesheet">
        
        <!-- Custom Files -->
        <link href="{{asset('public/admin/css/helper.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/css/style.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{asset('public/admin/js/modernizr.min.js')}}"></script>

        <link href="{{asset('public/admin/assets/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    

    
</head>
<body>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
                        <!-- Authentication Links -->
                        @guest
                           
                        @else
                            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ URL::to('public/admin/images/avatar-1.jpg')}}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        
                                        <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="md md-setting-power"></i> Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!-- <div class="user-details"> 2nd login starts
                        <div class="pull-left">
                            <img src="images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">John Doe <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="md md-setting-power"></i> Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>   2nd login ends
 -->                    <!--- Divider -->

                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{ route ('home')}}" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fas fa-users"></i><span> Censuses </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route ('add.census')}}">Add Affected Person</a></li>
                                    <li><a href="{{ route ('all.census')}}">All Affected Persons</a></li>
                                    <li><a href="{{ route ('search.census')}}">Search  Persons</a></li>

                                    
                                </ul>
                            </li>

                             

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Designated Person </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('add.dperson') }}">Add Designated Person</a></li> 
                                    <li><a href="{{ route ('all.dperson')}}">All Designated Persons</a></li>
                                        
                                </ul>
                            </li>
                           
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Course </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('add.course') }}">Add Course</a></li> 
                                    <li><a href="{{ route ('list.course')}}">All Course</a></li>
                                        
                                </ul>
                            </li>

<!-- 
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="panels.html">Panels</a></li>
                                    <li><a href="checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="bootstrap-ui.html">BS Elements</a></li>
                                    <li><a href="progressbars.html">Progress Bars</a></li>
                                    <li><a href="notification.html">Notification</a></li>
                                    <li><a href="sweet-alert.html">Sweet-Alert</a></li>
                                </ul>
                            </li> -->

                            <!-- <li class="has_sub"> other options starts
                                <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Components </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="grid.html">Grid</a></li>
                                    <li><a href="portlets.html">Portlets</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                    <li><a href="nestable-list.html">Nesteble</a></li>
                                    <li><a href="ui-sliders.html">Sliders </a></li>
                                    <li><a href="gallery.html">Gallery </a></li>
                                    <li><a href="pricing.html">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-redeem"></i> <span> Icons </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="material-icon.html">Material Design</a></li>
                                    <li><a href="ion-icons.html">Ion Icons</a></li>
                                    <li><a href="font-awesome.html">Font awesome</a></li>
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-now-widgets"></i><span> Forms </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">General Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Advanced Form</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-editor.html">WYSIWYG Editor</a></li>
                                    <li><a href="code-editor.html">Code Editors</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-view-list"></i><span> Data Tables </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables.html">Basic Tables</a></li>
                                    <li><a href="table-datatable.html">Data Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                    <li><a href="responsive-table.html">Responsive Table</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-poll"></i><span> Charts </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="morris-chart.html">Morris Chart</a></li>
                                    <li><a href="chartjs.html">Chartjs</a></li>
                                    <li><a href="flot-chart.html">Flot Chart</a></li>
                                    <li><a href="peity-chart.html">Peity Charts</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                    <li><a href="chart-radial.html">Radial charts</a></li>
                                    <li><a href="other-chart.html">Other Chart</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-place"></i><span> Maps </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="gmap.html"> Google Map</a></li>
                                    <li><a href="vector-map.html"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-pages"></i><span> Pages </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="email-template.html">Email template</a></li>
                                    <li><a href="contact.html">Contact-list</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="recoverpw.html">Recover Password</a></li>
                                    <li><a href="lock-screen.html">Lock Screen</a></li>
                                    <li><a href="blank.html">Blank Page</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                    <li><a href="coming-soon.html">Coming-soon</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="404_alt.html">404 alt</a></li>
                                    <li><a href="500.html">500 Error</a></li>
                                </ul>
                            </li>   other options ends

 -->                           <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Join Table </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('add.parent') }}">Parent Table</a></li> 
                                    <li><a href="{{ route ('add.child')}}">Child Table</a></li>
                                    <li><a href="{{ route ('join')}}">Join Both Table</a></li>
                                        
                                </ul>
                            </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        @endguest
    </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
     <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('public/admin/js/jquery.min.js')}}"></script>
        <script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/admin/js/waves.js')}}"></script>
        <script src="{{asset('public/admin/js/wow.min.js')}}"></script>
        <script src="{{asset('public/admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/chat/moment-2.2.1.js')}}"></script>
        <script src="{{asset('public/admin/assets/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{asset('public/admin/assets/fastclick/fastclick.js')}}"></script>
        <script src="{{asset('public/admin/assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('public/admin/assets/jquery-blockui/jquery.blockUI.js')}}"></script>

        <!-- sweet alerts -->
        <script src="{{asset('public/admin/assets/sweet-alert/sweet-alert.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/sweet-alert/sweet-alert.init.js')}}"></script>

        <!-- flot Chart -->
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- Counter-up -->
        <script src="{{asset('public/admin/assets/counterup/waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/assets/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{asset('public/admin/js/jquery.app.js')}}"></script>

        <!-- Dashboard 
        <script src="{{asset('public/admin/js/jquery.dashboard.js')}}"></script>
-->
        <!-- Chat -->
        <script src="{{asset('public/admin/js/jquery.chat.js')}}"></script>

        <!--Multiselect -->
        <!--
        <script src="http://bladephp.co/download/multiselect/jquery.min.js"></script>
    -->
        <script src="http://bladephp.co/download/multiselect/jquery.multiselect.js"></script>

        <!-- Todo -->
        <script src="{{asset('public/admin/js/jquery.todo.js')}}"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                 $('#multiselect').multiselect({
            columns: 1,
            placeholder: 'Select Your Language',
            search: true,
            selectAll: true
        });
            });

        </script>
</body>
</html>
