@extends('app')

@section('content')
<h1>Editar Opcion</h1>
{!! Form::model($option,['method'=>'PATCH','action'=>['OptionController@update',$option->id]]) !!}
@include('options._form',['submitButtonText'=>'Actualizar Opción'])
{!! Form::close() !!}
@include('errors.list')
@stop