@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>
                        {{ __('Clientes') }}
                    </h2>
                    <br>
                    <a href="{{ url('/nuevosclientes') }}" class="btn btn-success">Nuevo Cliente</a>
                    <br>
                    <table class="table">
                        <tr>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Nit</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->nombre}}</td>
                                <td>{{$cliente->direccion}}</td>
                                <td>{{$cliente->email}}</td>
                                <td>{{$cliente->telefono}}</td>
                                <td>{{$cliente->nit}}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ url('EliminarC',$cliente->id) }}">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach

                    </table>








                </div>
            </div>
        </div>
    </div>
</div>
@endsection
