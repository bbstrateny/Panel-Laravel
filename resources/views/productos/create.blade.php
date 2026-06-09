@extends('adminlte::page')

@section('title', 'Producto')

@section('content_header')
    <div class="container my-3">
    @if($producto->id > 0)
        {{ Breadcrumbs::render('producto.editar', $producto) }}
    @else
        {{ Breadcrumbs::render('producto.nuevo') }}
    @endif
</div>
    <h1>{{ $producto->id == 0 ? 'Nuevo Producto' : 'Editar Producto' }}</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Datos del Producto</h3>
            </div>
            
            <form action="{{ route('productos.guardar') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $producto->id }}">
                
                <div class="card-body">
                    <div class="form-group">
                        <label for="codigo">Código del Producto</label>
                        <input type="text" class="form-control" name="codigo" value="{{ $producto->codigo }}" required>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" value="{{ $producto->descripcion }}" required>
                    </div>

                    <div class="form-group">
                        <label>Precio</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                            <input type="number" step="0.01" class="form-control" name="precio" value="{{ $producto->precio }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="porcentaje_impuesto">% Impuesto</label>
                        <div class="input-group">
                            <input type="number" step="0.01" class="form-control" name="porcentaje_impuesto" value="{{ $producto->porcentaje_impuesto }}" required>
                            <div class="input-group-append">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar Producto</button>
                    <a href="{{ route('productos') }}" class="btn btn-default float-right">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop