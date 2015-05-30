@extends('app')
 
@section('content')
	{!! Form::open(array('route' => 'escale.store', 'method' => 'POST')) !!}
		<ul>
			<li>
				{!! Form::label('date_entree', 'Date_entree:') !!}
				{!! Form::text('date_entree') !!}
			</li>
			<li>
				{!! Form::label('date_sortie', 'Date_sortie:') !!}
				{!! Form::text('date_sortie') !!}
			</li>
			<li>
				{!! Form::label('id_navire', 'Id_navire:') !!}
				{!! Form::select('id_navire') !!}
				@foreach ($navires as $n)
					<option value="{{$n->id}}">{{$n->id}}</option>
				@endforeach
			</li>
			<li>
				{!! Form::submit() !!}
			</li>
		</ul>
	{!! Form::close() !!}
@endsection