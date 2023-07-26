{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Agregar Medida')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <br>
    <center><h1>Agregar Medida</h1></center>
    
    <form action="{{ route('medida.store') }}" method="post">
        @csrf
        {{-- form:post --}}
        {{-- Fila 1  --}}
        <main>
            <div class="container">

                <div class="row">
                    {{-- Row para crear una fila --}}
    
                    <div class="row form-group">
                        <label for="sensor">Sensor</label>
                        <select class="form-select" name="sensor" id="sensor" required="">
                            <option value="">Seleccionar Sensor</option>
                            @foreach ($sensor as $sensor)
                                <option value="{{ $sensor->id }}">{{ $sensor->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="form-group">
                        <label for="valor">Valor</label>
                        <input type="text" class="form-control" name="valor" id="valor">
                    </div>

                    <br>
                    <br>
                    <br>
    
    
                    <div class="col s6">
                        <button class="btn btn-success btn-sm" type="submit">Agregar</button>
                        <a href="{{ url('dashboard/medida') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div>
    
                </div>

            </div>
            
        </main>
    </form>
@endsection
