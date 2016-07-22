@extends('layouts.app2')

@section('main-content')
@include('alerts.errors')
@include('alerts.success')
<div class="box box-primary">
	<div class="box-header">
			<h3 class="box-title"><strong>Encuesta de Calidad de Servicio</strong> <small>Historial</small></h3>
				<div class="box-body">
					<table class="table table-bordered table-striped table-hover">
						<thead>
						
							<tr>
								<th>Servicio solicitado a Impulsa, Bolsa de Trabajo para la vinculación de candidatos
								</th>
								<th>La atención brindada por Impulsa, Bolsa de Trabajo fue:</th>
								<th>El tiempo de respuesta  a su solicitud fue:</th>
								<th>La calidad en el servicio fue:</th>
								<th>¿Está satisfecho con el servicio recibido?</th>
								<th>Conoce los servicios que ofrece Impulsa, Bolsa de Trabajo</th>			
								<th>Sugerencias</th>
								<th>Agradecemos cualquier comentario adicional	</th>
												
							</tr>
						</thead>
						<tbody>
						@foreach($quality as $quality)
							@can('read-quality',$quality)
								<tr>
									<td>{{$quality->question1}}</td>
									<td>{{$quality->question2}}</td>
									<td>{{$quality->question3}}</td>
									<td>{{$quality->question4}}</td>
									<td>{{$quality->question5}}</td>
									<td>{{$quality->question6}}</td>
									<td>{{$quality->question7}}</td>
									<td>{{$quality->question8}}</td>
								</tr>
							@endcan
						@endforeach
						</tbody>
				</table>
			</div>
			<div class="box-header">			
				<div class="box-body">
					<table class="table table-bordered table-striped table-hover">						
						<tbody>
						@foreach($quality as $quality)
							@can('owner',$quality)
								<tr>									
									<td>{{link_to_route('quality.edit' , $title= 'Editar', $parameters= $quality, $attributes = ['class'=> 'btn btn-primary']) }}</td>
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