{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Editar Sensor')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <br>
    <center><h1>Editar Sensor</h1></center>


    <form action="{{ url('dashboard/sensor/'.$sensor->id) }}" method="post">
        @method('PUT')
        @csrf
        {{-- form:post --}}
        {{-- Fila 1  --}}
        <main>

            <div class="container">

                <div class="form-group">
                    <label for="titulo">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $sensor->nombre }}">
                </div>

                <div class="form-group">
                    <label for="isbn">Serial</label>
                    <input type="text" class="form-control" name="serial" id="serial" value="{{ $sensor->serial }}">
                </div>

                <div class="form-group">
                    <label for="isbn">Descripción</label>
                    <input type="textarea" class="form-control" name="descripcion" id="descripcion" value="{{ $sensor->descripcion }}">
                </div>

                <div class="row form-group">
                    <label for="tipo">Tipo</label>
                    <select class="form-select" name="tipo" id="tipo" >
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

                    <br>
                    <br>
                    <br>
    
                    {{-- fila 4 --}}
                    <div class="col s6">
                        <button class="btn btn-success btn-sm" type="submit">Guardar</button>
                        <a href="{{ url('dashboard/sensor') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div>
    
                </div>

            </div>

            
        </main>
    </form>
@endsection
