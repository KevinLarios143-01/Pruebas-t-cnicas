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
                        {{ __('Nuevo Producto') }}
                    </h2>
                    <br>
                    <form action="NuevosP" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Ingrese su Nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <textarea type="text" id="descripcion" name="descripcion" placeholder="Ingrese su Descripción" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" id="precio" name="precio" placeholder="Ingrese su precio" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="stock" class="form-label">Cantidad en existencia</label>
                            <input type="number" id="stock" name="stock" placeholder="Ingrese la cantidad de productos" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-success" value="Guardar">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
