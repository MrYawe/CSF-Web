@extends('app')
 
@section('content')
	@if(session()->has('message'))
		<div class="alert alert-success">{!! session('message') !!}</div>
	@endif
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Création d'une escale</div>
						<div class="panel-body">
							<div class="form-horizontal">
								{!! Form::open(array('route' => 'mouvement.store', 'method' => 'POST')) !!}
							
								<div class="form-group">
									{!! Form::label('date_mouvement', 'Date du mouvement : ', ['class'=>'col-md-4 control-label']) !!}
									<div class="col-md-6">
										{!! Form::text('date_mouvement','',['class'=>'form-control']) !!}
									</div>
								</div>

								<div class="form-group">
									{!! Form::label('id_conteneur', 'Id du conteneur : ',['class'=>'col-md-4 control-label']) !!}
									<div class="col-md-6">
										<select name="id_conteneur" id="id_conteneur" class="form-control">
											@foreach ($conteneurs as $c)
												<option value="{{$c->id}}">{{$c->id}}</option>
											@endforeach
										</select>
									</div>	
								</div>

								<div class="form-group">
									{!! Form::label('true', 'Choix du mouvement',['class'=>'col-md-4 control-label']) !!}
									<div class="col-md-6">
										<select name="Chargement" id="Chargement" class="form-control">
											<option value="true">Chargement</option>
											<option value="false">Déchargement</option>
										</select>
									</div>
								</div>	

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										{!! Form::submit('Valider', ['class'=>'btn btn-primary', 'id'=>'tamere']) !!}
									</div>
								</div>
								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection