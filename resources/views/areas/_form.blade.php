<div class="form-group">
	{!! Form::label('category_id','Nombre:') !!}<br />
	{!! Form::select('category_id',
	(['0' => 'Seleccione una Categoria']+$categories->toArray()),
	null,
	['class' => 'form-control', 'id'=>'groupSelector']) !!}
</div>
<div class="form-group">
	{!! Form::label('salary','Salario Promedio (en pesos):') !!}
	{!! Form::text('salary',null,['class'=>'form-control']) !!}
	{!! Form::label('growth','Crecimiento (en %):') !!}
	{!! Form::text('growth',null,['class'=>'form-control']) !!}
	{!! Form::label('employment','Tasa de Empleo (en %):') !!}
	{!! Form::text('employment',null,['class'=>'form-control']) !!}
	{!! Form::label('study_time','Tiempo de Estudio (en años):') !!}
	{!! Form::text('study_time',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
</div>