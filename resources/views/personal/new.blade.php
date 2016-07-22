@extends('layouts.master')

@section('content1')
	<div class="container">
		{!! Form::open(['route' => 'personal.store', 'method' => 'POST']) !!}

		@include('personal.form')
		
		<br>
		{!! Form::submit('Almacenar', ['class' => 'btn btn-primary']) !!}
		

		{!! Form::close() !!}
	</div>
	
@endsection