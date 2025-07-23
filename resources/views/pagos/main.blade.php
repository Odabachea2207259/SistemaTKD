@extends('main')

@section('title', 'Pagos')

@section('subtitle','Pagos')

@section('main-section','Pagos')

@section('content')
    <h1>
        {{ \Request::segment(1)}}
    </h1>
@endsection