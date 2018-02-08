<div class="form-group">
	{!! Form::hidden('question_id', $question->id) !!}
	@for ($i=0 ; $i<$optionNum;$i++)
		{!! Form::label('bodies[]','Cuerpo:') !!}
		{!! Form::text('bodies[]',null,['class'=>'form-control']) !!}
		{!! Form::label('category_ids[]','Valor de la opcion:') !!}<br/>
		@if($group->name==='Motivaciones profundas')
			{!! Form::select('category_ids[]',(['0' => 'Seleccione una Categoria']+$group->categories()->lists('name', 'id')->toArray())) !!}
		@else
			{!! Form::label('right','Es la opcion Correcta:') !!}
			{!! Form::radio('right',$i,false) !!}
		@endif
		<br/>
    @endfor
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}		
</div>