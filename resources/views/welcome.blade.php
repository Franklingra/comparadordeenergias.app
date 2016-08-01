@extends('layouts.blog_layout')

    @section('content')
        <!-- Carousel ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="h1class">Example headline.</h1>
                            <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="h1class">One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- /.carousel -->
        <div id="gardient"></div>
        <div class="container-fluid" id="mid">
            
            <div class="row" id="backimg">
                <div class="col-sm-1"></div>
                <div class="col-sm-6 blog-main">
                    <h2 class="blog-header">
                        Título del artículo
                    </h2>
                    <!-- First Blog Post -->
                    <p class="lead">
                        Publicado por <a href="index.php">Nombre del autor</a>
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-time"></span> 
                        Fecha de publicación Agosto 28, 2013 a las 10:00 PM
                    </p>
                    <hr/>
                    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                    <hr/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Dolore, veritatis, tempora, necessitatibus inventore nisi quam 
                        quia repellat ut tempore laborum possimus eum dicta id animi 
                        corrupti debitis ipsum officiis rerum.
                    </p>
                    <a class="btn btn-default" href="#"> Leer más
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <hr/>
                    <!-- /.blog-post -->
                    <nav>
                        <ul class="pager">
                            <li><a href="#">Recientes</a></li>
                            <li><a href="#">Antiguos</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- /.blog-main -->
                <br/>
                <br/>
    @endsection
    
    @section('aside')
                <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                    <div class="sidebar-module">
                        <div class="well">
                        <h4>Buscar</h4>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                            </div>
                        <!-- /.input-group -->
                        </div>
                        
                    </div>
                    <div class="sidebar-module sidebar-module-inset">
                        <h4>Sobre el autor</h4>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    </div>
                    <div class="sidebar-module">
                        <h4>Archivos</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">March 2014</a></li>
                            <li><a href="#">February 2014</a></li>
                            <li><a href="#">January 2014</a></li>
                            <li><a href="#">December 2013</a></li>
                            <li><a href="#">November 2013</a></li>
                            <li><a href="#">October 2013</a></li>
                            <li><a href="#">September 2013</a></li>
                            <li><a href="#">August 2013</a></li>
                            <li><a href="#">July 2013</a></li>
                            <li><a href="#">June 2013</a></li>
                            <li><a href="#">May 2013</a></li>
                            <li><a href="#">April 2013</a></li>
                        </ol>
                    </div>
                    <div class="sidebar-module">
                        <h4>Redes sociales</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
                <!-- /.blog-sidebar -->
            </div>
            <!-- /.row -->
        </div>
    @endsection
    
    @section('footer')
        <!-- /.container -->
        <div id="gardient"></div>
        <footer class="blog-footer">
                  <p>
                    Eligenergias.es contruido para 
                    <a href="http://www.eligenergia.es">Eligenergia.es</a> por 
                    <a href="mailto:franklingabrielrodriguez@gmail.com">Franklin Rodriguez</a>.</p>
                  <p>
                    <a href="#">De vuelta hacía arriba</a>
                  </p>
                </footer>
        </div>
        <!-- /.container -->
    @endsection
    
    @section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
        <script src="js/app.js"></script>
    @endsection

