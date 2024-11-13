<div>
<h1>Listado de Productos</h1>

<table>
<tr>
    <td>Nombre</td>    
    <td>Descripcion</td>    
    <td>Precio</td>    
    <td>Estado</td>    
</tr>
    @foreach($productos as $producto)
<tr>
    <td>{{ $producto.nombre }}</td>    
    <td>{{ $producto.descripcion }}</td>    
    <td>{{ $producto.precio }}</td>    
    <td>{{ $producto.estado }}</td>    
</tr>
    @endforeach
</table>

</div>
