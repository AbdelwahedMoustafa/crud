<!-- resources/views/productos/show.blade.php -->
<h1>Detalles del Producto</h1>
<p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
<p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
<p><strong>Precio:</strong> {{ $producto->precio }}</p>
<p><strong>Cantidad en Stock:</strong> {{ $producto->cantidad_stock }}</p>
<p><a href="{{ route('productos.edit', $producto->id) }}">Editar</a></p>
<p>
    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</p>
<h1>Detalles del Producto</h1>
<!-- Mostrar detalles del producto -->
<p><a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">Editar</a></p>
