<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">


    <link rel="stylesheet" href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(!Session('info_func'))
    <script>
     window.location.href="{{url('template/create_loging_f')}}";
    </script>
@endif
  @yield('css')
 
 
</head>

<body>
  

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
        

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
              
                <a class="navbar-brand" href="./"><img src="{{asset('admin/images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('admin/images/logo2.png')}}" alt="Logo"></a>
            </div>
<div>
    @if (session('info_func'))
    <ul>
     <li>
         <a href="#" onclick="destro_sess_func()" style="color: chartreuse; font-family:aharoni">Sign Up<--</a>
     </li>
    </ul>
@endif
</div>
            @if (session('info_func'))
                 @if(session('info_func')[0]->statut==1)
                 <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="{{url('/')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        </li>
                        <h3 class="menu-title">ROOM</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>HOTEL</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-puzzle-piece"></i><a href="{{url('categorie/create')}}">Save category</a></li>
                                <li><i class="fa fa-id-badge"></i><a href="{{url('categorie/show')}}">Hotel list</a></li>
                                <li><i class="fa fa-bars"></i><a href="{{url('categorie/retore_cat')}}">Restore Hotel</a></li>
                              
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>ROOM</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="{{url('chambre/create')}}">Save Room</a></li>
                                <li><i class="fa fa-table"></i><a href="{{url('chambre/show')}}">Room List</a></li>
                                <li><i class="fa fa-table"></i><a href="{{url('chambre/restora')}}">Restore Room</a></li>
                
                            </ul>
                        </li>
                    
                       
                        
                        
                        <h3 class="menu-title">RESERVATION ROOM</h3><!-- /.menu-title -->
                
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>CUSTOMER</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{url('template/create_user')}}">Customer Reservation</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                                                              
                            
                            
                     
                
                
                        <li>
                            <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                                <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                                <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                            </ul>
                        </li>
                
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                                <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>EMPLOYEE</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-th"></i><a href="{{url('template/dep_create')}}">Save Department Employees</a></li>
                                    <li><i class="menu-icon fa fa-th"></i><a href="{{url('template/create_f')}}">Save employees</a></li>
                                </ul>
                            </li>
                
                            <h3 class="menu-title">BLACK BOX</h3><!-- /.menu-title -->
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>EMPLOYEE MANAGEMENT</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-th"></i><a href="{{url('template/show_list_f')}}">LIST OF EMPLOYEES</a></li>
                                    <li><i class="menu-icon fa fa-th"></i><a href="{{url('template/list_cli')}}">CUSTOMER LIST</a></li>
                                </ul>
                            </li>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            @endif
                @if (session('info_func')[0]->statut==0)
                      
                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="{{url('/')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        </li>
                       
                       
                        <h3 class="menu-title">RESERVATION ROOM</h3><!-- /.menu-title -->
                
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>CUSTOMER</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{url('template/create_user')}}">Customer Reservation</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                                                              
                        </ul>
                </div><!-- /.navbar-collapse --> 
             @endif
               
                   
               @endif
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('admin/images/avatar/1.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('admin/images/avatar/2.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('admin/images/avatar/3.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('admin/images/avatar/4.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('admin/images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    



     


        <div class="content mt-3">

           

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{App\Models\reservation::count()}}</span>
                        </h4>
                        <p class="text-light">Booking Name</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{App\Models\categorie::count()}}</span>
                        </h4>
                        <p class="text-light">Hotel Number</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{App\Models\User::count()}}</span>
                        </h4>
                        <p class="text-light">Customer Number</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{App\Models\fonctionaire::count()}}</span>
                        </h4>
                        <p class="text-light">Employees Number</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-facebook"></i>
                    <ul>
                        <li>
                            <span class="count">40</span> k
                            <span>friends</span>
                        </li>
                        <li>
                            <span class="count">450</span>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-twitter"></i>
                    <ul>
                        <li>
                            <span class="count">30</span> k
                            <span>friends</span>
                        </li>
                        <li>
                            <span class="count">450</span>
                            <span>tweets</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    <i class="fa fa-linkedin"></i>
                    <ul>
                        <li>
                            <span class="count">40</span> +
                            <span>contacts</span>
                        </li>
                        <li>
                            <span class="count">250</span>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-google-plus"></i>
                    <ul>
                        <li>
                            <span class="count">94</span> k
                            <span>followers</span>
                        </li>
                        <li>
                            <span class="count">92</span>
                            <span>circles</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->



  
      @include('modal')
     
     @if (session('info_func'))
     @if (session('info_func')[0]->statut==1)
     <div id="kinx" style="margin-left: 55px">
       <button type="button" class="btn btn-info mt-2" onclick="create_cat()">Add_Cat</button>
       <button type="button" class="btn btn-success mt-2" onclick="show_cato()">Show_Cat</button>
       <button type="button" class="btn btn-primary mt-2" onclick="restore_cat()">Restore_cat</button>
       <button type="button" class="btn btn-danger mt-2" onclick="create_ch()">Add_Chambre</button>
       <button type="button" class="btn btn-warning mt-2" onclick="show_chr()">Show_Chambre</button>
       <button type="button" class="btn btn-default mt-2" onclick="restora_chr()">Rest_Chbr</button>
       <button type="button" class="btn btn-danger mt-2" onclick="create_dep()">Add_dep</button>
       <button type="button" class="btn btn-info mt-2" onclick="create_f()">Add_F</button>
       <button type="button" class="btn btn-success mt-2" onclick="show_f()">show_F</button>
         
     @endif
     @endif

 </div><br><br>








            @yield('content')











            <br><br><br>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>World</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap" style="height: 265px;"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>

          
        </div> <!-- .content -->
    </div><!-- /#right-panel -->
  
    
    <!-- Right Panel -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>


    <script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/main.js')}}"></script>
    <script src="{{asset('admin/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/assets/js/widgets.js')}}"></script>
    <script src="{{asset('admin/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>

  




    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>


