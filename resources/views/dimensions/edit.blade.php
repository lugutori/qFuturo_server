@extends('app')

@section('content')
<h1>Editar Opcion</h1>
{!! Form::model($dimension,['method'=>'PATCH','action'=>['DimensionController@update',$dimension->id]]) !!}
@include('dimensions._form',['submitButtonText'=>'Actualizar Dimensión'])
{!! Form::close() !!}
@include('errors.list')
@stop