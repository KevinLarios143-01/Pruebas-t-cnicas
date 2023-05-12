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



                    <h2>   {{ __('Facturas') }}</h2>
                    <br>
                    <a href="{{ url('/nuevasfacts') }}" class="btn btn-success">Nuevo Producto</a>
                    <br>

                    <table class="table">
                        <tr>
                            <th>Factura</th>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach($facturas as $factur)
                            <tr>
                                <td>{{$factur->factura}}</td>
                                <td>{{$factur->fecha}}</td>
                                <td>{{$factur->cliente->nombre}}</td>
                                <td>
                                    <a class="btn btn-danger" href="{{ url('EliminarF',$factur->factura) }}">Eliminar</a>
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
