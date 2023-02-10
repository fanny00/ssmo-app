@extends('layouts.app')

@section('titulo')
   SSMO - Funcionarios
@endsection

@section('contenido')
   
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Rut</th>
            <th scope="col">Nombre</th>
            <th scope="col">Dirección</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Estado</th>
        </tr>
        </thead>
        <tbody>
            <h2>Funcionarios Activos</h2>
            @foreach ($funcionarios as $funcionario)
                <tr>
                    @if ($funcionario->estado_funcionario === 1)
                        <td>{{ $funcionario->rut_funcionario }}</td>
                        <td>{{ $funcionario->nombre_funcionario }}</td>
                        <td>{{ $funcionario->direccion_funcionario }}</td>
                        <td>{{ $funcionario->fecha_nacimiento_funcionario }}</td> 
                        <td>{{ $funcionario->estado_funcionario }}</td>
                    @endif
                    
                </tr>
            @endforeach

        </tbody>
    </table>
    <h2>Funcionarios Inactivos</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Estado</th>
                <th scope="col">Cantidad de letras</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
                <tr>
                    @if ($funcionario->estado_funcionario === 0)
                        <td>{{ $funcionario->nombre_funcionario }}</td>
                        <td>{{ $funcionario->estado_funcionario }}</td>
                        <td>{{ Str::length($funcionario->nombre_funcionario) }}</td>
                    @endif
                    
                </tr>
            @endforeach

        </tbody>
    </table>

    <h2>Funcionarios Mayores de  30 años</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Rut</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($funcionarios as $funcionario)
                <tr>
                    @if ( $funcionario->fecha_nacimiento_funcionario < (now()->year)-30 )
                        <td>{{ $funcionario->rut_funcionario }}</td>
                        <td>{{ $funcionario->nombre_funcionario }}</td>
                        <td>{{ $funcionario->direccion_funcionario }}</td>
                    @endif
                    
                </tr>
            @endforeach

        </tbody>
    </table>
  

@endsection