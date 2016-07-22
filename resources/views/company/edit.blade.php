@extends('layouts.app2')
@section('main-content')

<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Informacion de Contacto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            {!! Form::model($company,['route'=>['company.update',$company],'method'=>'PUT']) !!}
            @include('company.form')
            
            @include('alerts.errors')
               
              {!! Form::close() !!}
          </div>
		</div>
	</div>
@endsection