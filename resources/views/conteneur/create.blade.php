@extends('app')
 
@section('content')
    <h2>Creer un conteneur</h2>
 
    {!! Form::model(new App\Conteneur, ['route' => ['conteneur.store']]) !!}
        @include('conteneur/_form', ['submit_text' => 'Creer le conteneur'])
    {!! Form::close() !!}
@endsection