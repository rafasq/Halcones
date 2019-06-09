@extends('Layouts.Estructura')
@section('icono')
    <link rel="shortcut icon" href="{{asset('img/Logo1.png')}}">
@endsection
@section('titulo')
    menu
@endsection

@section('cabecera')
    @include('Layouts/Cabecera')
@endsection

@section('cuerpo')
@include('Layouts/Cuerpo')
@endsection

@section('pie')
    
@endsection