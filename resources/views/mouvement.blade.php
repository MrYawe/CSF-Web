{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('est_chargement', 'Est_chargement:') !!}
			{!! Form::text('est_chargement') !!}
		</li>
		<li>
			{!! Form::label('id_escale', 'Id_escale:') !!}
			{!! Form::text('id_escale') !!}
		</li>
		<li>
			{!! Form::label('id_conteneur', 'Id_conteneur:') !!}
			{!! Form::text('id_conteneur') !!}
		</li>
		<li>
			{!! Form::label('date_mouvement', 'Date_mouvement:') !!}
			{!! Form::text('date_mouvement') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}