@extends('app')

@section('content')
<h1>Editar Pregunta</h1>
{!! Form::model($question,['method'=>'PATCH','action'=>['QuestionController@update',$question->id]]) !!}
@include('questions._form',['submitButtonText'=>'Actualizar Pregunta'])
{!! Form::close() !!}
@include('errors.list')
@stop