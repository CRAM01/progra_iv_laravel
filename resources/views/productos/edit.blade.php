<div>

<h1>Editar Producto</h1>

<form method="POST" action="{{ route('productos.update', $producto->id) }}">
    @csrf
    @method('PUT')
<table>
    <tr>
        <td>Nombre</td>
        <td><input type="text" name="nombre" id="nombre" value="{{ $producto -> nombre }}" required></td>
    </tr>
    <tr>
        <td>Descripcion</td>
        <td><input type="text" name="descripcion" id="descripcion" value="{{ $producto -> descripcion }}" required></td>
    </tr>
    <tr>
        <td>Precio</td>
        <td><input type="number" min="0.5" max="100" step="0.1" name="precio" id="precio" value="{{ $producto -> precio }}" required></td>
    </tr>

    <tr>
        <td>Estado</td>
        <td>
            <select name="estado" id="estado">
                @if (($producto -> estado) == 1)
                <option value="0">Inactivo</option>
                <option value="1" selected>Activo</option>
                @endif
                @if (($producto->estado)== 0)
                <option value="0" selected>Inactivo</option>
                <option value="1">Activo</option>
                @endif
            </select>
        </td>
    </tr>
</table>

<button type="submit">Guardar Edicion</button>
</form>

</div>
