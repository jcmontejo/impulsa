@extends('layouts.app3')

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
        <li class="active">Panel Administrador</li>
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
          <th>Nombre Comercial</th>
          <th>Razon Social</th>
          <th>RFC</th>
          <th>Giro</th>
          <th>Nombre del Dueño</th>
          <th>Nombre del Contacto</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($companies as $company)
          <tr>
           <td>{{$company->tradename}}</td>
           <td>{{$company->business_name}}</td>
           <td>{{$company->rfc}}</td>
           <td>{{$company->turn}}</td>
           <td>{{$company->manager}}</td>
           <td>{{$company->contact}}</td>
           <td>{{$company->city }}</td>
         
          </tr>
      @endforeach
      </tbody>
    </table>
    </div>
      </div>
      

         
@endsection
