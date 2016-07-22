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
              <h3 class="box-title">Solo podras subir tú foto de perfil una sola ves, selecciona bien tú foto ya que se colocara en tú CV</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!--<form class="form-horizontal">-->
            {!! Form::open(['route' => 'profile.store', 'class' => 'form-horizontal', 'method' => 'POST', 'files' => 'true']) !!}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Nombre">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Imagen</label>

                  <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" id="inputEmail3" placeholder="Nombre">
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
