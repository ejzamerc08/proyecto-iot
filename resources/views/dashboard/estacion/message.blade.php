@extends('dashboard.master')
@section('titulo', 'Mensaje ok')
@section('contenido')
<h1>Mensaje:</h1>
<div class="container py-4">
    <h2>{{ $msg }}</h2>   
    <a href="{{ url('dashboard/estacion') }}" class="btn btn-secondary bt-sm">Regresar</a>
</div>

@endsection

