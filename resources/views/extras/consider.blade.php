@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="col-lg-12">
					<div class="page-header">
  						<h1>Recomendaciones de Seguridad en la Búsqueda de Empleo</h1>
                        <hr>
				  		<p class="lead">
				  			Desconfía de toda empresa que te pida dinero por adelantado.  Las compañías éticas se hacen responsables de los gastos que implican tu contratación.
				  		</p>
				  		<p class="lead">
				  			Si te llaman por  teléfono y  te piden entrevistarte en ese momento, solicita el número telefónico de la empresa y la extensión de la persona para que te comuniques directamente. A partir de la reacción del solicitante podrás darte cuenta si se trata de una oferta real o no.
				  		</p>
				  		<p class="lead">
				  			Te recomendamos no divulgar  información personal como descripción física, dirección, cuentas bancarias, tarjetas de crédito que utilizas, montos de crédito.  Esta no es información que forme parte de un proceso de contratación. No pongas en riesgo a tu familia al incluir referencias personales.
				  		</p>
				  		<p class="lead">
				  			Estos fraudes virtuales se pueden denunciar ante el ministerio público, así como en la siguiente dirección de correo: <a href="#">delitocibernético_pf@ssp.gob.mx.</a>
				  		</p>
                        <p class="lead">
                            Las cuentas bancarias a las que solicitan hacer los depósitos pueden ser denunciadas a los bancos correspondientes. Llama y pide por el departamento de "prevención de fraudes". TODOS los bancos cuentan con este departamento.
                        </p>
                        <p class="lead">
                            <code>¡No te dejes engañar!</code>, notifica cualquier irregularidad que veas en nuestro sitio al correo <a href="#">bolsadetrabajo@unicach.mx.</a>
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