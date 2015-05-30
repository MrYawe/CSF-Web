@extends('app')
 
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				
				<div class="panel-heading">Création d'un Navire</div>
	 				<div class="panel-body">
	 					<div class="form-horizontal">
	 						{!! Form::model(new App\Navire, ['route' => ['navire.store']]) !!}
					        @include('navire/_form', ['submit_text' => 'Créer navire'])
					    	{!! Form::close() !!}
	 					</div>
					</div>
			</div>
		</div>
	</div>
</div>
@endsection