<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('logo/logo.png')}}" type="image/ico" />

    <title>Edujiyaan</title>
    <link rel="icon" href="{{asset('logo/logo.png')}}" type="image/icon type">


    <!-- Bootstrap -->
    <link href="{{asset('admin/src_files/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin/src_files/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin/src_files/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('admin/src_files/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="{{asset('admin/src_files/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('admin/src_files/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('admin/src_files/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    {{-- Datatables --}}
     <link href="{{asset('admin/src_files/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/src_files/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/src_files/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/src_files/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/src_files/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    {{-- pnotify --}}
    
   {{--  <link href="{{asset('admin/src_files/vendors/pnotify/dist/pnotify.css')}}" rel="stylesheet">
    <link href="{{asset('admin/src_files/vendors/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet">
    <link href="{{asset('admin/src_files/vendors/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet"> --}}

    <!-- Custom Theme Style -->
    <link href="{{asset('admin/src_files/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('seller.deshboard')}}" class="site_title" style="height: auto;
              background-color: #fff;display: flex;justify-content: center;">
                <img src="{{asset('logo/logo.png')}}" height="70">
              </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              {{-- <div class="profile_pic">
                <img src="{{asset('admin/src_files/logo/logo.png')}}" alt="..." class="img-circle profile_img">
              </div> --}}
              <div class="profile_info">
                <span>Welcome,<br><b>{{ Auth::guard('seller')->user()->name}}</b></span>
                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('seller.deshboard')}}"><i class="fa fa-home"></i> Home </span></a>
                  </li>

                  <li>
                    <a>
                      <i class="fa fa-desktop"></i>My Profile<span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('seller.MyprofileForm')}}">My Profile</a></li>
                      <li><a href="{{route('seller.MyCategoryForm')}}">My Category</a></li>
                      <li><a href="{{route('seller.change_password_form')}}">Change Password</a></li>
                    </ul>
                  </li>
                  @if (isset($header_data['dealing_category']) && ($header_data['dealing_category']->book == 2))
                    <li>
                      <a><i class="fa fa-desktop"></i>Books<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{route('seller.add_book_form')}}">Add New Book</a></li>
                        <li><a href="{{route('seller.book_list')}}">List Of Books</a></li>
                      </ul>
                    </li>
                  @endif
                  @if (isset($header_data['dealing_category']) && ($header_data['dealing_category']->project == 2))
                    <li>
                      <a><i class="fa fa-desktop"></i>Projects<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ route('seller.add_project_form') }}">Add New Project</a></li>
                        <li><a href="{{ route('seller.project_list') }}">List Of Projects</a></li>
                      </ul>
                    </li> 
                  @endif
                  @if (isset($header_data['dealing_category']) && ($header_data['dealing_category']->megazine == 2))
                    <li>
                      <a><i class="fa fa-desktop"></i>Megazines<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{ route('seller.add_new_megazine') }}">Add New Megazine</a></li>
                        <li><a href="{{ route('seller.megazine_list') }}">List Of Megazines</a></li>
                      </ul>
                    </li>
                  @endif
                  @if (isset($header_data['dealing_category']) && ($header_data['dealing_category']->quiz == 2))
                    <li>
                      <a><i class="fa fa-desktop"></i>Quizes<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{route('seller.add_new_quiz_form')}}">Add New Quiz</a></li>
                        <li><a href="{{route('seller.quiz_list')}}">List Of Quizes</a></li>
                      </ul>
                    </li>
                  @endif
                  <li><a><i class="fa fa-desktop"></i>Orders<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('seller.book_order_list')}}">Book Orders</a></li>
                      <li><a href="{{ route('seller.project_order_list') }}">Project Orders</a></li>
                      <li><a href="{{ route('seller.megazine_order_list') }}">Megazine Orders</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right" style="margin-top: 8px;margin-left: 7px;"></i> Log Out</a></li>
             <form id="logout-form" action="{{ route('seller.logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">
                      @if (isset($seller_data['new_order_view_count']))
                          {{ $seller_data['new_order_view_count'] }}
                      @else
                          0
                      @endif
                    </span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                      @if (isset($seller_data['new_order_view_count']) && $seller_data['new_order_view_count'] > 0 )
                      <li>
                      <a href="{{ route('seller.all_orders') }}">
                          <span>
                            <span>Order</span>
                          </span>
                          <span class="message">
                            <strong>{{ $seller_data['new_order_view_count']}}</strong> New Order Placed Click Here To Check
                          </span>
                        </a>
                      </li>
                    @endif
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->