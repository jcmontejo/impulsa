<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>
    <!-- Bootstrap Core CSS -->
    
    {!!Html::style('css/bootstrap.min.css')!!}

    <!-- Custom CSS -->
    
    {!! Html::style('css/modern-business.css')!!}
    <!-- Custom Fonts -->
    
    {!! Html::style('font-awesome/css/font-awesome.min.css')!!}

    <!-- Custom styling plus plugins -->

    {!! Html::style('css/icheck/flat/green.css')!!}
    {!! Html::style('css/animate.min.css')!!}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/')}}">Impulsa</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dirección <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('/about')}}">Conocenos</a>
                            </li>
                            <li>
                                <a href="{{ url('/address')}}">Directorio</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/comunity')}}">Comunidad UNICACH</a>
                    </li>
                    <li>
                        <a href="{{ url('/consultation')}}">Consulta de vacantes</a>
                    </li>
                    <li>
                        <a href="{{ url('/company')}}">Empresas e Instituciones</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ImpulsArte<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('/impulsarte')}}">¿Qué es ImpulsArte?</a>
                            </li>
                            <li>
                                <a href="{{ url('/godfather')}}">Apadrina a un pintor</a>
                            </li>
                            <li>
                                <a href="{{ url('/emunicach')}}">EMUNICACH</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/events')}}">Eventos</a>
                    </li>
                    <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    
                        <li><a href="{{ url('/access/create') }}">Iniciar Sesión</a></li>
                        <li><a href="{{ url('/auth/register') }}">Registrar</a></li>
                
                </ul>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>  

    @yield('content')

        <!-- Footer -->
        <footer>
            <div class="row">
                 <div class="col-lg-12">
                   <p class="copy text-center">1ª Sur Poniente No. 1460 Col. Centro C. P. 29000 | Tuxtla Gutiérrez, Chiapas | Tel. +52 (961) 61 704 00,</p>
                   <p class="copy text-center">D. R. © Universidad de Ciencias y Artes de Chiapas, México. 2016</p>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    {!! Html::script('js/jquery.js')!!}
    <!--<script src="js/jquery.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('js/bootstrap.min.js')!!}
    <!--<script src="js/bootstrap.min.js"></script>-->

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
