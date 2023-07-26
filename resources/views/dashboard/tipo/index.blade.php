@extends('dashboard.master')
@section('titulo', 'Tipo')
@section('contenido')

<main>
    <div class="container py-4">
        <center> <h2>Tipos de Sensor</h2></center>
       <br>
        <a href="{{ url('/dashboard/tipo/create') }}" class="btn btn-primary btn-sm">Nuevo Tipo</a>
       <br>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>          
            </thead>
            <tbody>
                @foreach ($tipo as $tipo)
                    <tr>
                        <td>{{ $tipo->id }}</td>
                        <td>{{ $tipo->nombre }}</td>

                        <td><a href="{{ url('dashboard/tipo/'.$tipo->id.'/edit') }}" class="bi bi-pencil"></a></td>
                        <td>
                            <form action="{{ url('dashboard/tipo/'.$tipo->id )}}" method="post">
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