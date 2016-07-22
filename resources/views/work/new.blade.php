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
              <h3 class="box-title">Datos laborales</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!--<form class="form-horizontal">-->
            {!! Form::open(['route' => 'work.store', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre de la empresa</label>

                  <div class="col-sm-10">
                    <input type="text" name="company" class="form-control" id="inputEmail3" placeholder="Nombre de la empresa">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dirección de la empresa</label>

                  <div class="col-sm-10">
                    <input type="text" name="address" class="form-control" id="inputEmail3" placeholder="Dirección de la empresa">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Telefono de la empresa</label>

                  <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control" id="inputEmail3" placeholder="Telefono de la empresa">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Ciudad</label>

                  <div class="col-sm-10">
                    <select  id="ddCity" class="form-control" name="city" data-msg-required="Debes seleccionar una ciudad">
                    <option selected="selected"  value="0">Selecciona una ciudad</option>
                    
                    <option value="Acacoyagua">Acacoyagua </option>
                    <option value="Acala ">Acala</option>
                    <option value="Acapetahua">Acapetahua</option>
                    <option value="Aldama">Aldama</option>
                    <option value="Altamirano ">Altamirano  </option>
                    <option value="Amatán  ">Amatán </option>
                    <option value="Amatenango de la Frontera">Amatenango de la Frontera</option>
                    <option value="Amatenango del Valle">Amatenango del Valle</option>
                    <option value="Angel Albino Corzo">Angel Albino Corzo</option>
                    <option value="Arriaga">Arriaga</option>
                    <option value="Bejucal de Ocampo">Bejucal de Ocampo</option>
                    <option value="Bella Vista">Bella Vista</option>
                    <option value="Benemérito de las Américas">Benemérito de las Américas</option>
                    <option value="Berriozábal">Berriozábal</option>
                    <option value="Bochil">Bochil</option>
                    <option value="Cacahoatán">Cacahoatán</option>
                    <option value="Catazajá">Catazajá</option>
                    <option value="Chalchihuitán"></option>
                    <option value="Chamula ">Chamula </option>
                    <option value="Chanal">Chanal</option>
                    <option value="Chapultenango">Chapultenango</option>
                    <option value="Chenalhó ">Chenalhó </option>
                    <option value="Chiapa de Corzo">Chiapa de Corzo</option>
                    <option value="Chiapilla">Chiapilla</option>
                    <option value="Chicoasén">Chicoasén</option>
                    <option value="Chicomuselo ">Chicomuselo </option>
                    <option value="Chilón">Chilón</option>
                    <option value="Cintalapa">Cintalapa</option>
                    <option value="Coapilla">Coapilla</option>
                    <option value="Comitán de Domínguez">Comitán de Domínguez</option>
                    <option value="Copainalá">Copainalá</option>
                    <option value="El Bosque">El Bosque</option>
                    <option value="El Porvenir">El Porvenir</option>
                    <option value="Escuintla">Escuintla</option>
                    <option value="Francisco León">Francisco León</option>
                    <option value="Frontera Comalapa">Frontera Comalapa</option>
                    <option value="Frontera Hidalgo">Frontera Hidalgo</option>
                    <option value="Huehuetán">Huehuetán</option>
                    <option value="Huitiupán">Huitiupán</option>
                    <option value="Huixtán">uixtán</option>
                    <option value="Huixtla">Huixtla</option>
                    <option value="Jiquipilas">Jiquipilas</option>
                    <option value="La Concordia ">La Concordia </option>
                    <option value="La Trinitaria">La Trinitaria</option>
                    <option value="Las Margaritas">Las Margaritas </option>
                    <option value="Mazapa de Madero">Mazapa de Madero</option>
                    <option value="Mazatán">Mazatán</option>
                    <option value="Motozintla">Motozintla</option>
                    <option value="Ocosingo">Ocosingo</option>
                    <option value="Ocozocoautla de Espinosa">Ocozocoautla de Espinosa</option>
                    <option value="Pijijiapan">Pijijiapan</option>
                    <option value="San Cristóbal de las Casas">San Cristóbal de las Casas</option>
                    <option value="San Fernando">San Fernando</option>
                    <option value="Simojovel">Simojovel</option>
                    <option value="Suchiapa">Suchiapa</option>
                    <option value="Tapachula">Tapachula</option>
                    <option value="Tapilula">Tapilula</option>
                    <option value="Teopisca">Teopisca</option>
                    <option value="Tonalá">Tonalá</option>
                    <option value="Tuxtla Chico">Tuxtla Chico</option>
                    <option selected="selected" value="Tuxtla Gutiérrez">Tuxtla Gutiérrez </option>
                    <option value="Villa Comaltitlán">Villa Comaltitlán</option>
                    <option value="Villaflores">Villaflores</option>
                    <option value="Yajalón">Yajalón</option>
                    <option value="Zinacantán">Zinacantán</option>

                    <option value=" Cd de México"> Cd de México</option>
                    <option value="Guadalajara">Guadalajara</option>
                    <option value="Monterrey">Monterrey</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Acapulco">Acapulco</option>
                    <option value="Cancún">Cancún</option>
                    <option value="Guanajuato">Guanajuato</option>
                    <option value="León">León</option>
                    <option value="Zacatecas">Zacatecas</option>
                    <option value="Tijuana">Tijuana</option>
                    <option value="Otra">Otra</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Giro de la empresa</label>

                    <div class="col-sm-10">
                      <input type="text" name="turn" class="form-control" id="inputEmail3" placeholder="Giro de la empresa">
                    </div>
                  </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Puesto ocupado</label>

                  <div class="col-sm-10">
                    <input type="text" name="position" class="form-control" id="inputEmail3" placeholder="Puesto ocupado">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre del jefe inmediato</label>

                  <div class="col-sm-10">
                    <input type="text" name="name_boss" class="form-control" id="inputEmail3" placeholder="Nombre del jefe inmediato">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Area de desempeño</label>

                  <div class="col-sm-10">
                    <input type="text" name="area" class="form-control" id="inputEmail3" placeholder="Area">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Periodo de trabajo</label>

                  <div class="col-sm-10">
                    <input type="text" name="period" class="form-control" id="inputEmail3" placeholder="Año - Año">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Descripción de lo que desempeño</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" name="description" rows="5"></textarea>
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
