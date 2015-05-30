@extends('app')
 
@section('content')
	@if(session()->has('message'))
		<div class="alert alert-success">{!! session('message') !!}</div>
	@endif
<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Mon profil</div>
						<div class="panel-body">
							<p>Nom : {{$user->name}}</p>
							<p>E-mail : {{$user->email}}</p>
							<p>Adresse : {{$user->adresse}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection