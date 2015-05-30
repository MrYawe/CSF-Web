@extends('app')

@section('content')
	@if(session()->has('message'))
		<div class="alert alert-success">{!! session('message') !!}</div>
	@endif
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Choix d'une escale</div>
						<div class="panel-body">
							<div class="form-horizontal">
                {!! Form::open(array('route' => 'escale.show', 'method' => 'GET')) !!}
								<div class="form-group">
									{!! Form::label('escale', 'Escale : ', ['class'=>'col-md-4 control-label']) !!}
									<div class="col-md-6">
                    <select name="id" id="id" class="form-control">
                    @foreach ($escales as $e)
                      <option value="{{$e->id}}">Escale du navire d'id {{$e->id_navire}} du {{$e->date_entree}} au {{$e->date_sortie}}</option>
                    @endforeach
                    </select>
									</div>
								</div>

									<div class="col-md-6 col-md-offset-4">
										{!! Form::submit('Envoyer',['class'=>'btn btn-primary', 'id'=>'tamere']) !!}
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
