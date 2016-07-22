@extends('layouts.app2')
@section('htmlheader_title')
  Home
@endsection
@section('main-content')
	

              
           
            
            <!-- /.box-header -->
            <!-- form start -->
            
            {!! Form ::model ($quality,['route'=>['quality.update', $quality],'method'=> 'PUT']) !!}
              @include('company.form_quality')

              {!! Form::close() !!}
         
@endsection