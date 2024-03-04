<!-- resources/views/productos/edit.blade.php -->
<h1>Editar Producto</h1>
<form action="{{ route('productos.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}">
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion">{{ $producto->descripcion }}</textarea>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio" value="{{ $producto->precio }}">
    <label for="cantidad_stock">Cantidad en Stock:</label>
    <input type="text" name="cantidad_stock" id="cantidad_stock" value="{{ $producto->cantidad_stock }}">
    <button type="submit">Actualizar Producto</button>
</form>
<h1>Editar Producto</h1>
<form action="{{ route('productos.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Campos del formulario con valores actuales -->
    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
</form>
