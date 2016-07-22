@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="col-lg-12">
					<div class="page-header">
  						<h1>Comunidad UNICACH</h1>
                        <hr>
                        <p><code>Servicios que ofrece Impulsa, Bolsa de Trabajo a la Comunidad de la Universidad de Ciencias y Artes de Chiapas</code></p>
                        <h3>Vacantes Laborales</h3>
				  		<p>
				  			Si estás buscando empleo ingresa tu Curriculum Vitae y accede a las vacantes que Impulsa te ofrece; esta herramienta también facilitará tu contacto con futuras ofertas de nuestros empleadores.
				  		</p>
                        <p>
                            Tener tus datos actualizados y completar en línea tu perfil te permitirá agilizar tu proceso de búsqueda, así como también ser un posible candidato en los procesos de selección de las empresas e instituciones públicas y privadas.
                        </p>
                        <p>
                            Además de ingresarlo en ésta página, es importante que nos envíes tu Curriculum Vitae al correo bolsadetrabajo@unicach.mx  En ocasiones, para reclutamientos especiales lo que hacemos es redirigir tu curriculum y entras a los procesos de selección de las Empresas.
                        </p>
				  		<h3>Asesoría Profesional</h3>
                        <p>
                            La búsqueda de empleo es una actividad proactiva y constante, en la cual debes tener claro cuál es tu objetivo profesional, practicar tu venta personal en las entrevistas, entregar un Curriculum Vitae con los datos precisos, negociar con tu empleador, entre otros, y es en este proceso donde pueden surgir dudas y preguntas.
                        </p>
                        <p>
                            Contáctanos al correo electrónico <a href="#">bolsadetrabajo@unicach.mx</a> y nos comunicaremos para brindarte la orientación pertinente.
                        </p>
                        <h3>Eventos, Cursos y Talleres</h3>
                        <p>
                            Accede en nuestro menú a los eventos y capacitaciones que Impulsa te ofrece para apoyar tu inserción en el campo laboral.
                        </p>
                        <p>
                            Si tienes sugerencia de algún curso, taller o evento, envía tus comentarios a <a href="#">bolsadetrabajo@unicach.mx</a>  o a <a href="#">www.facebook.com/IMPULSA.UNICACH</a>
                        </p>
                        <h3 class="copy text-center">Dudas Frecuentes</h3>
                        <h4>¿Cómo me inscribo en la Bolsa de Trabajo?</h4>
                        <p>
                            Ingresa tu Curriculum en nuestro sistema y también envíalo a nuestro correo <a href="#">bolsadetrabajo@unicach.mx</a>
                        </p>
                        <h4>¿Cómo ingreso mi Curriculum al sistema de Impulsa?</h4>
                        <p>
                            En la página de Impulsa, accede al menú “Consulta de Vacantes”, posteriormente da clic en “Subir mi curriculum”.  A partir de ahí el sistema te irá guiando paso a paso como debes hacerlo (te sugerimos tener tu CV en documento de Word abierto para copiar y pegar la información en los campos correspondientes).
                        </p>
                        <p>
                             tienes dudas puedes consultar en <a href="#">www.facebook.com/IMPULSA.UNICACH</a> los álbumes de fotos donde te decimos paso a paso como ingresar tu CV o bien, consulta los tutoriales que hemos realizado para tal fin en <a href="#">www.youtube.com/ImpulsaBT.</a> Si aún tienes dudas, escríbenos a <a href="#">bolsadetrabajo@unicach.mx</a>
                        </p>
                        <h4>¿Por qué tengo que enviar mi  Curriculum por estos dos medios?</h4>
                        <p>
                            Si no tienes tu Curriculum en la base de datos, las empresas o instituciones no podrán contactarte para sus vacantes.
                        </p>
                        <p>
                            También es importante para nosotros tenerlo en la base de datos porque de esta manera podemos llamarte para reclutamientos especiales.
                        </p>
                        <h4>¿Esta bolsa de trabajo  sólo es para alumnos y ex alumnos de la UNICACH?</h4>
                        <p>
                            Los profesionistas de la UNICACH son nuestra prioridad, sin embargo, también atendemos al resto de la comunidad unicachense como maestros, asesores, administrativos y personal  general, de profesiones y escolaridades diversas.  De ahí que no limitamos nuestros perfiles para publicar vacantes.
                        </p>
                        <h4>¿Esta bolsa de trabajo es para emplearse dentro de la UNICACH?</h4>
                        <p>
                            De momento no atendemos bolsa de trabajo interna, si estás interesado en alguna vacante como docente, dirígete a la dirección de carrera donde buscas emplearte. En el directorio de la página de la UNICACH vienen teléfonos, ubicación y nombre del responsable a quién tendrías que dirigirte.
                        </p>
                        <h4>¿Qué sucede después de que envío mi curriculum?</h4>
                        <p>
                            Lo registramos en nuestra base de datos, cuando una empresa  nos pide un perfil se envía la terna correspondiente de currícula o preferentemente, alumnos o egresados que ya han sido evaluados por Impulsa.
                        </p>
                        <h4>¿Para qué sirven las pruebas psicométricas que aplicamos en Impulsa?</h4>
                        <p>
                            En Impulsa, trabajamos con un esquema de competencias laborales, y  a través de pruebas psicométricas, entrevistas y/o dinámicas, evaluamos tu potencial, fortalezas y áreas de oportunidad (puntos de mejora).  Integramos tu perfil psicotécnico y con él, podemos empatar tus requerimientos con los de empresa para la cual potencialmente trabajarías.
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