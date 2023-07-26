@extends('dashboard.master')
@section('titulo', 'Estacion')
@section('contenido')

<main>
    <div class="container py-4">
        <center><h2>Estaciones</h2></center>
        <br>
        <a href="{{ url('/dashboard/estacion/create') }}" class="btn btn-primary btn-sm">Nueva Estacion</a>
        <br>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Longitud</th>
                    <th>Latitud</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>          
            </thead>
            <tbody>
                @foreach ($estacion as $estacion)
                    <tr>
                        <td>{{ $estacion->id }}</td>
                        <td>{{ $estacion->nombre }}</td>
                        <td>{{ $estacion->longitud }}</td>
                        <td>{{ $estacion->latitud }}</td>
                        <td>{{ $estacion->estado }}</td>
                        <td><a href="{{ url('dashboard/estacion/'.$estacion->id.'/edit') }}" class="bi bi-pencil"></a></td>
                        <td>
                            <form action="{{ url('dashboard/estacion/'.$estacion->id )}}" method="post">
                                @method("DELETE")
                                @csrf
                                <button class="bi bi-eraser-fill" type="submit"></button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection