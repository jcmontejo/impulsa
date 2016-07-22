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
          <th>Posgrado</th>
          <th>Institución de posgrado</th>
          <th>Periodo</th>
          <th>Carrera universitaria</th>
          <th>Institución universitaria</th>
          <th>Periodo</th>
          <th>Area de conocimiento en bachillerato</th>
          <th>Institución de bachillerato</th>
          <th>Periodo</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($academic as $aca)
        @can('read-academic', $aca)
          <tr>
            <td>{{ $aca->name_posgrado }}</td>
            <td>{{ $aca->school_posgrado }}</td>
            <td>{{ $aca->period_posgrado }}</td>
            <td>{{ $aca->name_university }}</td>
            <td>{{ $aca->school_university }}</td>
            <td>{{ $aca->period_university }}</td>
            <td>{{ $aca->name_preparotory }}</td>
            <td>{{ $aca->school_preparatory }}</td>
            <td>{{ $aca->period_preparatory }}</td>
            <td>
                {{ link_to_route('academic.edit', $title = 'Editar', $parameter = $aca, $attributes = ['class' => 'btn btn-primary']) }}
            </td>
          </tr>
        @endcan
      @endforeach
      </tbody>
    </table>
    </div>
      </div>
      

         
@endsection
