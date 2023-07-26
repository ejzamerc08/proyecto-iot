{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Editar Tipo')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <br>
    <center><h1>Editar Tipo</h1></center>
    
    <form action="{{ url('dashboard/tipo/'.$sensor->id) }}" method="post">
        @method('PUT')
        @csrf
        {{-- form:post --}}
        {{-- Fila 1  --}}
        <main>
            <div class="container">
                <div class="row">
                    {{-- Row para crear una fila --}}

                    <div class="form-group">
                        <label for="nombre">Tipo</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $sensor->nombre }}">
                    </div>
                    
                    <br>
                    <br>
                    <br>
    
                    {{-- fila 4 --}}
                    <div class="col s6">
                        <button class="btn btn-success btn-sm" type="submit">Guardar</button>
                        <a href="{{ url('dashboard/tipo') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div>
    
                </div>
            </div>
        </main>
    </form>
@endsection
