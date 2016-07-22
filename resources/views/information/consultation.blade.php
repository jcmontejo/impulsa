@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="col-lg-12">
					<div class="page-header">
  						<h1>Consulta de vacantes</h1>
                        <hr>
                        <h4>ESTIMADOS ESTUDIANTES Y EGRESADOS:</h4>
				  		<p class="lead">
				  			En la Universidad de Ciencias y Artes de Chiapas, nos esforzamos cada día por brindarte un mejor servicio. Este vínculo con OCCMundial.com es muestra de ello.
				  		</p>
				  		<p class="lead">
				  			Hemos firmado un Acuerdo de Colaboración con este importante portal de empleo para desarrollar conjuntamente tu nueva bolsa de trabajo en línea… 
				  		</p>
				  		<p class="lead">
				  			Obtén tus claves de acceso y sube tu currículum vitae para que tu perfil laboral se encuentre activo y a la vista de 16,000 empresas de todo el país. Además podrás consultar y postularte a vacantes exclusivas para tu comunidad universitaria, así como a las vacantes publicadas en OCCMundial.com “El sitio líder para encontrar empleo a cualquier nivel”.
				  		</p>
				  		<p class="lead">
				  			<strong class="copy text-center">¡Todo esto desde tu nueva bolsa de trabajo en línea!</strong>
				  		</p>
                        <p class="lead"> 
                            <strong>Nota:</strong> Si ya eres usuario de OCCMundial.com tan solo debes ingresar con tus claves de acceso desde éste sitio para comenzar a disfrutar ahora mismo de sus beneficios.
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