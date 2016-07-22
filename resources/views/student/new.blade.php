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
              <h3 class="box-title">Datos personales</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!--<form class="form-horizontal">-->
            {!! Form::open(['route' => 'student.store', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Nombre">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Apellidos</label>

                  <div class="col-sm-10">
                    <input type="text" name="last_name" class="form-control" id="inputEmail3" placeholder="Apellidos">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Fecha de nacimiento</label>

                  <div class="col-sm-10">
                    <input type="date" name="birthdate" class="form-control" id="inputEmail3" placeholder="">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Lugar de nacimiento</label>

                  <div class="col-sm-10">
                    <input type="text" name="place" class="form-control" id="inputEmail3" placeholder="Lugar de nacimiento">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sexo</label>

                  <div class="col-sm-10">
                    <select name="sex" id="" class="form-control">
                      <option selected="selected" value="0">Selecciona tú sexo</option>
                      <option value="Hombre">H</option>
                      <option value="Mujer">M</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Correo electrónico</label>

                  <div class="col-sm-10">
                    <input type="mail" name="email" class="form-control" id="inputEmail3" placeholder="Introduce tú correo">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Estado civil</label>

                  <div class="col-sm-10">
                    <select name="civil_status" id="" class="form-control">
                      <option value="Soltero(a)">Soltero(a)</option>
                      <option value="Casado(a)">Casado(a)</option>
                      <option value="Separado(a)/Divorciado(a)">Separado(a)/Divorciado(a)</option>
                      <option value="Viudo(a)">Viudo(a)</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Teléfono</label>

                  <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control" id="inputEmail3" placeholder="Teléfono">
                  </div>
                </div>
                <!--Residence-->
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dirección</label>

                  <div class="col-sm-10">
                    <input type="text" name="address" class="form-control" id="inputEmail3" placeholder="Dirección">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Código postal</label>

                  <div class="col-sm-10">
                    <input type="text" name="post_code" class="form-control" id="inputEmail3" placeholder="Código postal">
                  </div>
                </div>
               

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pais</label>

                  <div class="col-sm-10">
                      <select  id="ddCountry" name="country" class="form-control" data-msg-required="Debes seleccionar un país">
                      <option value="0">Selecciona un pa&#237;s</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Bolivia">Bolivia</option>
                      <option value="Canada">Canada</option>
                      <option value="Chile">Chile</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Costa Rica">Costa Rica</option>
                      <option value="Cuba">Cuba</option>
                      <option value="Ecuador">Ecuador</option>
                      <option value="El Salvador">El Salvador</option>
                      <option value="España">Espa&#241;a</option>
                      <option value="EUA">EUA</option>
                      <option value="Guatemala">Guatemala</option>
                      <option value="Honduras">Honduras</option>
                      <option selected="selected" value="México">M&#233;xico</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Estado</label>

                  <div class="col-sm-10">
                    <select name="state" id="" class="form-control">
                      <option value="D.F">Distrito Federal</option>
                      <option value="Aguascalientes">Aguascalientes</option>
                      <option value="Baja California">Baja California</option>
                      <option value="Baja California Sur">Baja California Sur</option>
                      <option value="Campeche">Campeche</option>
                      <option value="Coahuila">Coahuila</option>
                      <option value="Colima">Colima</option>
                      <option selected="selected" value="Chiapas">Chiapas</option>
                      <option value="Chihuahua">Chihuahua</option>
                      <option value="Durango">Durango</option>
                      <option value="Guanajuato">Guanajuato</option>
                      <option value="Guerrero">Guerrero</option>
                      <option value="Hidalgo">Hidalgo</option>
                      <option value="Jalisco">Jalisco</option>
                      <option value="Estado de México">Estado de M&#233;xico</option>
                      <option value="Michoacan">Michoac&#225;n</option>
                      <option value="Morelos">Morelos</option>
                      <option value="Nayarit">Nayarit</option>
                      <option value="Nuevo Le&#243;n">Nuevo Le&#243;n</option>
                      <option value="Oaxaca">Oaxaca</option>
                      <option value="Puabla">Puebla</option>
                      <option value="Quer&#233;taro">Quer&#233;taro</option>
                      <option value="Quintana Roo">Quintana Roo</option>
                      <option value="San Luis Potos&#237;">San Luis Potos&#237;</option>
                      <option value="Sinaloa">Sinaloa</option>
                      <option value="Sonora">Sonora</option>
                      <option value="Tabasco">Tabasco</option>
                      <option value="Tamaulipas">Tamaulipas</option>
                      <option value="Tlaxcala">Tlaxcala</option>
                      <option value="Veracruz">Veracruz</option>
                      <option value="Yucat&#225;n">Yucat&#225;n</option>
                      <option value="Zacatecas">Zacatecas</option>
                      <option value="Extranjero">Extranjero</option>  
                    </select>
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
                  <label for="inputEmail3" class="col-sm-2 control-label">Disponibilidad para viajar</label>

                  <div class="col-sm-10">
                    <select name="travel" id="" class="form-control">
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Disponibilidad para cambiar de residencia</label>

                  <div class="col-sm-10">
                    <select name="relocation" id="" class="form-control">
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Licencia de conducir</label>

                  <div class="col-sm-10">
                    <select name="licence" id="" class="form-control">
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dispones de vehículo propio</label>

                  <div class="col-sm-10">
                    <select name="car" id="" class="form-control">
                      <option value="si">Sí</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cargo o título breve del currículum </label>

                  <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Cargo o título">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Descripción breve de su perfil profesional</label>

                  <div class="col-sm-10">
                    <textarea class="form-control" name="description" rows="5"></textarea>
                  </div>
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
