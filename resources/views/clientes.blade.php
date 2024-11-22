@extends('layouts.plantilla1')
@section('titulo', 'clientes')

{{-- Esto lo ponemos en barras de navegación y ponemos, agregamos el section y borramos la parte de abajo --}}
@section('contenido')
@if(session('exito'))
    <div class="alert alert-success">
        {{ session('exito') }}
    </div>
@endif
@session('exito')
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: '{{ session('exito') }}',
            confirmButtonText: 'OK',
            timer: 3000
        });
    </script>
@endsession


<div class="container mt-5 col-md-6">
@foreach($consultarClientes as $cliente)

  <div class="card text-justify font-monospace">
    <div class="card-header fs-5 text-primary">
    {{$cliente->nombre}} {{ $cliente->apellido }}
    </div>

    <div class="card-body">
        <h5 class="card-title">Correo: {{ $cliente->correo  }}</h5>
        <p class="card-text">Teléfono: {{ $cliente->telefono  }}</p>
    </div>

    <div class="card-footer text-muted">
            <a href="{{ route('cliente.editar', $cliente->id) }}" class="btn btn-warning btn-sm">Actualizar</a>

            <form action="{{ route('cliente.eliminar', $cliente->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este cliente?');">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
        </div>
  </div>
@endforeach
</div>


@endsection

