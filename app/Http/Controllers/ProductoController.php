<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }
    
    public function create()
    {
        return view('productos.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'cantidad_stock' => 'required|integer',
        ]);
    
        Producto::create($request->all());
    
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }
    
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('productos.show', compact('producto'));
    }
    
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.edit', compact('producto'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'cantidad_stock' => 'required|integer',
        ]);
    
        $producto = Producto::find($id);
        $producto->update($request->all());
    
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }
    
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
    
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'precio' => 'required|numeric',
        'cantidad_stock' => 'required|integer',
    ]);

    Producto::create($request->all());

    return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
}

public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'precio' => 'required|numeric',
        'cantidad_stock' => 'required|integer',
    ]);

    $producto = Producto::find($id);
    $producto->update($request->all());

    return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
}

}
