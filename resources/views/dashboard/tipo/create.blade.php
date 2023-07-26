{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Agregar Tipo')
@section('contenido')
    @include('dashboard.partials.validation-error')
    <br>
    <center><h1>Agregar Tipo</h1></center>
    
    <form action="{{ route('tipo.store') }}" method="post">
        @csrf
        {{-- form:post --}}
        {{-- Fila 1  --}}
        <main>
            <div class="container">
                <div class="row">
                    {{-- Row para crear una fila --}}
    
                    <div class="form-group">
                        <label for="titulo">Tipo</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>   

                    <br>
                    <br>
                    <br>
                    
                    <div class="col s6">
                        <button class="btn btn-success btn-sm" type="submit">Agregar</button>
                        <a href="{{ url('dashboard/tipo') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                    </div> 
                </div>
            </div>
        </main>
    </form>
@endsection
