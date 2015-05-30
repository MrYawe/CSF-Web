@extends('app')
 
@section('content')
	<h2>Projects</h2>
 
    @if ( !$clients->count() )
        You have no clients
    @else
        <ul>
            @foreach( $clients as $client )
                <li>{{ $client->name }}</li>
            @endforeach
        </ul>
    @endif
    <h2>Creer un conteneur</h2>
 
    {!! Form::model(new App\Conteneur, ['route' => ['conteneur.store']]) !!}
        @include('conteneur/_form', ['submit_text' => 'Creer le conteneur'])
    {!! Form::close() !!}
@endsection