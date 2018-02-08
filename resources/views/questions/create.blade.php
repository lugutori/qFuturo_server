@extends('app')

@section('content')
<H1>Agregar Pregunta</H1>
{!! Form::open(['url'=>'questions']) !!}
@include('questions._form',['submitButtonText'=>'Agregar Pregunta'])
{!! Form::close() !!}
@include('errors.list')
@stop