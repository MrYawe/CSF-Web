@extends('app')
 
@section('content')
	@if(session()->has('message'))
		<div class="alert alert-success">{!! session('message') !!}</div>
	@endif
	{!! Form::open(array('route' => 'mouvement.store', 'method' => 'POST')) !!}
		<ul>
			<li>
				{!! Form::label('date_mouvement', 'Date du mouvement : ') !!}
				{!! Form::text('date_mouvement') !!}
			</li>
			<li>
				{!! Form::label('id_escale', 'Id de l\'escale : ') !!}
				<select name="id_escale" id="id_escale">
				@foreach ($escales as $e)
					<option value="{{$e->id}}">{{$e->id}}</option>
				@endforeach
				</select>
			</li>
			<li>
				{!! Form::label('id_conteneur', 'Id du conteneur : ') !!}
				<select name="id_conteneur" id="id_conteneur">
				@foreach ($conteneurs as $c)
					<option value="{{$c->id}}">{{$c->id}}</option>
				@endforeach
				</select>
			</li>
			<li>
				<input type="radio" name="chargement" id="true">
				{!! Form::label('true', 'Chargement') !!}
				<input type="radio" name="chargement" id="false">
				{!! Form::label('false', 'Dechargement') !!}
			</li>
			<li>
				{!! Form::submit() !!}
			</li>
		</ul>
	{!! Form::close() !!}
@endsection