@extends('app')
 
@section('content')
	@if(session()->has('message'))
		<div class="alert alert-error">{!! session('error') !!}</div>
	@endif
	
	<h3>Chargements effectués (NB = {{$nb_chargements}})</h3>
	@foreach ($chargements as $c)
		<p> {{$c->date_mouvement}} : chargement du conteneur {{$c->id_conteneur}} </p>
	@endforeach
	
	<h3>Déchargements effectués (NB = {{$nb_dechargements}})</h3>
	@foreach ($dechargements as $d)
		<p> {{$c->date_mouvement}} : chargement du conteneur {{$c->id_conteneur}} </p>
	@endforeach
@endsection