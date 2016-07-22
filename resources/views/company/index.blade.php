@extends('layouts.app2')
@section('main-content')
<div class="container">
	@include('alerts.errors')
	@include('alerts.success')
	<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"><strong>Informacion de Contacto</strong></h3>
				<div class="box-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>
									Nombre Comercial
								</th>
								<th>Razon Social</th>
								<th>RFC</th>
								<th>Giro</th>
								<th>Nombre del Dueño</th>
								<th>Nombre del Contacto</th>	
								<th>Cargo</th>
								<th>Horario de Localización</th>
								<th>Tel.Oficina</th>
								<th>Celular</th>
								<th>Correo Electrónico</th>
								<th>Página Web</th>
								<th>Domicilio Comercial</th>								
							</tr>
						</thead>
						<tbody>
						@foreach($companies as $company)
							@can('owner',$company)
								<tr>
									<td>{{$company->tradename}}</td>
									<td>{{$company->business_name}}</td>
									<td>{{$company->rfc}}</td>
									<td>{{$company->turn}}</td>
									<td>{{$company->manager}}</td>
									<td>{{$company->contact}}</td>
									<td>{{$company->position}}</td>
									<td>{{$company->location}}</td>
									<td>{{$company->phone}}</td>
									<td>{{$company->cell}}</td>
									<td>{{$company->email}}</td>
									<td>{{$company->web}}</td>
									<td>{{$company->business_address}}</td>	
								</tr>
							@endcan
						@endforeach
						</tbody>
				</table>
				</div>
			</div>
		</div>		
	
		<div class="box-header">
			<h3 class="box-title"><strong>Domicilio Fiscal</strong></h3>
				<div class="box-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>Calle y Domicilio</th>								
								<th>Colonia</th>
								<th>Ciudad</th>
								<th>Codigo Postal</th>
								<th>Teléfono</th>
								<th>País</th>
								<th>Estado</th>		
								<th>Acción</th>						
							</tr>
						</thead>
						<tbody>
						@foreach($companies as $company)
							@can('owner',$company)
								<tr>
									<td>{{$company->street}}</td>
									<td>{{$company->colony}}</td>
									<td>{{$company->city}}</td>
									<td>{{$company->postal}}</td>
									<td>{{$company->telephone}}</td>
									<td>{{$company->country}}</td>
									<td>{{$company->state}}</td>	
									<td>{{link_to_route('company.edit',$title='Editar',$parameters= $company, $attributes =['class'=> 'btn btn-primary']) }}</td>								
								</tr>
							@endcan
						@endforeach
						</tbody>
				</table>
				</div>
			</div>
		</div>
		<!--<div class="box-header">			
				<div class="box-body">
					<table class="table table-bordered table-striped table-hover">						
						<tbody>
						@foreach($companies as $company)
							@can('owner',$company)
								<tr>
									
									<td>{{link_to_route('company.edit',$title='Editar',$parameters= $company, $attributes =['class'=> 'btn btn-primary']) }}</td>

								</tr>
							@endcan
						@endforeach
						</tbody>
				</table>
			</div>
		</div>-->
				
	</div>
	
	
	
</div>
@endsection

