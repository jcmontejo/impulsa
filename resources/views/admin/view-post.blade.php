@extends('layouts.app3')

@section('main-content')
<div class="container">
	@include('alerts.errors')
	@include('alerts.success')
	<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><strong>Publicaciones de Vacantes</strong></h3>
				<div class="box-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								  <th>Nombre</th>
						          <th>Apellidos</th>
						          <th>Fecha de nacimiento</th>
						          <th>Lugar de nacimiento</th>
						          <th>Sexo</th>
						          <th>Correo</th>
						          <th>Estado civil</th>
						          <th>Telefono</th>
						          <th>Dirección</th>
						          <th>Codigo postal</th>
						          <th>Pais</th>
						          <th>Estado</th>
						          <th>Ciudad</th>	
						          <th>Acciones</th>					                	
								  							
							</tr>
						</thead>
						<tbody>
						@foreach($post as $post)
							
								<tr>
									<td>{{ $post->name }}</td>
						            <td>{{ $post->last_name }}</td>
						            <td>{{ $post->birthdate }}</td>
						            <td>{{ $post->place }}</td>
						            <td>{{ $post->sex }}</td>
						            <td>{{ $post->email }}</td>
						            <td>{{ $post->civil_status }}</td>
						            <td>{{ $post->phone }}</td>
						            <td>{{ $post->address}}</td>
						            <td>{{ $post->post_code }}</td>
						            <td>{{ $post->country }}</td>
						            <td>{{ $post->state }}</td>	
						            <td>{{ $post->city }}</td>	
									<td><div class="btn-group-vertical">
										<a href="<?php echo url('curriculum/id', [$post->user_id]); ?>">
           							<button class="btn btn-danger">Ver CV</button><br><br>

           							<!--<a href="<?php echo url('evaluation/id', [$post->user_id]); ?>">
           							<button class="btn btn-primary">Realizar Evaluación</button>-->
									</div>
           							</td>	

									
								</tr>
						
						@endforeach
						</tbody>
				</table>
				</div>
			</div>
		</div>		
		
				
	</div>
			
</div>

@endsection