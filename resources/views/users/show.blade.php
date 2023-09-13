@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>DETALHAR USUÁRIO</h1>
@stop

@section('content')
    <p>{{ $user }}</p>
@stop