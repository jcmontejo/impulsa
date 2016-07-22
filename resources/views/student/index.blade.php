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
    <div class="table-responsive">
    <table class="table">
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
          <th>Titúlo</th>
          <th>Descripción</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($student as $std)
        @can('owner', $std)
          <tr>
            <td>{{ $std->name }}</td>
            <td>{{ $std->last_name }}</td>
            <td>{{ $std->birthdate }}</td>
            <td>{{ $std->place }}</td>
            <td>{{ $std->sex }}</td>
            <td>{{ $std->email }}</td>
            <td>{{ $std->civil_status }}</td>
            <td>{{ $std->phone }}</td>
            <td>{{ $std->address}}</td>
            <td>{{ $std->post_code }}</td>
            <td>{{ $std->country }}</td>
            <td>{{ $std->state }}</td>
            <td>{{ $std->city }}</td>
            <td>{{ $std->title }}</td>
            <td>{{ $std->description }}</td>
            <td>
                {{ link_to_route('student.edit', $title = 'Editar', $parameter = $std, $attributes = ['class' => 'btn btn-primary']) }}
            </td>
          </tr>
        @endcan
      @endforeach
      </tbody>
    </table>
    </div>
      </div>
      

         
@endsection
