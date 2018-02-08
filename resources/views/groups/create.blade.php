@extends('app')

@section('content')
<H1>Agregar Grupo</H1>
{!! Form::open(['url'=>'groups']) !!}
@include('groups._form',['submitButtonText'=>'Agregar Grupo'])
{!! Form::close() !!}
@include('errors.list')
@stop