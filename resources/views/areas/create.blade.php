@extends('app')

@section('content')
<H1>Agregar Area</H1>
{!! Form::open(['url'=>'areas']) !!}
@include('areas._form',['submitButtonText'=>'Agregar Area'])
{!! Form::close() !!}
@include('errors.list')
@stop