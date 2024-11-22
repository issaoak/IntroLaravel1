@extends('layouts.plantilla1')

@section('contenido')
<div class="container mt-5">
    <h2>Editar Cliente</h2>
    <form action="{{ route('cliente.actualizar', $cliente->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="txtnombre" value="{{ $cliente->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="txtapellido" value="{{ $cliente->apellido }}" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" name="txtcorreo" value="{{ $cliente->correo }}" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="txttelefono" value="{{ $cliente->telefono }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
