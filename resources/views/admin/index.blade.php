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
    <div class="container">
      @include('alerts.success')
      
    </div>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Nuevos trabajos</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Visitas diarias</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>347</h3>

              <p>Usuarios registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Empresas empleadoras</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <hr>
      <!-- /.row -->
      <div class="row">
      <div class="container">
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
                <th>Acción</th>     
              </tr>
            </thead>
            <tbody>
            
            @foreach($publications as $publication):
             
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
                   <a href="<?php echo url('admin-postulate/id', [$publication->id]); ?>">
                        <button class="btn btn-success">Ver Postulados</button>
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
