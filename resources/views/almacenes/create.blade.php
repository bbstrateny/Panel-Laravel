@extends('adminlte::page')

@section('title', 'Almacén')

@section('content_header')

 <div class="container my-3">
    @if($almacen->id > 0)
        {{ Breadcrumbs::render('almacen.editar', $almacen) }}
    @else
        {{ Breadcrumbs::render('almacen.nuevo') }}
    @endif
</div>
    <h1>{{ $almacen->id == 0 ? 'Nuevo Almacén' : 'Editar Almacén' }}</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Datos del Almacén</h3>
            </div>
            
            <form action="{{ route('almacenes.guardar') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $almacen->id }}">
                
                <div class="card-body">
                    <div class="form-group">
                        <label for="codigo">Código del Almacén</label>
                        <input type="text" class="form-control" name="codigo" value="{{ $almacen->codigo }}" required>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="{{ $almacen->nombre }}" required>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar Almacén</button>
                    <a href="{{ route('almacenes') }}" class="btn btn-default float-right">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop