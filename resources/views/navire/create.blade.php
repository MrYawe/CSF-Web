@extends('app')
 
@section('content')
    <h2>Create Navire</h2>
 
    {!! Form::model(new App\Navire, ['route' => ['navire.store']]) !!}
        @include('navire/_form', ['submit_text' => 'Create Project'])
    {!! Form::close() !!}
@endsection