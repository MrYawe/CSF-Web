{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('date_entree', 'Date_entree:') !!}
			{!! Form::text('date_entree') !!}
		</li>
		<li>
			{!! Form::label('date_sortie', 'Date_sortie:') !!}
			{!! Form::text('date_sortie') !!}
		</li>
		<li>
			{!! Form::label('id_navire', 'Id_navire:') !!}
			{!! Form::text('id_navire') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}