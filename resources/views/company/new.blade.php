@extends('layouts.app2')
@section('htmlheader_title')
  Home
@endsection
@section('main-content')

   
<h1>Registro de Empresa</h1>

<section class="content">
{!! Form ::open (['route'=>'company.store','method'=>'POST']) !!}

		
		@include('company.form')


{!! Form::close() !!}	

</section>

 @endsection

