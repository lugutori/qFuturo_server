@extends('app')

@section('content')
	<article>
		<h1>{{$question->code}}</h1>
		<div class="body">
			Texto: {{$question->text}}<br/>
			Dimension: {{$question->category->name}}<br/>
			Grupo: {{$question->group->name}}<br/>
			Categoria: {{$question->category->name}}<br/><br/>
			@foreach($question->options->lists('body') as $option)
				Opcion: {{$option}}<br/>
			@endforeach
		</div>
	</article>
@stop