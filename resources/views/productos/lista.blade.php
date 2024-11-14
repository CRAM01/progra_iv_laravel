<div>
<h1>Listado de Productos</h1>
<a href="{{ route('productos.create') }}" >Nuevo Producto</a>

<table>
<tr>
    <td>Codigo</td>    
    <td>Nombre</td>    
    <td>Descripcion</td>    
    <td>Precio</td>    
    <td>Estado</td>    
    <td>Edicion</td>    
</tr>
    @foreach($productos as $producto)
<tr>
    <td>{{ $producto->id }}</td>    
    <td>{{ $producto->nombre }}</td>    
    <td>{{ $producto->descripcion }}</td>    
    <td>{{ $producto->precio }}</td>    
    <td>{{ $producto->estado }}</td>    
    <td><a href="{{ route('productos.edit', $producto->id) }}">Editar Producto</a></td>    
</tr>
    @endforeach
</table>

</div>
