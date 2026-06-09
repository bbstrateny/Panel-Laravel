@extends('adminlte::page')

@section('title', 'Lista de Productos')

@section('content_header')
    {{ Breadcrumbs::render('productos') }}
    <h1>Lista de productos</h1>
@stop

@section('content')
    <div class="mb-3">
        <a class="btn btn-success" href="{{ route('producto.nuevo') }}">Crear Nuevo Producto</a>
    </div>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">% Impuesto</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <th scope="row">{{ $producto->id }}</th>
            <td>{{ $producto->codigo }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>${{ number_format($producto->precio, 2) }}</td>
            <td>{{ $producto->porcentaje_impuesto }}%</td>
            <td>
                <a href="{{ route('producto.editar', $producto->id) }}" class="btn btn-primary btn-sm">Editar</a>
                
                <form method="POST" action="{{ route('producto.eliminar', $producto->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop