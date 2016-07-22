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
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Teléfono</th>
          <th>Rol</th>
          <th>Correo</th>
          <th>Status</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($users as $user)
        <?php 
          $id = $user->id;
         ?>
          <tr>
           <td>{{$user->name}}</td>
           <td>{{$user->last_name}}</td>
           <td>{{$user->phone}}</td>
           <td>{{$user->role}}</td>
           <td>{{$user->email}}</td>
           <td>{{$user->status}}</td>
           <td>
           <a href="<?php echo url('user/id', [$user->id]); ?>">
           <button class="btn btn-primary">Activar</button>
           </a>
           </td>
          </tr>
      @endforeach
      </tbody>
    </table>
    </div>
      </div>
      

         
@endsection
