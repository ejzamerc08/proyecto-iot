@extends('dashboard.master')
@section('titulo', 'Sensor')
@section('contenido')

<main>
    <div class="container py-4">
        <center><h2>Sensores</h2></center>      
        <br>
        <a href="{{ url('dashboard/sensor/create') }}" class="btn btn-primary btn-sm">Nuevo Sensor</a>
        <br>
        
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Serial</th>
                    <th>Descripción</th>
                    <th>Tipo Sensor</th>
                    <th>Estación</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>          
            </thead>
            <tbody>
                @foreach ($sensor as $sensor)
                    <tr>
                        <td>{{ $sensor->id }}</td>
                        <td>{{ $sensor->nombre }}</td>
                        <td>{{ $sensor->serial }}</td>
                        <td>{{ $sensor->descripcion }}</td>
                        <td>{{ $sensor->tipo->nombre }}</td>
                        <td>{{ $sensor->estacion->nombre }}</td>     
                        <td><a href="{{ url('dashboard/sensor/'.$sensor->id.'/edit') }}" class="bi bi-pencil"></a></td>
                        <td>
                            <form action="{{ url('dashboard/sensor/'.$sensor->id )}}" method="post">
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