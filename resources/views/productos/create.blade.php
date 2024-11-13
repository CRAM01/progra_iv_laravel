<div>
<ht>Crear Nuevo Producto</h1>

<form method="POST" action="{{ route('productos.store') }}">
    @csrf
<table>
    <td>Nombre</td>
    <td><input type="text" name="nombre" id="nombre"></td>

    <td>Descripcion</td>
    <td><input type="text" name="descripcion" id="descripcion"></td>

    <td>Precio</td>
    <td><input type="number" name="precio" id="precio"></td>

</table>

<button type="submit">Guardar Producto</button>

</form>


</div>
