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
@foreach ($consulta as $cliente)

  <div class="card text-justify font-monospace">
    <div class="card-header fs-5 text-primary">
    {{$cliente->nombre}} {{ $cliente->apellido }}
    </div>

    <div class="card-body">
        <h5 class="card-title">Correo: {{ $cliente->correo  }}</h5>
        <p class="card-text">Teléfono: {{ $cliente->telefono  }}</p>
    </div>

    <div class="card-footer text-muted">
    <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-list-stars"></i> Opciones
            </button>
            <ul class="dropdown-menu">
                <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$cliente->id}}">
                    <i class="bi bi-pencil-square"></i>Editar 
                  </button>
                <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#destroy{{$cliente->id}}">
                    <i class="bi bi-trash"></i> Borrar 
                  </button>
            </ul>
          </div> 
           
        
  </div>
  
@include('options')
@endforeach
</div>


@endsection

