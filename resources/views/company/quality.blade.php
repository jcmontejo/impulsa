@extends('layouts.app2')
@section('htmlheader_title')
  Home
@endsection
@section('main-content')


	@include('alerts.errors')
	{!! Form ::open (['route'=>'quality.store','method'=>'POST']) !!}

		
		@include('company.form_quality')


{!! Form::close() !!}	

 @endsection

