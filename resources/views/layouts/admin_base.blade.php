<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="icon" href="{{asset('site/img/core-img/destiny-logo.png')}}">
    <title>Destiny &amp; Voice of Nigeria</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
    <!--[if lt IE 9]>
		<script src="{{ asset('admin/assets/js/html5shiv.min.js') }}"></script>
		<script src="{{ asset('admin/assets/js/respond.min.js') }}"></script>
    <![endif]-->
    
</head>

<body>
    
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="{{ url('admin/dashoard') }}" class="logo">
					<img style="width: 220px; height: 40px" src="{{asset('site/img/core-img/destiny-logo.png')}}" width="35" height="35" alt="">
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="{{ asset('admin/assets/img/user.jpg') }}" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ route('profile.index') }}">My Profile</a>
						{{-- <a class="dropdown-item" href="{{ url('admin/profile/'.Auth::user()->id.'/edit ') }}">Edit Profile</a> --}}
						<a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                        </form>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('profile.index') }}">My Profile</a>
                    <a class="dropdown-item" href="{{ url('admin/profile/Auth::user->id/edit ') }}">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="{{ url('admin/dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="{{ route('country.index') }}"><i class="fa fa-group"></i> <span>Countries</span></a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}"><i class="fa fa-group"></i> <span>Users</span></a>
                        </li>
                        <li>
                            <a href="{{ route('adverts.index') }}"><i class="fa fa-book"></i> <span>adverts</span></a>
                        </li>
                        
                        <li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-commenting-o"></i> <span> Articles</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="#"><i class="fa fa-commenting-o"></i> <span> Articles List </span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li onclick=" this.children[0].submit();">
                                            <form id="article-type" action="{{ route('article.index') }}" method="GET">
                                                <input type="hidden" name="article_type" value="nigerians-at-home-achievers">
                                            </form>
                                            <a href="nigerians-at-home-achievers" onclick=" event.preventDefault();">
                                                Nigerians at Home Achievers
                                            </a>
                                        </li>
                                        <li onclick=" this.children[0].submit();">
                                            <form  action="{{ route('article.index') }}" method="GET">
                                                <input type="hidden" name="article_type" value="test-error">
                                            </form>
                                            <a href="test-error" onclick=" event.preventDefault();">
                                                Test error
                                            </a>
                                        </li>
                                        <li><a href="{{ route('article.create') }}">Add Article</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('article.create') }}">Add Article</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('admin/calender')}}"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        @yield('content')

    <div class="sidebar-overlay" data-reff=""></div>
    </div>
    <script>
        var config = {
            routes:{
                tiny_url: "{{URL::to('/api/upload-tinymce')}}"
            } 
        }
    </script>
    <script src="{{ asset('admin/assets/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin/assets/js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    <script src="{{ asset('admin/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery-ui.min.html') }}"></script>
    <script src="{{ asset('admin/assets/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.fullcalendar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/tinymce.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/ini_tinymce.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/tiny_mce_src.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/init-tinymce.js') }}"></script>
</body>