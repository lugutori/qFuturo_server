@extends('app')

@section('content')
	<H1>Lista de Preguntas</H1>
	@foreach ($options as $option)
	<article>
		<h2><a href="{{url('/option',$option->codigo)}}">{{$option->codigo}}</a></h2>
		<div class="body">{{$option->cuerpo}}</div>
	</article>
	@endforeach
@stop