@extends('layouts.app3')
@section('main-content')

<h1>Elaboracion de Evaluación de Potencial</h1>
<section class="content">
	<div class="row">
			<div class="col-md-12">
			<div class="box box-primary">
            <div class="box-header with-border">
			<div class="box-body"> 
  
			<h3 class="box-title">Resultados de batería de pruebas: </h3>
      {!! Form::open(['route' => 'evaluation.store','method'=>'POST'])!!}
      

			          <input type="hidden" name="id" value="">
                <div class="form-group"><br>
                  <label>Fecha</label>
                  <input type="Text" name="date" placeholder="dd/mm/aaaa" class="form-control">
                </div>   
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="Text" name="name"  class="form-control">
                </div>     
                <div class="form-group">
                  <label>Apellidos</label>
                  <input type="Text" name="last_name"  class="form-control">
                </div>   
                <div class="form-group">
                  <label>Carrera</label>
                  <input type="Text" name="carrer"  class="form-control">
                </div>   
                <div class="form-group">
                  <label>Institución</label>
                  <input type="Text" name="institution"  class="form-control">
                </div>
                <div class="form-group">
                  <label>Edad</label>
                  <input type="Text" name="age"  class="form-control">
                </div>                        

                 <div class="form-group">
                  <label for="exampleInputPassword1">Sexo</label>
                 <select id="ddIndustry" name="sex" class="form-control" data-msg-required="Debes seleccionar un sector">
						<option selected="selected" value="0">Elige uno</option>
						<option value="Masculino">Masculino</option>
						<option value="Femenino">Femenino</option>			

				</select>
				</div>
			
				 <div class="form-group">
                  <label for="exampleInputPassword1">Status:</label>
                 <select id="ddIndustry" name="status" class="form-control" data-msg-required="Debes seleccionar un sector">
						<option selected="selected" value="0">Seleccione una opción</option>
						<option value="Estudiante">Estudiante</option>
						<option value="Pasante">Pasante</option>
						<option value="Titulado">Titulado</option>
						<option value="Maestria">Maestría</option>
						<option value="Doctorado">Doctorado</option>					

				</select>
				</div>
							
				<div class="form-group">
                  <label >Dirección</label>
                  <input type="Text" name="address" class="form-control">
                </div>  
                <div class="form-group">
                  <label >Fecha de Nacimiento</label>
                  <input type="Text" name="birthdate" placeholder="dd/mm/aaaa" class="form-control">
                </div>    			
				<div class="form-group"> 
				  	<label for="exampleInputPassword1">Experiencia Laboral</label>
                 <select id="ddIndustry" name="experience" class="form-control" data-msg-required="Debes seleccionar un sector">
						<option selected="selected" value="0">Seleccione una opción</option>
						<option value="No">No</option>
						<option value="Si">Si</option>			
						</select>
				</div>  
				<div class="form-group">
                  <label >Teléfono</label>
                  <input type="Text" name="phone"  class="form-control">
       </div>  

       <div class="form-group">
                  <label >Correo</label>
                  <input type="Text" name="email"  class="form-control">
       </div>  
       <div class="form-group"> 
            <label for="exampleInputPassword1">Pruebas Aplicadas</label>
                 <select id="ddIndustry" name="testing" class="form-control" data-msg-required="Debes seleccionar un sector">
            <option selected="selected" value="0">Seleccione una opción</option>
            <option value="Zavic">Zavic</option>
            <option value=" HTP"> HTP</option>   
            <option value=" HTP"> HTP</option>    
            <option value="Autobiografía"> Autobiografía</option>  
            <option value="Terman">Terman</option>   
            <option value="Cleaver">Cleaver</option>    
            <option value="Machover">Machover</option>  
            <option value="10-10">10-10</option>   
            <option value="Kostick">Kostick</option>    
            <option value="20-20">20-20</option>  
            <option value="T.A.T">T.A.T</option>   
              
            </select>
        </div>          
               
                <div class="form-group">
                  <label>Zavic: Intereses y Valores</label>
                  <textarea class="form-control" name="zavic" rows="3" placeholder="Escribir ..."></textarea>
                </div>    
                <div class="form-group">
                  <label>HTP</label>
                  <textarea class="form-control" name="htp" rows="3" placeholder="Escribir ..."></textarea>
                </div>    
                <div class="form-group">
                  <label>Autobiografia</label>
                  <textarea class="form-control" name="autobiografia" rows="3" placeholder="Escribir ..."></textarea>
                </div>  
                <div class="form-group">
                  <label>Terman</label>
                  <textarea class="form-control" name="terman" rows="3" placeholder="Escribir ..."></textarea>
                </div>    
                <div class="form-group">
                  <label>Cleaver</label>
                  <textarea class="form-control" name="cleaver" rows="3" placeholder="Escribir ..."></textarea>
                </div>   
                <div class="form-group">
                  <label>Machover</label>
                  <textarea class="form-control" name="machover" rows="3" placeholder="Escribir ..."></textarea>                  
                </div>  
                <div class="form-group">
                  <label>10-10</label>
                  <textarea class="form-control" name="diez" rows="3" placeholder="Escribir ..."></textarea>
                </div>    
                <div class="form-group">
                  <label>Kostick</label>
                  <textarea class="form-control" name="kostickt" rows="3" placeholder="Escribir ..."></textarea>
                </div>   
                <div class="form-group">
                  <label>T.A.T</label>
                  <textarea class="form-control" name="tat" rows="3" placeholder="Escribir ..."></textarea>
                </div>   
                <div class="form-group">
                  <label>20-20</label>
                  <textarea class="form-control" name="veinte" rows="3" placeholder="Escribir ..."></textarea>
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
	</div>{!! Form::close() !!}  
	</section>
	
@endsection