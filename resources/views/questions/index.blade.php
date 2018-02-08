@extends('app')

@section('content')
	<H1>Lista de Preguntas</H1>
	@foreach ($questions as $question)
	<article>
		<h2><a href="{{url('/questions',$question->id)}}">{{$question->code}}</a></h2>
        <h3>Pregunta: {{$question->text}}</h3>
	</article>
	@endforeach
@stop