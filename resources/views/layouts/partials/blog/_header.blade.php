<div class="navbar-wrapper">
    <div class="container" id="top">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{ asset('uploads/img/logo.png') }}" alt=""/>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        @if (Auth::check())
                            <li {{{ (Request::is('home') ? 'class=active' : '') }}}>
                                <a href="{{url('/home')}}">Home</a>
                            </li>
                        @endif
                        <li><a href="#contact">Comparador de servicios</a></li>
                        <li><a href="#about">Sobre nosotros</a></li>
                        <li><a href="#contact">Contactanos</a></li>
                            @if (Auth::guest())
                                
                                <li {{{ (Request::is('login') ? 'class=active' : '') }}}>
                                    <a href="{{ route('login') }}">Iniciar sesión</a></li>
                                </li>
                            @else
                            <li class="dropdown">
                                <a href="#" 
                                   class="dropdown-toggle" 
                                   data-toggle="dropdown" 
                                   role="button" aria-haspopup="true" 
                                   aria-expanded="false">
                                    
                                     {{ Auth::user()->first_name}}
                                     
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Perfil</a></li>
                                    <li><a href="{{ route('logout') }}">Salir</a></li>
                                </ul>
                            </li>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>