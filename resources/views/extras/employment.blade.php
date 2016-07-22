@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="col-lg-12">
					<div class="page-header">
  						<h1>¿Dónde busco empleo?</h1>
                        <hr>
				  		<p class="lead">
				  			Puedes buscar en:
				  		</p>
                        <p class="lead">
                            <ol>
                                <li class="lead">Anuncios en Prensa e Internet</li>
                                <li class="lead">Agencias de Empleo, Secretarías e Instituciones gubernamentales.</li>
                                <li class="lead">Páginas web de la empresa a la que deseas postularte.</li>
                                <li class="lead">Consultorías de Recursos Humanos, Bolsas de Trabajo de tu Universidad y Colegios Profesionales.</li>
                                <li class="lead">Contactos Personales- compañeros de carrera, Colaboradores, maestros, conocidos que puedan promocionarte.</li>
                            </ol>
                        </p>
				  		<p class="lead">
				  			Te compartimos otros sitios para tu búsqueda de empleo:
				  		</p>
				  		<p class="lead">
				  			<ol>
                                                 <li class="lead">https://mx.jora.com</li>
                                                 <li class="lead">www.empleo.gob.mx</li>
                                                 <li class="lead">www.observatoriolaboral.gob.mx</li>
                                                 <li class="lead">www.stps.gob.mx</li>
                                                 <li class="lead">www.trabajaen.gob.mx</li>
                                                 <li class="lead">www.occ.com</li>
                                                 <li class="lead">www.bumeran.com</li>
                                                 <li class="lead">www.computrabajo.com.mx</li>
                                                 <li class="lead">www.zonajobs.com.mx</li>                 
                            </ol>
				  		</p>
				  		<p class="lead">
				  			Los servicios que ofrecemos son gratuitos y están dirigidos a nuestra comunidad universitaria así como empresas e instituciones públicas y privadas.
				  		</p>
                        <p class="lead">
                            Otras Bolsas de Trabajo:
                        </p>
                        <p class="lead">
                            INPROSEP-Instituto de Profesionalización del Servidor Público
                            www.profesionalizacion.chiapas.gob.mx
                            10 poniente y 9 norte no. 987 Tel. 01 961 14 701 61
                        </p>
                        <p class="lead">
                            SUBE-Servicio Único de Búsqueda de Empleo. 
                            http://sistemas.tuxtla.gob.mx/sube/
                            Calle Central y 2 norte altos, Presidencia Municipal. 
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