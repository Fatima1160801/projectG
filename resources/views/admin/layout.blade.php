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
    <title> Birzeit Transportation @yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">



    
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

   <!-- Left Panel -->
<!-- Left Panel -->
<div>

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">


        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>{{__('web.Dashboard')}}</a>
                </li>
                <h3 class="menu-title">{{__('web.Management')}}</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-edit (alias)"></i> {{__('web.Manage Trips')}}</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa ti-truck"></i><a href="Bus.html"> {{__('web.Bus')}} </a></li>
                        <li><i class="fa fa-truck"></i><a href="Fourd.html">{{__('web.Van')}}</a></li>
                        <li><i class="fa ti-car"></i><a href="Taxi.html"> {{__('web.Taxi')}} </a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i> {{__('web.Manage Driver')}}</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-map-marker"></i><a href="Track-Drivers .html">{{__('web.Track Drivers')}} </a></li>
                        <li><i class="fa fa-plus"></i><a href="{{url('/admin/AddDriver/1')}}"> {{__('web.Add New driver')}} </a></li>
                        <li><i class="fa fa-info"></i><a href="{{url('/admin/informationDriver/{id}')}}">{{__('web.Information')}} </a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  ti-user"></i>{{__('web.Manage Passenger')}}</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-pencil-square"></i><a href="Manual-Bookings.html"> {{__('web.Manual Bookings')}} </a></li>
                        <li><i class="fa ti-gift"></i><a href="Manage-Rewards.html">{{__('web.Manage Rewards')}} </a></li>
                        <li><i class="fa fa-info"></i><a href="{{url("/admin/informationPassenger/id")}}">{{__('web.Information')}} </a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>{{__('web.Manage Admin')}}</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="{{url("/admin/AddAdmin/{id}")}}">{{__('web.Add New Admin')}} </a></li>
                        <li><i class="fa fa-info"></i><a href="{{url("/admin/informationAdmin/{id}")}}">{{__('web.Information')}} </a></li>
                    </ul>
                </li>

                <h3 class="menu-title"> {{__('web.Communicate')}} </h3><!-- /.menu-title -->


                <li>
                    <a href="Notifications.html"><i class="menu-icon fa fa-bell-o"></i> {{__('web.Send Notifications')}} </a>
                </li>
                <li>
                    <a href="Messages.html"> <i class="menu-icon ti-email"></i> {{__('web.Send Messages')}} </a>
                </li>

                <h3 class="menu-title">Analytics</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i> {{__('web.Analytics')}} </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa ti-money"></i><a href="{{url('/admin/ManageRewards/id')}}">{{__('web.Track Earnings')}}</a></li>
                        <li><i class="menu-icon fa ti-time"></i><a href="{{url('/admin/RushHours/id')}}">{{__('web.Rush Hours')}}</a></li>
                        <li><i class="menu-icon fa ti-plus"></i><a href="{{url('/admin/Extra')}}"> {{__('web.Extra')}} </a></li>
                    </ul>
                </li>


        </div><!-- /.navbar-collapse -->
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
                    <div class="header-left d-flex">
                        <div>   @if(App::getLocale()=="ar")
                            <a class="nav-link mr-1" href="{{url('lang/set/en')}}"><i class="fa fa-question-circle"></i> English</a>
                            @else
                            <a class="nav-link mr-1" href="{{url('lang/set/ar')}}"><i class="fa fa-question-circle"></i> Arabic</a>
                        @endif</div>

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
                            <a class="nav-link" href="{{url('/admin/Admin-Profile/1')}}"><i class="fa fa-user"></i>{{__('web.My profile')}} </a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> {{__('web.Notifications')}} <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>  {{__('web.Settings')}}</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> {{__('web.Logout')}} </a>
                        </div>

                    </div>


                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
@yield('main')

@yield('script')

<script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/main.js')}}"></script>
<script src="{{asset('admin/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
<script src="{{asset('admin/assets/js/widgets.js')}}"></script>



</body>

</html>

