@extends('app')
@section('content')
<H1>Agregar Opciones</H1>
{!! Form::open(['url'=>'options']) !!}
    @include('options._form',['submitButtonText'=>'Agregar Opciones'])
    {!! Form::close() !!}
    @include('errors.list')
@stop