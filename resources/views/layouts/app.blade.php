<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sistema de Control de Procesos</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker3.standalone.min.css">

    <!--<link rel="stylesheet" href="/procesos/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/procesos/public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/procesos/public/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/procesos/public/css/_all-skins.min.css">
    <link rel="stylesheet" href="/procesos/public/css/ionicons.min.css">
    <link rel="stylesheet" href="/procesos/public/css/select2.min.css">
    <link rel="stylesheet" href="/procesos/public/css/icon.css">
    <link rel="stylesheet" href="/procesos/public/css/font-awesome2.min.css">
    <link rel="stylesheet" href="/procesos/public/css/font-awesome3.min.css"> -->

    <style>
        input {text-transform:uppercase;}
        /*  .panel-heading {
            background-color: #0000FF;
            color: #000000;
        }
        .panel-title {
            background-color: #0000FF;
            
        }
        .panel-title a{
            color: #000000;
        }*/
    </style>
    @yield('css')
</head>
<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
         <!--<div style="height:150px; background-color: white; display: block-inline;">
            <div style="text-align:left; left-margin:5%; display:float;"><img src="./img/logo.png"/></div>
            <div style="text-align:right;display:float;"><img src="./img/header.png"/></div>
        </div>-->
        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation"  style="background-color:white; display:block;">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="color:blue; text-align:center; size:50px;"> 
                    <span class="sr-only">Ocultar</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu"  style="background-color:white;" >
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu" >
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" style="background-color:white;" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                               <!-- <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                                     class="user-image" alt="User Image"/>-->
                                    <div style="text-align:right;display:inline;"><img src="{{ asset('img/header.png') }}" height="80px"/></div>
                                    <div style="text-align:right;display:inline;"><img src="{{ asset('img/logo.png') }}" height="80px"/></div>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <!--<span class="hidden-xs">{!! Auth::user()->name !!}</span>-->
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {!! Auth::user()->name !!}
                                        <small>Member since {!! Auth::user()->created_at->format('M. Y') !!}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px; text-align: center;">
             <div align="right" style="display:block-inline;"><img src="{{ asset('img/logo_sistemas.png') }}" height="65px" style="text-align:right;"/></div>
             <strong>Desarrollado por <a href="#">Subdirección de Sistemas</a>.</strong>
        </footer>
    </div>

@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
                <a class="navbar-brand" href="{!! url('/') !!}">
                    Sistema de Control de Procesos
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{!! url('/home') !!}">Inicio</a></li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{!! url('/login') !!}">Iniciar Sesión</a></li>
                   <!-- <li><a href="{!! url('/register') !!}">Registrarse</a></li>-->
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
@endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/js/app.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
    <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.0.3/js/buttons.colVis.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    <script type="text/javascript" src="{{ asset('../public/js/procesos.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/locales/bootstrap-datepicker.es.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    
    <!-- locales -->
    <!--
    <script src="/procesos/public/js/jquery.min.js"></script>
    <script src="/procesos/public/js/bootstrap.min.js"></script>
    <script src="/procesos/public/js/select2.min.js"></script>
    <script src="/procesos/public/js/icheck.min.js"></script>
    <script src="/procesos/public/js/app.min.js"></script>
    <link href="/procesos/public/css/select2.min.css" rel="stylesheet" />
    <script src="/procesos/public/js/select2.min.js"></script>
    <link rel="stylesheet" href="/procesos/public/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/procesos/public/css/buttons.dataTables.min.css">
    <script src="/procesos/public/js/jquery.dataTables.min.js"></script>
    <script src="/procesos/public/js/dataTables.buttons.min.js"></script>
    <script src="/procesos/public/js/buttons.colVis.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    <script type="text/javascript" src="{{ asset('../public/js/procesos.js') }}"></script>
    -->
    @yield('scripts')
</body>
</html>