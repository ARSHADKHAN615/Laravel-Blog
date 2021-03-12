<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('page_title')</title>
      <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
      <link href="{{ asset('admin_asset/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('admin_asset/css/font-awesome.min.css') }}" rel="stylesheet">
      <link href="{{ asset('admin_asset/css/green.css') }}" rel="stylesheet">
      <link href="{{ asset('admin_asset/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('admin_asset/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('admin_asset/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('admin_asset/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('admin_asset/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('admin_asset/css/custom.min.css') }}" rel="stylesheet">
   </head>
   <body class="nav-md">
      <div class="container body">
         <div class="main_container">
            <div class="col-md-3 left_col">
               <div class="left_col scroll-view">
                  <div class="navbar nav_title" style="border: 0;">
                     <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>{{config("constant.site_name")}}</span></a>
                  </div>
                  <div class="clearfix"></div>
                  <br />
                  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                     <div class="menu_section">
                        <h3>Menu</h3>
                        <ul class="nav side-menu">
                           <li><a href="/admin/post/list"><i class="fa fa-home"></i> Post </a></li>
						   <li><a href="/admin/page/list"><i class="fa fa-home"></i> Page </a></li>
						   <li><a href="/admin/contact/list"><i class="fa fa-home"></i> Contact Us </a></li>
						   
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
               <div class="nav_menu">
                  <div class="nav toggle">
                     <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                  </div>
                  <nav class="nav navbar-nav">
                     <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                           <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                           Welcome  {{session("BLOG_USER_NAME")}}
                           </a>
                           <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item"  href="{{url("admin/logout")}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                           </div>
                        </li>
					</ul>
                  </nav>
               </div>
            </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">
               @section('container')
			   @show
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <footer>
               <div class="pull-right">
                  Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
               </div>
               <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
         </div>
      </div>
      <script src="{{ asset('admin_asset/js/jquery.min.js') }}"></script>
      <script src="{{ asset('admin_asset/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('admin_asset/js/icheck.min.js') }}"></script>
      <script src="{{ asset('admin_asset/js/custom.js') }}"></script>
   </body>
</html>