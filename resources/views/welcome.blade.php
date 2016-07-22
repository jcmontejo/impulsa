@extends('layouts.master')
@section('content')
	
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/img1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>IMPULSA bolsa de trabajo</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/img2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Consulta Nuestras Vacantes Laborales</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/img3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Contamos con PROFESIONISTAS</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
         <div class="col-md-8">
                <div class="col-lg-12">
                <h1 class="page-header">
                    Bienvenido a IMPULSA - Bolsa de Trabajo Universitaria
                </h1>
                  <p class=" lead text-justify">
               El objetivo de Impulsa, Bolsa de Trabajo, es la vinculación de la comunidad de la Universidad de Ciencias y Artes de Chiapas con el mercado de trabajo bajo un modelo de competencias laborales.
           </p>
           <p class="text-justify">
               Desde la Dirección de Competitividad e Innovación, procuramos enlaces estratégicos con empresas, grupos, organizaciones e instituciones a fin de lograr alianzas, convenios, acuerdos de colaboración para ofrecer oportunidades profesionales.
           </p>
           <p class="text-justify">
               La Bolsa de Trabajo capta y te ofrece las vacantes que actualmente ofrece el mundo laboral, no las crea.

           </p>
           <p class="text-justify">
               Los servicios que ofrecemos son gratuitos y están dirigidos a nuestra comunidad universitaria así como empresas e instituciones públicas y privadas.

           </p>
            </div>
         </div>
         <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
            <br><br>
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Entrevista de trabajo</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Antes de...</a>
                                </li>
                                <li><a href="#">Durante...</a>
                                </li>
                                <li><a href="#">¿Qué podria afectar tú desempeño en...</a>
                                </li>
                                <!--<li><a href="#">Category Name</a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                    <h4>Tips de búsqueda</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Algunos tips</a>
                                </li>
                                <li><a href="#">¿Dónde busco empleo?</a>
                                </li>
                                <li><a href="#">Tomar en cuenta</a>
                                </li>
                                <!--<li><a href="#">Category Name</a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                    <h4>¿Cómo crear un CV?</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Importancia</a>
                                </li>
                                <li><a href="#">Elementos principales</a>
                                </li>
                                <li><a href="#">¿Qué debes evitar?</a>
                                </li>
                                <!--<li><a href="#">Category Name</a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

            
        </div>
        <!-- /.row -->
        <hr>
        <!-- Portfolio Section -->
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-18">
                    <table class="table table-striped">
              <thead>
                <div class="page-header">
                    <h3>Puestos de trabajo disponibles para usted <small>Trabajos recientes</small></h3>
                </div>
                  <tr>
                      <td><strong>Puesto requerido</strong></td>
                      <td><strong>Tareas</strong></td>
                      <td><strong>Habilidades</strong></td>
                      <td><strong>Área</strong></td>
                      <td><strong>Salario</strong></td>
                      <td><strong>Contacto</strong></td>
                  </tr>
              </thead>
              <tbody>
                   <tr>
                       <td>Programador PHP</td>
                       <td>Crear páginas web</td>
                       <td>Proactivo</td>
                       <td>Sistemas Computacionales</td>
                       <td>$10,000.00</td>
                       <td>jncrlsmontejo@gmail.com</td>
                   </tr>
              </tbody>
           </table>
               </div>
           
                </div>
            </div>
        <!-- /.row -->

        <hr>
@endsection

