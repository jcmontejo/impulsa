{!! Form::open(['route' => ['work.destroy', $work->id], 'method' => 'DELETE']) !!}
	{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
