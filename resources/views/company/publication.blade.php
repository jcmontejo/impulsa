@extends('layouts.app2')
@section('main-content')
@include('alerts.errors')
{!! Form::open(['route' => 'publication.store','method'=>'POST'])!!}
@include('company.formpublication')
	{!! Form::close() !!}	
@endsection