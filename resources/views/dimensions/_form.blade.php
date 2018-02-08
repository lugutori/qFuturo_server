<div class="form-group">
	{!! Form::label('name','Nombre:') !!}
	{!! Form::text('name',null,['class'=>'form-control', 'foo'=>'bar']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}		
</div>