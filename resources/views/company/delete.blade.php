{!! Form::open(['route'=>['publication.destroy', $publication->id], 'method'=> 'DELETE'])!!}

{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}

{!! Form::close()!!}