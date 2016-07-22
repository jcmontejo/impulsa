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
              <h3 class="box-title">Encuesta Impulsa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!--<form class="form-horizontal">-->
            {!! Form::open(['route' => 'poll.store', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Servicio por el cual acudió a la oficina de Impulsa, Bolsa de Trabajo</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" name="q1" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">El servicio por el cual acudió a Impulsa fue resuelto de manera</label>

                  <div class="col-sm-10">
                    <select name="q2" id="" class="form-control">
                      <option value="Malo">Malo</option>
                      <option value="Regular">Regular</option>
                      <option value="Bueno">Bueno</option>
                      <option value="Muy bueno">Muy bueno</option>
                      <option value="Excelente">Excelente</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">La información facilitada por el personal de Impulsa fue</label>

                  <div class="col-sm-10">
                    <select name="q3" id="" class="form-control">
                      <option value="Malo">Malo</option>
                      <option value="Regular">Regular</option>
                      <option value="Bueno">Bueno</option>
                      <option value="Muy bueno">Muy bueno</option>
                      <option value="Excelente">Excelente</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">El servicio brindado por Impulsa fue</label>

                  <div class="col-sm-10">
                    <select name="q4" id="" class="form-control">
                      <option value="Malo">Malo</option>
                      <option value="Regular">Regular</option>
                      <option value="Bueno">Bueno</option>
                      <option value="Muy bueno">Muy bueno</option>
                      <option value="Excelente">Excelente</option>
                    </select>
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Servicios que le gustaría recibir de Impulsa</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" name="q5" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Agradecemos cualquier comentario adicional</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" name="q6" rows="5"></textarea>
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
