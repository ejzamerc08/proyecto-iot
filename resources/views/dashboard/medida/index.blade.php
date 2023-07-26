@extends('dashboard.master')
@section('titulo', 'Medida')
@section('contenido')

<main>
    <div class="container py-4">
        <center><h2>Medidas</h2></center>
        <br>
        <a href="{{ url('dashboard/medida/create') }}" class="btn btn-primary btn-sm">Nuevo Medida</a>
        <br>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Sensor</th>
                    <th>Valor</th>
                    <th>Fecha de cración</th>
                    <th>Fecha de modificaición</th>
                    <!-- <th>Editar</th>
                    <th>Eliminar</th> -->
                </tr>          
            </thead>
            <tbody>
                @foreach ($medida as $medida)
                    <tr>
                        <td>{{ $medida->id }}</td>
                        <td>{{ $medida->sensor->nombre }}</td>
                        <td>{{ $medida->valor }}</td>
                        <td>{{ $medida->created_at }}</td>
                        <td>{{ $medida->updated_at }}</td>
                        <!-- <td><a href="{{ url('dashboard/medida/'.$medida->id.'/edit') }}" class="bi bi-pencil"></a></td>
                        <td>
                            <form action="{{ url('dashboard/medida/'.$medida->id )}}" method="post">
                                @method("DELETE") -->
                                @csrf
                                <!-- <button class="bi bi-eraser-fill" type="submit"></button> -->
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection