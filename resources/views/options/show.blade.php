@extends('app')

@section('content')
	<article>
		<h1>{{$option->codigo}}</h1>
		<div class="body">{{$option->cuerpo}}</div>
	</article>
@stop