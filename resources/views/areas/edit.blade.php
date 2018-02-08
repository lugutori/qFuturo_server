@extends('app')

@section('content')
<h1>Editar Area</h1>
{!! Form::model($area,['method'=>'PATCH','action'=>['AreaController@update',$area->id]]) !!}
@include('areas._form',['submitButtonText'=>'Actualizar Area'])
{!! Form::close() !!}
@include('errors.list')
@stop