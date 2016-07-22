@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="col-lg-12">
					<div class="page-header">
  						<h1>Algunos tips</h1>
                        <hr>
				  		<p class="lead">
				  			La búsqueda de empleo es una actividad proactiva que requiere tu atención y entusiasmo a fin de optar por la mejor vacante a la cual puedas acceder de acuerdo a tu perfil profesional.
				  		</p>
				  		<p class="lead">
				  			Los 3 puntos clave que debes considerar para conseguir un empleo son:
				  		</p>
                        <p class="lead">
                            <ol>
                                <li class="lead">Ampliar tu círculo de búsqueda de empleo</li>
                                <li class="lead">Crear el Curriculum Vitae adecuado</li>
                                <li class="lead">Fortalecer tu venta personal para la entrevista de trabajo.</li>
                            </ol>
                        </p>
				  		<p class="lead">
				  			El enviar tu CV a la vacante que te ha parecido más apropiada esperando a que la Empresa se comunique contigo es un enfoque pasivo, que si bien puede dar resultados, limita tus posibilidades de hallar un empleo de manera rápida o (quizá aún) hallar una mejor oferta laboral. 
				  		</p>
				  		<p class="lead">
				  			Factores a tomar en cuenta:
				  		</p>
                        <p class="lead">
                            <ol>
                                <li class="lead">Cuida tu presentación. Una imagen pulcra y sobria es importante.</li>
                                <li class="lead">Autoconocimiento: el dominar tu CV y los objetivos que persigues te dará mayor confianza y claridad al inclinarte por determinada vacante laboral.</li>
                                <li class="lead">Hay procesos de selección que resultan largos e incluso tediosos, no te desanimes, mantente al pendiente pero continúa tu búsqueda.</li>
                                <li class="lead">Si eres recién egresado, considera que a veces es más importante el aprendizaje o crecimiento a mediano plazo que puedas adquirir en tus primeros empleos, que el sueldo que podrías percibir…no te dejes impresionar, analiza la oferta.</li>
                            </ol>
                        </p>
    			    </div>
    
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
                                <li><a href="{{ url('/after')}}">Antes de...</a>
                                </li>
                                <li><a href="{{ url('/during')}}">Durante...</a>
                                </li>
                                <li><a href="{{ url('/performance')}}">¿Qué podria afectar tú desempeño en...</a>
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
                                <li><a href="{{ url('/tips')}}">Algunos tips</a>
                                </li>
                                <li><a href="{{ url('/employment')}}">¿Dónde busco empleo?</a>
                                </li>
                                <li><a href="{{ url('/consider')}}">Tomar en cuenta</a>
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
                                <li><a href="{{ url('/importance')}}">Importancia</a>
                                </li>
                                <li><a href="{{ url('/main_cv')}}">Elementos principales</a>
                                </li>
                                <li><a href="{{ url('/avoid')}}">¿Qué debes evitar?</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                       <h4>Modelo de CV</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li>{{ Html::link('cv/modeloCV2.pdf', 'Ver modelo de cv', array('target' => '_blank'))}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

            
        </div>
        <!-- /.row -->
		</div>
	</div>
@endsection