<script>
    function create_cat(){
        $.get("{{url('categorie/create')}}",{},function(data,status){
              $("#onx").html(data);
              $("#general").modal('show');
        });
    }
 </script>

 <script>
    function add_cat(){
          var formdata = new FormData($("#lox")[0]);
          $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
              $.ajax({
                type:"post",
                url:"{{url('categorie/strore')}}",
                data:formdata,
                processData:false,
                contentType:false,
                success:function(response){
                    if(response.status==200){
                        $("delo").html(response.message).addClass('alert alert-success');
                    }
                }
              });
    }
 </script>

<script>
function show_cato(){
   $.get("{{url('categorie/show')}}",{},function(data,status){
       $("#kinx").html(data);
   });
}
</script>

<script>
function edit_cat(id){
    $.get("{{url('categorie/edit')}}/"+id,{},function(data,status){
    $("#onx").html(data);
    $("#general").modal('show');
})
}
</script>

<script>
function update_cat(id){
  var formdata = new FormData($("#lax")[0]);
 
          $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
   $.ajax({
      type:"POST",
      url:"{{url('categorie/update')}}/"+id,
      data:formdata,
      processData:false,
      contentType:false,
      success:function(response){
           if(response.status==200){
            $("#dela").html(response.message).addClass('alert alert-success');
           }
      }
   });
}
</script>

<script>
function delete_cat(id){
    $.get("{{url('categorie/delete')}}/"+id,{},function(){
        show_cato()
    });
}
</script>

<script>
function restore_cat(){
    $.get("{{url('categorie/retore_cat')}}",{},function(data,status){
        show_cato()
    })
}
</script>


<script>
function create_ch(){
    $.get("{{url('chambre/create')}}",{},function(data,status){
         $("#onx").html(data);
         $("#general").modal('show');
    });
}
</script>

