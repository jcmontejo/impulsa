@extends('layouts.app2')

@section('main-content')
<div class="container">
	@include('alerts.errors')
	@include('alerts.success')
	<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><strong>Publicaciones de Vacantes</strong></h3>
				<div class="box-body">
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>
									 id Alumno
								</th>
								<th>Posición Requerida</th>
								<th>Empresa</th>	
								<th>Acción</th>								
							</tr>
						</thead>
						<tbody>
						@foreach($applies as $applies)
							
								<tr>
									<td>{{$applies->user_id}}</td>
									<td>{{$applies->position}}</td>
									<td>{{$applies->company}}</td>	
									<td><a href="<?php echo url('view_postulate/id', [$applies->user_id]); ?>">
           							<button class="btn btn-success">Ver Datos del Postulado</button></td>							
									
								</tr>
						
						@endforeach
						</tbody>
				</table>
			</div>
		</div>		
		
				
	</div>
			
</div>

@endsection