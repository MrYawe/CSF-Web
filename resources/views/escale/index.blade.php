@extends('app')
 
@section('content')
	@if(session()->has('message'))
		<div class="alert alert-error">{!! session('error') !!}</div>
	@endif
	{!! Form::open(array('route' => 'escale.show', 'method' => 'POST')) !!}
		<select name="id" id="id">
		@foreach ($escales as $e)
			<option value="{{$e->id}}">Escale du navire d'id {{$e->id_navire}} du {{$e->date_entree}} au {{$e->date_sortie}}</option>
		@endforeach
		</select>
		{!! Form::submit() !!}
	{!! Form::close() !!}
@endsection