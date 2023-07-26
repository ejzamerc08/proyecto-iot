{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Agregar Estacion')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <br>
    <center><h1>Agregar Estacion</h1></center>
    
    <form action="{{ route('estacion.store') }}" method="post">
        @csrf
        {{-- form:post --}}
        {{-- Fila 1  --}}
        <main>

            <div class="container">

                <div class="row">
                    {{-- Row para crear una fila --}}
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>

                    <div class="form-group">
                        <label for="longitud">Longitud</label>
                        <input type="text" class="form-control" name="longitud" id="longitud">
                    </div>

                    <div class="form-group">
                        <label for="latitud">Latitud</label>
                        <input type="text" class="form-control" name="latitud" id="latitud">
                    </div>

                    <br>
                    <br>
                    <br>

                    <div>
                        <label for="estado">Estado</label>
                        <input type="number" class="form-control"  value="true" name="estado" id="estado">
                    </div>

                    <br>
                    <br>
                    <br>
                    
                    <div class="col s6">
                        <button class="btn btn-success btn-sm" type="submit">Agregar</button>
                        <a href="{{ url('dashboard/estacion') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div>
    
                </div>

            </div>

            
        </main>
    </form>
@endsection
