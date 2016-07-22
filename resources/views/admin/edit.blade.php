@extends('layouts.app3')

@section('main-content')
	<div class="container">
		{!! Form::model($user, ['route' => ['confirm.update', $user], 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}
		<
		{!! Form::submit('Almacenar', ['class' => 'btn btn-primary']) !!}


	{!! Form::close() !!}
	</div>
	
@endsection