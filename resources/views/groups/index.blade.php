@extends('app')

@section('content')
	<H1>Lista de Grupos</H1>
	@foreach ($groups as $group)
	<article>
		<h2><a href="{{url('/groups',$group->id)}}">{{$group->name}}</a></h2>
		<h3>Dimension: {{$group->dimension->name}}</h3>
	</article>
	@endforeach
@stop