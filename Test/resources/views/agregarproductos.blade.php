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

                    <h2>{{ __('Productos') }}</h2>
                    <br>
                    <a href="{{ url('/nuevosproductos') }}" class="btn btn-success">Nuevo Producto</a>
                    <br>

                    <table class="table">
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach($productos as $producto)
                            <tr>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->descripcion}}</td>
                                <td>{{$producto->precio}}</td>
                                <td>{{$producto->stock}}</td>
                                <td>
                                    <a class="btn btn-danger" href="{{ url('EliminarP',$producto->id) }}">Eliminar</a>

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
