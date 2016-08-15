<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" type="text/css" href="css/dashboard/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" type="text/css" href="css/dashboard/AdminLTE.css"/>
        
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" type="text/css" href="css/dashboard/_all-skins.css"/>
        <!-- icheck -->
        <link rel="stylesheet" type="text/css" href="css/dashboard/blue.css"/>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <title>Eligenergia.es @yield('title')</title>
    </head>
    <body class="hold-transition register-page">
        
       
            @yield('content')
        <!-- jQuery 2.2.3 -->
        <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="js/dashboard/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="js/dashboard/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="js/dashboard/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="js/dashboard/demo.js"></script>
        <!-- icheck -->
        <script src="js/dashboard/icheck.min.js"></script>
        <!-- datepicker3 -->
        <script src="js/dashboard/bootstrap-datepicker.js"></script>
        <script>
          $(function () {
            $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
            });
          });
        </script>
        
        
        @yield('scripts');    
    </body>
</html>