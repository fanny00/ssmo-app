@extends('layouts.app')

@section('titulo')
   SSMO - Agregar Funcionario
@endsection

@section('contenido')

<form action="{{ route('funcionarios.store') }}" method="POST" novalidate >
    @csrf
    <div class="mb-3">
        <label for="rut_funcionario" class="form-label">Rut Funcionario</label>
        <input 
            type="text"
            name="rut_funcionario" 
            class="form-control @error('rut_funcionario') border-red-500 @enderror" 
            id="rut_funcionario" 
            placeholder="11111111-1"
            value="{{ old('rut_funcionario') }}"
        />
    </div>

    <div class="mb-3">
        <label for="nombre_funcionario" class="form-label">Nombre Completo</label>
        <input 
            type="text"
            name="nombre_funcionario" 
            class="form-control @error('nombre_funcionario') border-red-500 @enderror" 
            id="nombre_funcionario" 
            placeholder="Escriba su nombre aquí"
            value="{{ old('nombre_funcionario') }}"
        />
    </div>

    <div class="mb-3">
        <label for="direccion_funcionario" class="form-label">Dirección</label>
        <input 
            type="text"
            name="direccion_funcionario" 
            class="form-control @error('direccion_funcionario') border-red-500 @enderror" 
            id="direccion_funcionario" 
            placeholder="Escriba la dirección aquí"
            value="{{ old('direccion_funcionario') }}"
        />
    </div>

    <div class="mb-3">
        <label for="fecha_nacimiento_funcionario" class="form-label">Fecha de Nacieminto</label>
        <input 
            type="date"
            name="fecha_nacimiento_funcionario" 
            class="form-control @error('fecha_nacimiento_funcionario') border-red-500 @enderror" 
            id="fecha_nacimiento_funcionario" 
            value="{{ old('fecha_nacimiento_funcionario') }}"
        />
    </div>

    <div class="mb-3">
        <label for="estado_funcionario" class="form-label">Estado</label>
        
        <select 
            class="form-control @error('estado_funcionario') border-red-500 @enderror" 
            name="estado_funcionario"
            id="estado_funcionario" 
        >
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>
    </div>
 
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Agregar Funcionario</button>
      </div>
</form>



@endsection