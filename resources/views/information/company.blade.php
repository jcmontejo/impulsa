@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="col-lg-12">
					<div class="page-header">
  						<h1>Empresas e Instituciones</h1>
                        <hr>
                        <p><code>Servicios que ofrece Impulsa, Bolsa de Trabajo a Empresas, Instituciones, Organizaciones y particulares:</code></p>
                        <h2>Publicación de ofertas de trabajo a través de:</h2>
				  		<p class="lead">
				  			Nuestra página web donde gracias a nuestro convenio con Occ Mundial y la Red Universitaria de Empleo se pueden publicar y consultar vacantes de todo tipo.  (Si su Empresa ya cuenta con claves Occ puede publicar directamente en la RUE-UNICACH).
				  		</p>
				  		<p class="lead">
				  			Redes Sociales como Facebook, donde contamos con más de 3,400 seguidores <a href="#">www.facebook.com/IMPULSA.UNICACH</a>, y Twitter <a href="#">@ImpulsaBT</a>
				  		</p>
				  		<p class="lead">
				  			"Posteo" en las sedes de la UNICACH.
				  		</p>
				  		<p class="lead">
				  			Reenvío del corte de vacantes vía correo electrónico a los directorios de egresados, administrativos y docentes en todo el estado.
				  		</p>
                        <h2>Evaluación por Competencias /Vinculación directa con el candidato</h2>
                        <p class="lead">
                            En ocasiones tenemos a egresados ya evaluados y entrevistados, que podrían empatar con las necesidades de su Empresa bajo el perfil de puesto.
                        </p>
                        <h2>Participar en nuestros Eventos, Cursos o Talleres.</h2>
                        <p class="lead">
                            Se hace extensiva la invitación a las Empresas ya registradas en Impulsa a los diferentes Eventos, Cursos y Talleres que promovemos de manera gratuita. Trabajo en Equipo y Proyecto de Vida son algunos de los temas que se imparten.
                        </p>
                        <h4>Reclutamientos Especiales In Situ.</h4>
                        <p class="lead">
                            Especialmente para Empresas foráneas y cuando la vacante es afín a los perfiles del egresado unicachense, se le pueden facilitar condiciones para realizar su reclutamiento en la universidad.
                        </p>
                        <h2>Ventajas de Nuestro servicio:</h2>
                        <p class="lead">
                            <ol>
                                <li class="lead">Apoyo al Empleo Joven.</li>
                                <li class="lead">Acceso a carreras de Vanguardia.</li>
                                <li class="lead">Alternativa de Reclutamiento Gratuita.</li>
                                <li class="lead">Las vacantes que publicamos son a nivel profesional y semiprofesional (de preparatoria en adelante) y no restrictiva a las carreras de la UNICACH, ya que toda la comunidad universitaria e incluso sus familiares pueden acceder a ellas.</li>
                                <li class="lead">La población que se abarca para la publicación de vacantes es amplia, lo cual ayuda tanto a cubrir sus vacantes como al posicionamiento de su marca o empresa.</li>
                                <li class="lead">Actualización y vínculo con otras empresas a través de nuestros eventos, cursos y talleres.</li>
                            </ol>
                        </p>
                        <h2 class="copy text-center">¿Interesado en nuestro servicio…?</h2>
                        <p class="lead">
                            Realiza tu solicitud de Registro al correo <a href="#">bolsadetrabajo@unicach.mx</a> nosotros le responderemos de inmediato. O al teléfono 61 7 04 00 ext. 4018 o al 60 2 82 37
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