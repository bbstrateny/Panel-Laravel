<?php

namespace App\Http\Controllers;

use App\Models\Almacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    public function index()
    {
        $almacenes = Almacen::all();
        return view('almacenes.index', compact('almacenes'));
    }

    public function create()
    {
        $almacen = new Almacen();
        $almacen->id = 0;
        return view('almacenes.create', compact('almacen'));
    }

    public function edit($id)
    {
        $almacen = Almacen::find($id);
        return view('almacenes.create', compact('almacen'));
    }

    public function store(Request $request)
    {
        if ($request->id == 0) {
            $almacen = new Almacen();
        } else {
            $almacen = Almacen::find($request->id);
        }

        $almacen->codigo = $request->codigo;
        $almacen->nombre = $request->nombre;
        
        $almacen->save();

        return redirect()->route('almacenes');
    }

    public function delete($id)
    {
        $almacen = Almacen::find($id);
        if ($almacen) {
            $almacen->delete();
        }
        return redirect()->route('almacenes');
    }
}