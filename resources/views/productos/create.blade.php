<div>
<ht>Crear Nuevo Producto</h1>

<form method="POST" action="{{ route('productos.store') }}">
    @csrf
<table>
    <tr>
        <td>Nombre</td>
        <td><input type="text" name="nombre" id="nombre" required></td>
    </tr>
    <tr>
        <td>Descripcion</td>
        <td><input type="text" name="descripcion" id="descripcion" required></td>
    </tr>
    <tr>
        <td>Precio</td>
        <td><input type="number" min="0.5" max="100" step="0.1" name="precio" id="precio" required></td>
    </tr>
</table>

<button type="submit">Guardar Producto</button>

</form>


</div>
