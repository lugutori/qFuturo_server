<div class="form-group">
	{!! Form::label('name','Nombre:') !!}
	{!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('dimension_id','Dimension:') !!}<br />
	{!! Form::select('dimension_id',
	(['0' => 'Seleccione una Categoria']+$dimensions->toArray()),
	null,
	['class' => 'form-control', 'id'=>'groupSelector']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
</div>