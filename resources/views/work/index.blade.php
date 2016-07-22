@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<section class="content-header">
      <h1>
        Impulsa
        <small>bolsa de trabajo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Panel Alumno</li>
      </ol>
    </section>
        <!-- Main content -->
    <section class="content">
     
      <hr>
      <!-- /.row -->
      <div class="row">
        @include('alerts.success')
    <table class="table">
      <thead>
        <tr>
          <th>Nombre de la empresa</th>
          <th>Dirección de la empresa</th>
          <th>Telefono</th>
          <th>Giro de la empresa</th>
          <th>Puesto ocupado</th>
          <th>Área</th>
          <th>Descripción</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($works as $work)
        @can('read-work', $work)
          <tr>
            <td>{{ $work->company }}</td>
            <td>{{ $work->address}}</td>
            <td>{{ $work->phone}}</td>
            <td>{{ $work->turn }}</td>
            <td>{{ $work->position }}</td>
            <td>{{ $work->area }}</td>
            <td>{{ $work->description }}</td>
            <td>
              <div class="btn-group-vertical">
                {{ link_to_route('work.edit', $title = 'Editar', $parameter = $work, $attributes = ['class' => 'btn btn-primary']) }}
                @include('work.delete')
              </div>
            </td>
          </tr>
        @endcan
      @endforeach
      </tbody>
    </table>
      </div>
      

         
@endsection