<script>
 function store_ch(){
    var formdata = new FormData($("#chb")[0]);
    $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

    $.ajax({
         type:"post",
         url:"{{url('chambre/store_ch')}}",
         data:formdata,
         processData:false,
         contentType:false,
         success:function(response){
            if(response.status==200){
              $(".eyon").html(response.message).addClass('alert alert-success');
            }
         }
    });
 }
</script>

      <script>
        function show_chr(){
            $.get("{{url('chambre/show')}}",{},function(data,status){
                 $("#kinx").html(data);
            });
        }
      </script>

<script>
function edit_chr(id){
    $.get("{{url('chambre/edit')}}/"+id,{},function(data,status){
         $("#onx").html(data);
         $("#general").modal('show');
    });
}
</script>


<script>
function updat_x(id){
     var formdata = new FormData($("#chambo")[0]);
     $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

     $.ajax({
             type:"post",
             url:"{{url('chambre/update')}}/"+id,
             data:formdata,
             processData:false,
             contentType:false,
             success:function(response){
                if(response.status==200){
                    $("#ewo").html(response.message).addClass('alert alert-success');
                }
             }
     });
}
</script>


<script>
 function deleto_ch(id){
    $.get("{{url('chambre/deleto')}}/"+id,{},function(){
        show_chr()
    });
 }
</script>

<script>
 function delete_gallery(id){
    $(document).on('click','.hox',function(){
        var formdata = $(this).attr('data-image');

        $.ajax({
           type:"get",
           url:"{{url('chambre/delete_gallery')}}/"+id,
           success:function(response){
            show_chr()
           }
        });
    });
 }
</script>


<script>
   function delete_resto(id){
     $(document).on('click','.hax',function(){
        var formdata = $(this).attr('data-image');

        $.ajax({
            type:"get",
            url:"{{url('chambre/delete_resto')}}/"+id,
            success:function(response){
             show_chr()
            }
        });
     });
   }
</script>

<script>

  function delete_multiple(){
    $(document).on('click','.fex',function(){
         var stock_data = [];
          $(".fex").each(function(){
             if($(this).is(":checked")){
                stock_data.push($(this).val());
             }
          });
          console.log(stock_data);
          $(".kol").on('click',function(){
             
            $.ajax({
             type:"get",
             url:"{{url('chambre/delete_multiple')}}",
             data:"stock_data="+stock_data,
             success:function(response){
                show_chr()
             }
            });
          });
   });
  }
</script>

<script>
 function restora_chr(){
    $.get("{{url('chambre/restora')}}",{},function(){
        show_chr()
    });
 }
</script>


<script>
function create_dep(){
    $.get("{{url('template/dep_create')}}",{},function(data,status){
      $("#onx").html(data);
      $("#general").modal('show');
    });
}
</script>

<script>
function store_dep(){
    var formdata = new FormData($("#ganza")[0]);
    $.ajaxSetup({
headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $.ajax({
    type:"post",
    url:"{{url('template/store_dep')}}",
    data:formdata,
    processData:false,
    contentType:false,
    success:function(response){
        if(response.status==200){
            alert('okkk');
        }
    }
    });
}
</script>

<script>
function create_f(){
    $.get("{{url('template/create_f')}}",{},function(data,status){
         $("#onx").html(data);
         $("#general").modal('show');
    });
}
</script>


<script>
 function add_f(){
    var formdata = new FormData($("#chib")[0]);
    $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    $.ajax({
   type:"post",
   url:"{{url('template/add_functionnaire')}}",
   data:formdata,
   processData:false,
   contentType:false,
   success:function(response){
    if(response.status==200){
        $(".sibo").html(response.message).addClass('alert alert-success');
    }
   }
    });
 }
</script>


<script>
    function destro_sess_func(){
        $.ajax({
              type:"get",
              url:"{{url('template/destroy_sess_func')}}",
              success:function(response){
                window.location.href="{{url('/')}}";
              }
        });
    }
</script>



 <script>
    $(document).ready(function(){
        delete_multiple()
    });
 </script>



@yield('scripts')
</body>

</html>
