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

                    {{ __('Crear Facturas') }}


                    <br>
                    <form action="NuevasF" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="fechac" class="form-label">Fecha Creación</label>
                            <input type="date" id="fechac" name="fechac" placeholder="Ingrese fecha" class="form-control">
                        </div>

                        <select class="form-select" aria-label="Default select example">
                            <option desabled>Seleccione el cliente</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                            @endforeach
                        </select>

                        <select class="form-select" aria-label="Default select example">
                            <option desabled>Seleccione el cliente</option>
                            <option value="CO">Contado</option>
                            <option value="CH">Crédito</option>
                        </select>

                        <input type="submit" class="btn btn-success" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
