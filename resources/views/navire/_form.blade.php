
<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
    {!! Form::label('nom', 'Nom:', ['class'=>'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('nom','',['class'=>'form-control']) !!}
		{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
	</div>
</div>
<div class="form-group {!! $errors->has('capacite') ? 'has-error' : '' !!}">
    {!! Form::label('capacite', 'Capacite:', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
		{!! Form::text('capacite', '',['class'=>'form-control']) !!}
		{!! $errors->first('capacite', '<small class="help-block">:message</small>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-6 col-md-offset-4">
    	{!! Form::submit($submit_text, ['class'=>'btn btn-primary', 'id'=>'tamere']) !!}
	</div>
</div>
