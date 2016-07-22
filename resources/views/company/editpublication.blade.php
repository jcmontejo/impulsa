@extends('layouts.app2')

@section('main-content')

{!! Form::model($publication,['route' => ['publication.update', $publication],
'method' =>'PUT'])!!}
@include('company.formpublication')
	{!! Form::close() !!}
@endsection