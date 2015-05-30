@extends('app')

@section('content')
	@if(session()->has('message'))
		<div class="alert alert-success">{!! session('message') !!}</div>
	@endif
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Créer un conteneur</div>
						<div class="panel-body">
							<div class="form-horizontal">
								{!! Form::open(array('route' => 'conteneur.store', 'method' => 'POST')) !!}
								<div class="form-group">
									<div class="col-md-6">
                    <select name="id_user" id="id_user" class="form-control">
                    @foreach ($clients as $c)
                      <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                    </select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-6">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										{!! Form::submit('Créer le conteneur',['class'=>'btn btn-primary', 'id'=>'tamere']) !!}
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
