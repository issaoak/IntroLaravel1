@extends('layouts.plantilla1')
@section('titulo', 'clientes')

{{-- Esto lo ponemos en barras de navegación y ponemos, agregamos el section y borramos la parte de abajo --}}
@section('contenido')

<div class="container mt-5 col-md-6">
@foreach($consultarClientes as $cliente)

  <div class="card text-justify font-monospace">
    <div class="card-header fs-5 text-primary">
    {{$cliente->nombre}}
    </div>

    <div class="card-body">
        <h5 class="card-title">Correo: {{ $cliente->correo  }}</h5>
        <p class="card-text">Teléfono: {{ $cliente->telefono  }}</p>
    </div>

    <div class="card-footer text-muted">
      <button type="submit" class="btn btn-warning btn-sm">{{__('Actualizar')}}</button>
      <button type="submit" class="btn btn-danger btn-sm">{{__('Eliminar')}}</button>
    </div>
  </div>

</div>
@endforeach

@endsection
