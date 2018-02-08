@extends('app')

@section('content')
	<H1>Lista de Categorias</H1>
	@foreach ($categories as $category)
	<article>
		<h2><a href="{{url('/categories',$category->id)}}">{{$category->name}}</a></h2>
		<h3>Dimension: {{$category->group->dimension->name}}</h3>
		<h3>Grupo: {{$category->group->name}}</h3>
	</article>
	@endforeach
@stop