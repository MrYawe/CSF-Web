
<div class="form-group">
    {!! Form::label('nom', 'Nom:', ['class'=>'col-md-4 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('nom','',['class'=>'form-control']) !!}
	</div>
</div>
<div class="form-group">
    {!! Form::label('capacite', 'Capacite:', ['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
		{!! Form::text('capacite', '',['class'=>'form-control']) !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-6 col-md-offset-4">
    	{!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
	</div>
</div>

