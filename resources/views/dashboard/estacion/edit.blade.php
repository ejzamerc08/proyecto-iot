{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Editar Estacion')
@section('contenido')
    @include('dashboard.partials.validation-error')
    
    <br>
    <center><h1>Editar Estacion</h1></center>
    <form action="{{ url('dashboard/estacion/'.$sensor->id) }}" method="post">
        @method('PUT')
        @csrf
        {{-- form:post --}}
        {{-- Fila 1  --}}
        <main>
            <div class="container">
                <div class="row">
                    {{-- Row para crear una fila --}}
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $sensor->nombre }}">
                    </div>

                    <div class="form-group">
                        <label for="longitud">Longitud</label>
                        <input type="text" class="form-control" name="longitud" id="longitud" value="{{ $sensor->longitud }}">
                    </div>

                    <div class="form-group">
                        <label for="latitud">Latitud</label>
                        <input type="text" class="form-control" name="latitud" id="latitud" value="{{ $sensor->latitud }}">
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="number" class="form-control" value="true" name="estado" id="estado" value="{{ $sensor->estado }}">
                    </div>

                    <br>
                    <br>
                    <br>
           
                    {{-- fila 4 --}}
                    <div class="col s6">
                        <button class="btn btn-success btn-sm" type="submit">Guardar</button>
                        <a href="{{ url('dashboard/estacion') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div>
    
                </div>
            </div>
        </main>
    </form>
@endsection
