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
									Fecha
								</th>
								<th>Nombre</th>
								<th>Apellidos</th>
								<th>Sexo</th>
								<th>Carrera</th>
								<th>Institución</th>	
								<th>Edad</th>		
								<th>Edad</th>		
								<th>Sexo</th>	
									
							</tr>
						</thead>
						<tbody>
						@foreach($evaluations as $evaluation)
						
								<tr>
									<td>{{$evaluation->date}}</td>
									<td>{{$evaluation->name}}</td>
									<td>{{$evaluation->last_name}}</td>
									<td>{{$evaluation->carrer}}</td>
									<td>{{$evaluation->intitution}}</td>
									<td>{{$evaluation->age}}</td>
									<td>{{$evaluation->sex}}</td>
									
									
								</tr>
							
						@endforeach
						</tbody>
				</table>
			</div>
		</div>		
		
				
	</div>
			
</div>

@endsection