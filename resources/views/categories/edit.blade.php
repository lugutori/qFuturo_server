@extends('app')

@section('content')
<h1>Editar Categoria</h1>
{!! Form::model($category,['method'=>'PATCH','action'=>['CategoryController@update',$category->id]]) !!}
@include('categories._form',['submitButtonText'=>'Actualizar Categoria'])
{!! Form::close() !!}
@include('errors.list')
@stop