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
      @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @include('alerts.success')

      <hr>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
           <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Editar datos academicos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!--<form class="form-horizontal">-->
            {!! Form::model($academic, ['route' => ['academic.update', $academic], 'class' => 'form-horizontal', 'method' => 'PUT']) !!}
             <div class="box-body">
              <div class="box-header with-border">
                <h4 class="box-title">Posgrado</h4>
              </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre de Posgrado</label>

                  <div class="col-sm-10">
                    <input type="text" name="name_posgrado" class="form-control" id="inputEmail3" placeholder="Nombre del posgrado en caso de tener">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre de la institución</label>

                  <div class="col-sm-10">
                    <input type="text" name="school_posgrado" class="form-control" id="inputEmail3" placeholder="Nombre de la escuela de posgrado">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Periodo de Posgrado</label>

                  <div class="col-sm-10">
                    <input type="text" name="period_posgrado" class="form-control" id="inputEmail3" placeholder="2010 - 2016">
                  </div>
                </div>
                <div class="box-header with-border">
                  <h4 class="box-title">Carrera universitaria</h4>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre de carrera Universitaria</label>

                  <div class="col-sm-10">
                    <input type="text" name="name_university" class="form-control" id="inputEmail3" placeholder="Nombre de la carrera universitaria">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre de la institución</label>

                  <div class="col-sm-10">
                    <input type="text" name="school_university" class="form-control" id="inputEmail3" placeholder="Nombre de la escuela de posgrado">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Periodo de universidad</label>

                  <div class="col-sm-10">
                    <input type="text" name="period_university" class="form-control" id="inputEmail3" placeholder="2010 - 2016">
                  </div>
                </div>
                <div class="box-header with-border">
                  <h4 class="box-title">Bachillerato</h4>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre del área de conocimiento</label>

                  <div class="col-sm-10">
                    <input type="text" name="name_preparatory" class="form-control" id="inputEmail3" placeholder="Nombre del área de conocimiento">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre de la institución</label>

                  <div class="col-sm-10">
                    <input type="text" name="school_preparatory" class="form-control" id="inputEmail3" placeholder="Nombre de la escuela de posgrado">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Periodo del bachillerato</label>

                  <div class="col-sm-10">
                    <input type="text" name="period_preparatory" class="form-control" id="inputEmail3" placeholder="2010 - 2016">
                  </div>
                </div>
                
                

                
                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
              <!-- /.box-footer -->
            <!--</form>-->
            {!! Form::close() !!}
          </div>
          <!-- /.box -->

        </div>
      </div>
      

         
@endsection
