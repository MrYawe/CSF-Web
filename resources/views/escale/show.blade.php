@extends('app')
 
@section('content')
	@if(session()->has('message'))
		<div class="alert alert-error">{!! session('error') !!}</div>
	@endif
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Mouvements effectués pour l'escale {{$id}}</div>
						<div class="panel-body">
							<div class="form-horizontal">

								<div class="form-group">
									<div class="col-md-6">
										<label style="col-md-4 control-label">Chargements effectués (NB = {{$nb_chargements}})</label>
										@foreach ($chargements as $c)
											<p> {{$c->date_mouvement}} : chargement du conteneur {{$c->id_conteneur}} </p>
										@endforeach
									</div>	

									
								</div>
								<div class="form-group">
									<div class="col-md-6">
										<label style="col-md-4 control-label">Déchargements effectués (NB = {{$nb_dechargements}})</label>
										@foreach ($dechargements as $d)
											<p> {{$c->date_mouvement}} : déchargement du conteneur {{$c->id_conteneur}} </p>
										@endforeach
									</div>	
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection