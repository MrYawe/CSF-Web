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
							
								<div class="form-group {!! $errors->has('date_mouvement') ? 'has-error' : '' !!}">
									{!! Form::label('date_mouvement', 'Date du mouvement : ', ['class'=>'col-md-4 control-label']) !!}
									<div class="col-md-6">
										{!! Form::text('date_mouvement','',['class'=>'form-control']) !!}
									</div>
									{!! $errors->first('date_mouvement', '<small class="help-block">:message</small>') !!}
								</div>

								<div class="form-group {!! $errors->has('id_escale') ? 'has-error' : '' !!}">
									{!! Form::label('id_escale', 'Id de l\'escale : ',['class'=>'col-md-4 control-label']) !!}
									<div class="col-md-6">
										<select name="id_escale" id="id_escale" class="form-control">
											@foreach ($escales as $e)
												<option value="{{$e->id}}">{{$e->id}}</option>
											@endforeach
										</select>
										{!! $errors->first('id_escale', '<small class="help-block">:message</small>') !!}
									</div>	
								</div>
								
								<div class="form-group {!! $errors->has('id_conteneur') ? 'has-error' : '' !!}">
									{!! Form::label('id_conteneur', 'Id du conteneur : ',['class'=>'col-md-4 control-label']) !!}
									<div class="col-md-6">
										<select name="id_conteneur" id="id_conteneur" class="form-control">
											@foreach ($conteneurs as $c)
												<option value="{{$c->id}}">{{$c->id}}</option>
											@endforeach
										</select>
										{!! $errors->first('id_conteneur', '<small class="help-block">:message</small>') !!}
									</div>	
								</div>

								<div class="form-group {!! $errors->has('est_chargement') ? 'has-error' : '' !!}">
									{!! Form::label('true', 'Choix du mouvement',['class'=>'col-md-4 control-label']) !!}
									<div class="col-md-6">
										<select name="est_chargement" id="est_chargement" class="form-control">
											<option value="1">Chargement</option>
											<option value="0">Déchargement</option>
										</select>
										{!! $errors->first('est_chargement', '<small class="help-block">:message</small>') !!}
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