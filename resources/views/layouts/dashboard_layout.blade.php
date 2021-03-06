<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/dashboard/bootstrap.min.css') }}"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/dashboard/AdminLTE.css') }}"/>
        <!-- custom styles -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/dashboard/customize.css') }}"/>
        <!-- sweetalert css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/dashboard/sweetalert.css') }}"/>
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/dashboard/_all-skins.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/dashboard/bootstrap-tagsinput.css') }}"/>
        <!-- tags input css -->
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <title>Eligenergia.es | panel - @yield('title')</title>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <!-- Header -->
            @include('layouts.partials.dashboard._header')
            <!-- /.Header -->
            <!-- Aside -->
            @include('layouts.partials.dashboard._aside')
            <!-- /.Aside -->
            <!-- Content -->
            <div class="content-wrapper">
                @yield('content_header')
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                
                    @yield('second_title')
                     <div class="box-body">
                        @yield('content')
                     </div>
                     <!-- /.box-body -->
                     <div class="box-footer">
                         @yield('footer_box')
                     </div>
                     <!-- /.box-footer-->
                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
        <!-- /. Page content-->
            <!-- /.Content -->
            <!-- Footer -->
            @include('layouts.partials.dashboard._footer')
            <!-- /.Footer -->
            <aside class="control-sidebar control-sidebar-dark"></aside>
            <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
        </div>
        
        <!-- jQuery 2.2.3 -->
        <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="{{ URL::asset('js/dashboard/jquery.slimscroll.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ URL::asset('js/dashboard/fastclick.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ URL::asset('js/dashboard/app.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ URL::asset('js/dashboard/demo.js') }}"></script>
        <!-- sweetalert -->
        <script src="{{ URL::asset('js/dashboard/sweetalert.min.js') }}"></script>
        <script src="{{ URL::asset('js/dashboard/customize.js') }}"></script>
        <script src="{{ URL::asset('js/dashboard/bootstrap-tagsinput.js') }}"></script>
        <script>
            @if(notify()->ready())
                swal({
                    title: '{!! notify()->message() !!}',
                    type: '{{ notify()->type() }}'
                });
            @endif
        </script>
        @yield('scripts')    
    </body>
</html>