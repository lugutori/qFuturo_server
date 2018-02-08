@extends('app')

@section('content')
	<article>
		<h1>{{$area->id}}</h1>
		<div class="body">
			Nombre: {{$area->category->name}}<br/>
			Salario Promedio: $ {{$area->salary}}<br/>
			Crecimiento: {{$area->growth}} %<br/>
			Tasa de Empleo: {{$area->employment}} %<br/>
			Tiempo de Estudio:{{$area->study_time}} años
		</div>
	</article>
@stop