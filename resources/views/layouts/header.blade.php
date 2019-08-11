<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - Aplikasi Alumni</title>

    <!-- Bootstrap -->
    <link href="{{ asset('template/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('template/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('template/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('template/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('template/build/css/custom.min.css') }}" rel="stylesheet">
    <style>
      .blur {
        -webkit-filter: blur(500px);
        filter: blur(10px);
      }
      img {
        width: 250px;
      }
    </style>
  </head>

  <body class="nav-md">

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            
          <ul class="nav navbar-nav navbar-left">
            <li style="padding-left: 29px; padding-top: 8px; font-size: 30px"><a href=""><b>Aplikasi Alumni</b></a></li>
          </ul>

              <ul class="nav navbar-nav navbar-right">
            @if (Session::has('getLogin'))
						    <li style="padding-bottom: 8px; padding-top: 25px; padding-right: 20px"><b>Hallo, Selamat Datang - {{{ Session::get('getLogin') }}}</b> !</font></li>
						@else
                <li style="padding-top: 5px; padding-right: 20px; font-size: 20px"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">Login</a></li>
						@endif
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        @include('front.modal_login')

        @yield('content')