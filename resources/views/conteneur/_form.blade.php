<div class="form-group">
	{!! Form::label('id_user', 'Nom du client : ') !!}
	<select name="id_user" id="id_user">
	@foreach ($clients as $c)
		<option value="{{$c->id}}">{{$c->name}}</option>
	@endforeach
	</select>
</div>

<div class="form-group">
    {!! Form::label('taille', 'Taille:') !!}
	{!! Form::text('taille') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>