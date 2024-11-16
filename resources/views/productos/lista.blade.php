<div>
    <!-- Mensaje de éxito -->
    @if(session('success'))
        <div style="color: green; font-weight: bold; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <h1>Listado de Productos UPDS</h1>

    <!-- Botones de acción -->
    <a href="{{ route('productos.create') }}">Nuevo Producto</a>
    <a href="{{ route('pedidos.index') }}" style="margin-left: 15px;">Ver Pedidos</a>

    <table>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->estado ? 'Activo' : 'Inactivo' }}</td>
            <td>
                <!-- Botón Editar Producto -->
                <a href="{{ route('productos.edit', $producto->id) }}">Editar Producto</a>

                <!-- Botón Realizar Pedido -->
                <form action="{{ route('pedidos.store') }}" method="POST" style="display: inline-block;">
                    @csrf
                    <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                    <input type="hidden" name="cantidad" value="1"> <!-- Valor predeterminado -->
                    <button type="submit">Realizar Pedido</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>


