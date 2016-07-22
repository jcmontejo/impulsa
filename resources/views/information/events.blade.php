@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="col-lg-12">
					<div class="page-header">
  						<h1>Eventos</h1>
                        <hr>
				  		<p class="lead">
				  			Para fortalecer tu perfil profesional, ponemos a tu alcance herramientas de capacitación y actualización que te apoyarán en la búsqueda de empleo o bien, en la permanencia en éste.
				  		</p>
				  		<p class="lead">
				  			Estos son algunos de los Eventos, Cursos, Talleres, Seminarios que Impulsa ha impartido desde su creación:
				  		</p>
				  		<p class="lead">
				  			<ol>
                                <li class="lead">¿Cómo hago mi Curriculum?</li>
                                <li class="lead">Actitud en una Entrevista de Trabajo.</li>
                                <li class="lead">Taller de Búsqueda de Empleo.</li>
                                <li class="lead">¿Qué son y para qué sirven las Competencias Laborales?</li>
                                <li class="lead">Foro Impulsa tu Desarrollo.</li>
                                <li class="lead">Propósito y Proyecto de Vida.</li>
                                <li class="lead">Innovación y Conocimiento.</li>
                                <li class="lead">Lo indispensable de Trabajar en Equipo.</li>
                                <li class="lead">Administración Eficaz del Tiempo.</li>
                                <li class="lead">Seminario Tu Consultorio, Tu Empresa.</li>
                                <li class="lead">Contabilidad para no Contadores.</li>                   
                            </ol>
				  		</p>
				  		<p class="lead">
				  			<code>Nuestros eventos tienen entrada gratuita y cupo limitado</code>				  		</p>
                        <p class="lead">
                            ¿Tienes alguna sugerencia? ¿No te ha llegado la información de estos talleres a tiempo? Envía tus dudas y comentarios a <a href="#">bolsadetrabajo@unicach.mx</a>
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