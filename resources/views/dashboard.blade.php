{{-- Llamamos la vista de la cual heredamos la estructura --}}
@extends('dashboard.master')
@section('titulo', 'Agregar Sensor')
@section('contenido')
@include('dashboard.partials.validation-error')

   

    <div class="bt-20">
        <div>
            <section class="p-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md">
                            <div class="card bg-dark text-light">
                                <div class="card-body text-center">
                                    <div class="h1 mb-3">
                                        <i class="bi bi-file-easel"></i>
                                    </div>
                                    <a href="{{ url('/dashboard/sensor') }}" class="btn btn-primary">Sensores</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card bg-dark text-light">
                                <div class="card-body text-center">
                                    <div class="h1 mb-3">
                                        <i class="bi bi-list-ul"></i>
                                    </div>
                                    <a href="{{ url('/dashboard/tipo') }}" class="btn btn-primary">Tipos de Sensores</a>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </section>
        </div>

    </div>

    <div class="bt-20">
        <div>
            <section class="p-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md">
                            <div class="card bg-dark text-light">
                                <div class="card-body text-center">
                                    <div class="h1 mb-3">
                                        <i class="bi bi-houses"></i>
                                    </div>
                                    <a href="{{ url('/dashboard/estacion') }}" class="btn btn-primary">Estaciones</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card bg-dark text-light">
                                <div class="card-body text-center">
                                    <div class="h1 mb-3">
                                        <i class="bi bi-rulers"></i>
                                    </div>
                                    <a href="{{ url('/dashboard/medida') }}" class="btn btn-primary">Medidas</a>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </section>
        </div>

    </div>


    @endsection
