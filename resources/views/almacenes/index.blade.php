@extends('adminlte::page')

@section('title', 'Lista de Almacenes')

@section('content_header')
{{ Breadcrumbs::render('almacenes') }}
    <h1>Lista de Almacenes</h1>
@stop

@section('content')
    <div class="mb-3">
        <a class="btn btn-success" href="{{ route('almacen.nuevo') }}">Crear Nuevo Almacén</a>
    </div>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($almacenes as $almacen)
            <tr>
                <th scope="row">{{ $almacen->id }}</th>
                <td>{{ $almacen->codigo }}</td>
                <td>{{ $almacen->nombre }}</td>
                <td>
                    <a href="{{ route('almacen.editar', $almacen->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    
                    <form method="POST" action="{{ route('almacen.eliminar', $almacen->id) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar almacén?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop