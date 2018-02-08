@extends('app')

@section('content')
	<article>
		<h1>{{$group->id}}</h1>
		<div class="body">
			Nombre: {{$group->name}}<br/>
			Dimension: {{$group->dimension->name}}<br/>
		</div>
	</article>
@stop