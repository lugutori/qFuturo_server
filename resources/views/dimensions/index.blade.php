@extends('app')

@section('content')
	<H1>Lista de Dimensiones</H1>
	@foreach ($dimensions as $dimension)
	<article>
		<h2><a href="{{url('/dimensions',$dimension->id)}}">{{$dimension->name}}</a></h2>
	</article>
	@endforeach
@stop