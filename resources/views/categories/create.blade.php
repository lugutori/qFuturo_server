@extends('app')

@section('content')
<H1>Agregar Categoria</H1>
{!! Form::open(['url'=>'categories']) !!}
@include('categories._form',['submitButtonText'=>'Agregar Categoria'])
{!! Form::close() !!}
@include('errors.list')
@stop