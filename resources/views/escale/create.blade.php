@extends('app')
 
@section('content')
	@if(session()->has('message'))
		<div class="alert alert-success">{!! session('message') !!}</div>
	@endif
	{!! Form::open(array('route' => 'escale.store', 'method' => 'POST')) !!}
		<ul>
			<li>
				{!! Form::label('date_entree', 'Date entree : ') !!}
				{!! Form::text('date_entree') !!}
			</li>
			<li>
				{!! Form::label('date_sortie', 'Date sortie : ') !!}
				{!! Form::text('date_sortie') !!}
			</li>
			<li>
				{!! Form::label('id_navire', 'Nom du navire : ') !!}
				<select name="id_navire" id="id_navire">
				@foreach ($navires as $n)
					<option value="{{$n->id}}">{{$n->nom}}</option>
				@endforeach
				</select>
			</li>
			<li>
				{!! Form::submit() !!}
			</li>
		</ul>
	{!! Form::close() !!}
@endsection