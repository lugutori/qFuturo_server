@extends('app')

@section('content')
<h1>Editar Grupo</h1>
{!! Form::model($group,['method'=>'PATCH','action'=>['GroupController@update',$group->id]]) !!}
@include('groups._form',['submitButtonText'=>'Actualizar Dimensión'])
{!! Form::close() !!}
@include('errors.list')
@stop