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
								{!! Form::open(array('route' => 'escale.store', 'method' => 'POST')) !!}
								<div class="form-group">
									{!! Form::label('date_entree', 'Date entree : ', ['class'=>'col-md-4 control-label']) !!}
									<div class="col-md-6">
										{!! Form::text('date_entree','',['class'=>'form-control']) !!}
									</div>
								</div>
								<div class="form-group">
									{!! Form::label('date_sortie', 'Date sortie : ',['class'=>'col-md-4 control-label']) !!}
									<div class="col-md-6">
										{!! Form::text('date_sortie','',['class'=>'form-control']) !!}
									</div>
								</div>
								<div class="form-group">
									{!! Form::label('id_navire', 'Nom du navire : ',['class'=>'col-md-4 control-label']) !!}
									<div class="col-md-6">
										<select name="id_navire" id="id_navire" class="form-control">
										@foreach ($navires as $n)
											<option value="{{$n->id}}">{{$n->nom}}</option>
										@endforeach
										</select>
									</div>	
								</div>
								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										{!! Form::submit('Créer escale',['class'=>'btn btn-primary', 'id'=>'tamere']) !!}
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