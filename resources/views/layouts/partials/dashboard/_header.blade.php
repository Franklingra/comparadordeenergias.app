<!-- Navbar-->
<header class="main-header">
<!-- Logo -->
    <a href="{{url('home')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><img class="brand-image" src="{{ asset('uploads/img/logo.png') }}"  width="110" alt=""/></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle"
                       data-toggle="dropdown">
                        <img class="user-image" 
                                 src="../../../uploads/avatar/{{ Auth::user()->avatar}}" 
                                 alt="Avatar"/>
                        <span class="hidden-xs">{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img class="img-circle" 
                                 src="../../../uploads/avatar/{{ Auth::user()->avatar}}" 
                                 alt="Avatar"/>
                            <p>
                                {{ Auth::user()->first_name}} {{ Auth::user()->last_name}}
                                <small>Miembro desde {{ date('d M Y',Auth::user()->created_at)}}</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-left margin-left">
                                <a href="#" class="btn btn-default btn-flat" data-toggle="offcanvas"
                                   role="button">
                                    <i class="fa fa-align-justify"></i>
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Cerrar sesión</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
    </nav>
</header>
<!-- ./Navbar -->