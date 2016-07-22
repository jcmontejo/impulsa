@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="col-lg-12">
					<div class="page-header">
  						<h1>Directorio</h1>
				  		
                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_content">

                                    <div class="row">
 
                                        <div class="clearfix">
                                            <div>
                                            <div class="well profile_view">
                                                <div class="col-sm-12">
                                                    <div class="left col-xs-7">
                                                        <h2>Lic. José Ignacio Zepeda Pineda</h2>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-phone"></i>  61 70 400 | ext. 4016 </li>
                                                            <li><i class="fa fa-envelope"></i> joseignacio.zepeda@unicach.mx </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="clearfix">
                                            <div>
                                            <div class="well profile_view">
                                                <div class="col-sm-12">
                                                    <div class="left col-xs-7">
                                                        <h2>Lic. Mónica Estrada</h2>
                                                        <p><strong>Puesto: </strong> Coordinador de Certificación de Procesos.</p>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-phone"></i> 61 70 400 | ext. 4017 </li>
                                                            <li><i class="fa fa-envelope"></i> monica.estrada@unicach.mx
</li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="clearfix">
                                            <div>
                                            <div class="well profile_view">
                                                <div class="col-sm-12">
                                                    <div class="left col-xs-7">
                                                        <h2>Lic. Itzáe Castillo Toledo</h2>
                                                        <p><strong>Puesto: </strong> Responsable de programa Impulsa. </p>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-phone"></i> 61 70 400 | ext. 4018</li>
                                                            <li><i class="fa fa-envelope"></i> itzae.castillo@unicach.mx</li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="clearfix">
                                            <div>
                                            <div class="well profile_view">
                                                <div class="col-sm-12">
                                                    <div class="left col-xs-7">
                                                        <h2>Lic. Betsy Merchant Salazar</h2>
                                                        <p><strong>Puesto: </strong>Responsable de programa Genera. </p>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-phone"></i> 61 70 400 | ext. 4019 </li>
                                                            <li><i class="fa fa-envelope"></i>  betsy.merchant@unicach.mx
</li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>


                                        

                                  
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
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
                                <li><{{ Html::link('cv/modeloCV2.pdf', 'Ver modelo de cv', array('target' => '_blank'))}}
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