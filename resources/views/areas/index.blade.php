@extends('app')

@section('content')
	<H1>Lista de Areas</H1>
	@foreach ($areas as $area)
	<article>
		<h2><a href="{{url('/areas',$area->id)}}">{{$area->category->name}}</a></h2>
		<h3>Salario: ${{$area->salary}} </h3>
		<h3>Crecimiento: {{$area->growth}}%</h3>
		<h3>Tasa de Empleo: {{$area->employment}}%</h3>
		<h3>Tiempo de Estudio: {{$area->study_time}} años</h3>
	</article>
	@endforeach
@stop