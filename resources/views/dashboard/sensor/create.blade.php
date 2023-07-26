{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Agregar Sensor')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <br>
    <center><h1>Agregar Sensor</h1></center>
    
    <form action="{{ route('sensor.store') }}" method="post">
        @csrf
        {{-- form:post --}}
        {{-- Fila 1  --}}
        <main>
            <div class="container">
                <div class="row">
                    {{-- Row para crear una fila --}}
    
                    <div class="form-group">
                        <label for="titulo">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
    
                    <div class="form-group">
                        <label for="isbn">Serial</label>
                        <input type="text" class="form-control" name="serial" id="serial">
                    </div>

                    <div class="form-group">
                        <label for="isbn">Descripción</label>
                        <input type="textarea" class="form-control" name="descripcion" id="descripcion">
                    </div>

                    <div class="row form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-select" name="tipo" id="tipo">
                            <option value="">Seleccionar Tipo de Sensor</option>
                            @foreach ($tipo as $tipo)
                                <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="row form-group">
                        <label for="estacion">Estacion</label>
                        <select class="form-select" name="estacion" id="estacion">
                            <option value="">Seleccionar Estación</option>
                            @foreach ($estacion as $estacion)
                                <option value="{{ $estacion->id }}">{{ $estacion->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col s6">
                        <br>
                        <button class="btn btn-success btn-sm" type="submit">Agregar</button>
                        <a href="{{ url('dashboard/sensor') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div>
                </div>

            </div>
           
        </main>
    </form>
@endsection
