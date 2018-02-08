@extends('app')

@section('content')
	<H1>Lista de Usuarios</H1>
	<h2>Usuarios registrados: {{count($users)}}</h2>
	@foreach ($users as $user)
		<article>
			<h2><a href="{{url('/users',$user->id)}}">{{$user->email}}</a></h2>
			<h3>Nombre: {{$user->first_name}}</h3>
			<h3>Apellido: {{$user->last_name}}</h3>
			<h3>Departamento: {{$user->department}}</h3>
			<h3>Ciudad: {{$user->city}}</h3>
			<h3>Nivel de estudios: {{$user->studies}}</h3>
		</article>
	@endforeach
@stop