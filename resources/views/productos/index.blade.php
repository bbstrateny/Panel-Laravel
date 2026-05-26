@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de productos</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <table>
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Existencias</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">id</th>
                <td>codigo</td>
                <td>descripcion</td>
                <td>precio</td>
                <td>existencias</td>
                <td>
                    <a class="btn btn-primary" href="{{route('producto.nuevo')}}">Editar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </td>

            </tr>

        </tbody>

    </table>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
