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
									Titulo de Puesto
								</th>
								<th>Vacantes</th>
								<th>Estudios</th>
								<th>Sexo</th>
								<th>Tipo de Empleo</th>
								<th>Días a Elaborar</th>	
								<th>Edad</th>		
								<th>Requisitos</th>		
								<th>Empresa</th>	
								<th>Acciones</th>		
							</tr>
						</thead>
						<tbody>
						@foreach($publications as $publication)
							@can('owner', $publication)
								<tr>
									<td>{{$publication->job}}</td>
									<td>{{$publication->vacancies}}</td>
									<td>{{$publication->studies}}</td>
									<td>{{$publication->sex}}</td>
									<td>{{$publication->job_type}}</td>
									<td>{{$publication->days}}</td>
									<td>{{$publication->age}}</td>
									<td>{{$publication->requirements}}</td>
									<td>{{$publication->company}}</td>
									<td>
										{{link_to_route('publication.edit', $title = 'Editar', $parameter = $publication, $attributes =['class'=>'btn btn-primary'])}}<br><br>

									
									@include('company.delete')<br>
									<a href="<?php echo url('postulate/id', [$publication->id]); ?>">
           							<button class="btn btn-success">Ver Postulados</button>
									<!--{{link_to_route('publication.show', $title = 'Ver Postulados', $parameter = $publication, $attributes =['class'=>'btn btn-success'])}}--></td>
								</tr>
							@endcan
						@endforeach
						</tbody>
				</table>
			</div>
		</div>		
		
				
	</div>
			
</div>

@endsection