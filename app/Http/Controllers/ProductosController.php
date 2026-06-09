<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $producto = new Producto();
        $producto->id = 0;
        return view('productos.create', compact('producto'));
    }

    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.create', compact('producto'));
    }

    public function store(Request $request)
    {
        if ($request->id == 0) {
            $producto = new Producto();
        } else {
            $producto = Producto::find($request->id);
        }

        $producto->codigo = $request->codigo;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->porcentaje_impuesto = $request->porcentaje_impuesto; // Agregado
        
        $producto->save();

        return redirect()->route('productos');
    }

    public function delete($id)
    {
        $producto = Producto::find($id);
        if ($producto) {
            $producto->delete();
        }
        return redirect()->route('productos');
    }
}