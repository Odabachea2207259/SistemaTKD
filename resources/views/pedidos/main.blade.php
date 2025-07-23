@extends('main')

@section('title', 'Pedidos')

@section('subtitle','Pedidos')

@section('content')
    <h1>
        {{ \Request::segment(1)}}
    </h1>
@endsection