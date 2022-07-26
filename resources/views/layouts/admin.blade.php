<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Bootstrap -->
    <link href="{{ asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('gentelella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('gentelella/vendors/nprogress/nprogress.css" rel="stylesheet') }}">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('gentelella/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ asset('gentelella/build/css/custom.min.css') }}" rel="stylesheet">

    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- iCheck -->
    <link href="{{ asset('gentelella/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>


</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/home')}}" class="site_title"><i class="fa fa-user"></i> <span>Admin Panel</span></a>
            </div>

            <div class="clearfix"></div>
            
            <!-- menu profile quick info -->
            @include('layouts.admin.menu-prof-info')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('layouts.admin.side-bar')
            <!-- /sidebar menu -->

          </div>
        </div>

         <!-- top navigation -->
         @include('layouts.admin.top-nav-bar')
        <!-- /top navigation -->

            <!-- page content -->
            @yield('content')
            <!-- /page content -->

        <!-- footer content -->
        @include('layouts.admin.footer')
        <!-- /footer content -->

      </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('gentelella/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
   <script src="{{ asset('gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('gentelella/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('gentelella/vendors/nprogress/nprogress.js') }}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/google-code-prettify/src/prettify.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('gentelella/build/js/custom.min.js') }}"></script>
    
    <!-- iCheck -->
    <script src="{{ asset('gentelella/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('gentelella/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('gentelella/vendors/pdfmake/build/vfs_fonts.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>


    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

</body>
</html>