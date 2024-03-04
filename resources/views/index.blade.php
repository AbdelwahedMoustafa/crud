<!-- resources/views/productos/index.blade.php -->
<h1>Lista de Productos</h1>
<a href="{{ route('productos.create') }}">Crear Nuevo Producto</a>
<ul>
    @foreach ($productos as $producto)
        <li>{{ $producto->nombre }} - {{ $producto->precio }}</li>
    @endforeach
</ul>
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
