<!-- resources/views/productos/create.blade.php -->
<h1>Crear Nuevo Producto</h1>
<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion"></textarea>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio">
    <label for="cantidad_stock">Cantidad en Stock:</label>
    <input type="text" name="cantidad_stock" id="cantidad_stock">
    <button type="submit">Crear Producto</button>
</form>
<h1>Crear Nuevo Producto</h1>
<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <!-- Campos del formulario -->
    <button type="submit" class="btn btn-primary">Crear Producto</button>
</form>
