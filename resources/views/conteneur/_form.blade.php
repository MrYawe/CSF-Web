<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
	{!! Form::text('nom') !!}
</div>
<div class="form-group">
    {!! Form::label('capacite', 'Capacite:') !!}
	{!! Form::text('capacite') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>