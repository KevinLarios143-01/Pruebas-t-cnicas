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
                        {{ __('Nuevo Cliente') }}
                    </h2>
                    <br>
                    <form action="NuevosC" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Ingrese su Nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" id="direccion" name="direccion" placeholder="Ingrese su dirección" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="text" id="email" name="email" placeholder="Ingrese su email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" id="telefono" name="telefono" placeholder="Ingrese su telefono" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="nit" class="form-label">Nit</label>
                            <input type="text" id="nit" name="nit" placeholder="Ingrese su nit" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-success" value="Guardar">
                    </form>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
