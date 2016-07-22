@extends('layouts.app2')
@section('main-content')
@include('alerts.errors')

{!! Form ::open (['route'=>'notification.store','method'=>'POST']) !!}
<h1>Ingrese todos los datos.</h1>  
<section class="content">
	<div class="row">
	
			<div class="col-md-12">
			<div class="box box-primary">
            <div class="box-header with-border">
			<div class="box-body"> 
			<h3 class="box-title">Carta de Inserción</h3>
			
                <div class="form-group"><br>
                  <label>Nombre del Profesionista</label>
                  <input type="Text" name="professional" class="form-control">
                </div>                         

				 <div class="form-group">
                  <label for="exampleInputPassword1">Carrera</label>
                 <select id="ddIndustry" name="carrer" class="form-control" data-msg-required="Debes seleccionar un sector">
						<option selected="selected" value="0">Seleccione una opción</option>
						<option value="	Ing. Topográfica e Hidrología">Ing. Topográfica e Hidrología</option>
						<option value="Ing. Agroforestal">Ing. Agroforestal</option>
						<option value="	Ing. Ambiental">Ing. Ambiental</option>
						<option value="Ing. en Seguridad Industrial y Ecología">Ing. en Seguridad Industrial y Ecología</option>
						<option value="	Ing. Ecológica">Ing. Ecológica</option>		
						<option value="	Ing. Geomática">Ing. Geomática</option>	
						<option value="	Lic. en Ciencias de la Tierra">	Lic. en Ciencias de la Tierra</option>
						<option value="	Ing. en Energías Renovables">	Ing. en Energías Renovables</option>
						<option value="Lic. en Psicología">Lic. en Psicología</option>	
						<option value="	Lic. en Desarrollo Humano">	Lic. en Desarrollo Humano</option>	
						<option value="Lic. en Biología">Lic. en Biología</option>	
						<option value="Lic. en Biología Marina y Manejo de Cuencas">Lic. en Biología Marina y Manejo de Cuencas</option>	
						<option value="	Lic. en Nutrición">	Lic. en Nutrición</option>	
						<option value="	Lic. en Gastronomía">Lic. en Gastronomía</option>	
						<option value="	Ing. en Agroalimentos">	Ing. en Agroalimentos</option>	
						<option value="	Lic. en Música">Lic. en Música</option>	
						<option value="	Lic. en Artes Visuales">Lic. en Artes Visuales</option>
						<option value="Lic. en Jazz y Música Popular">Lic. en Jazz y Música Popular</option>
						<option value="	Lic. en Gestión y Promoción de las Artes">Lic. en Gestión y Promoción de las Artes</option>
						<option value="	Lic. en Cirujano Dentista">	Lic. en Cirujano Dentista</option>
						<option value="	Lic. en Enfermería">Lic. en Enfermería</option>
						<option value="	Lic. en Fisioterapia">Lic. en Fisioterapia</option>					
						<option value="	Lic. en Historia">Lic. en Historia</option>
						<option value="	Lic. en Lenguas con Enfoque Turístico">	Lic. en Lenguas con Enfoque Turístico</option>
						<option value="	Lic. en Arqueología">Lic. en Arqueología</option>
						<option value="Lic. en Lenguas con Enfoque Turístico">Lic. en Lenguas con Enfoque Turístico</option>
						<option value="	Lic. en Turismo Sustentable">Lic. en Turismo Sustentable</option>
						<option value="Lic. en Gestión y Desarrollo de Negocios">Lic. en Gestión y Desarrollo de Negocios</option>
						<option value="Lic. en Comercio Exterior">Lic. en Comercio Exterior</option>
						<option value="	Lic. en Sistemas de Información Administrativa">Lic. en Sistemas de Información Administrativa</option>


				</select><br>
				<!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Fecha en que reclutamiento:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text"  placeholder="día/mes/año" name="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
             

              
					 
				        
               
               </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" name="limpiar" class="btn btn-danger">Cancelar</button>  
              </div>

              </div>
		</div>
	</div>
	</div>
	</div>
		</div>
	</div>
	</div>
	</section>
	{!! Form::close() !!}	
@endsection