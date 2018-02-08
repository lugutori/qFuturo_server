@extends('app')

@section('content')
	<article>
		<h1>{{$category->id}}</h1>
		<div class="body">
			Nombre: {{$category->name}}<br/>
			Dimension: {{$category->group->dimension->name}}<br/>
			Grupo: {{$category->group->name}}<br/>
		</div>
	</article>
@stop