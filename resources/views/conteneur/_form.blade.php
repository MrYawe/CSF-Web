<div class="form-group {!! $errors->has('id_user') ? 'has-error' : '' !!}">
	{!! Form::label('id_user', 'Nom du client : ') !!}
	<select name="id_user" id="id_user">
	@foreach ($clients as $c)
		<option value="{{$c->id}}">{{$c->name}}</option>
	@endforeach
	</select>
	{!! $errors->first('id_user', '<small class="help-block">:message</small>') !!}
</div>

<div class="form-group {!! $errors->has('taille') ? 'has-error' : '' !!}">
    {!! Form::label('taille', 'Taille:') !!}
	{!! Form::text('taille') !!}
	{!! $errors->first('taille', '<small class="help-block">:message</small>') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>