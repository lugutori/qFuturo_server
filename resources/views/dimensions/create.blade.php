@extends('app')

@section('content')
<H1>Agregar Dimension</H1>
{!! Form::open(['url'=>'dimensions']) !!}
@include('dimensions._form',['submitButtonText'=>'Agregar Dimensión'])
{!! Form::close() !!}
@include('errors.list')
@stop