@extends('app')

@section('content')
	<article>
		<h1>{{$dimension->id}}</h1>
		<div class="body">{{$dimension->name}}</div>
	</article>
@stop