<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventario = Inventario::all();
        return view('inventario.index', compact('inventario'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'Referencia_producto' => 'required|string|max:255',
        'Categoria_producto'  => 'required|string|max:255',
        'Color_producto'      => 'required|string|max:100',
        'Cantidad_producto'   => 'required|integer|min:1',
        'Ubicacion_producto'  => 'required|string|max:255',
        'Estado_producto'     => 'required|string|max:50',
    ]);

    Inventario::create($request->all());

    return redirect()->route('inventario.index')
                     ->with('success', 'Producto agregado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventario $inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventario $inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventario $inventario)
    {
        //
    }
}
