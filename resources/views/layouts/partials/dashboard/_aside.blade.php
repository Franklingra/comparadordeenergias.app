<!-- Sidebar -->
<aside class="main-sidebar">
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img class="img-circle" 
                                 src="../../../uploads/avatar/{{ Auth::user()->avatar}}" 
                                 alt="Avatar"/>
                    </div>
                    <div class="pull-left info">
                        <p>{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</p>
                        <a href="#">
                            <i class="fa fa-circle text-success"></i> En linea
                        </a>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li class="header">Navegación</li>
                    <li>
                        <a href="{{url('home')}}">
                            <i class="fa fa-home"></i>
                            <span>Home</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                    </li>
                    <!-- Posts -->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-quote-left"></i> <span>Artículos</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('home.post.index')}}"><i class="fa fa-i-cursor"></i>Mis artículos</a></li>
                            @if(Auth::user()->role == 'administrator')
                            <li><a href="#"><i class="fa fa-i-cursor"></i>Todos los artículos</a></li>
                            @endif
                            <li><a href="{{route('home.post.create')}}"><i class="fa fa-pencil-square-o"></i>Crear artículo</a></li>
                        </ul>
                    </li>
                    <!-- /.Posts -->
                    <!-- Pages-->
                    @if(Auth::user()->role == 'administrator')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-newspaper-o"></i> <span>Páginas</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-i-cursor"></i>Páginas</a></li>
                            <li><a href="#"><i class="fa fa-pencil-square-o"></i>Crear Página</a></li>
                        </ul>
                    </li>
                    @endif
                    <!-- /.Pages -->
                    <!-- Users -->
                    @if(Auth::user()->role == 'administrator')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-hand-paper-o"></i> <span>Usuarios</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('home.user.index')}}"><i class="fa fa-hand-scissors-o"></i>Usuarios</a></li>
                            <li><a href="{{route('invite.user.send')}}"><i class="fa fa-send"></i>Invitar usuarios</a></li>
                        </ul>
                    </li>
                    @endif
                    <!-- /.Users -->
                    <!-- Engine -->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-puzzle-piece"></i> <span>Comparador</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-dashboard"></i>Servicios</a></li>
                            <li><a href="#"><i class="fa fa-plus"></i>Registrar servicio</a></li>
                        </ul>
                    </li>
                    <!-- /.Engine -->
                </ul>
            </section>
        </aside>
        <!-- /.Sidebar-->