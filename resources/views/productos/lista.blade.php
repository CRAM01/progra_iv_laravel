<div style="font-family: Arial, sans-serif; margin: 20px;">
    <!-- Mensaje de éxito -->
    @if(session('success'))
        <div style="color: green; font-weight: bold; margin-bottom: 10px; border: 1px solid green; padding: 10px; border-radius: 5px; background-color: #e8f5e9;">
            {{ session('success') }}
        </div>
    @endif

    <h1 style="text-align: center; color: #333;">Listado de Productos</h1>

    <!-- Botones de acción -->
    <div style="margin-bottom: 15px; text-align: center;">
        <a href="{{ route('productos.create') }}" style="text-decoration: none; background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; margin-right: 10px;">Nuevo Producto</a>
        <a href="{{ route('pedidos.index') }}" style="text-decoration: none; background-color: #007BFF; color: white; padding: 10px 20px; border-radius: 5px;">Ver Pedidos</a>
    </div>

    <!-- Tabla de productos -->
    <table style="width: 100%; border-collapse: collapse; text-align: left; background-color: #f9f9f9; margin-top: 10px;">
        <thead style="background-color: #007BFF; color: white;">
            <tr>
                <th style="padding: 10px; border: 1px solid #ddd;">Código</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Nombre</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Descripción</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Precio</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Estado</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr style="border-bottom: 1px solid #ddd;">
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $producto->id }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $producto->nombre }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $producto->descripcion }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Bs. {{ number_format($producto->precio, 2) }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <span style="color: {{ $producto->estado ? 'green' : 'red' }};">
                        {{ $producto->estado ? 'Activo' : 'Inactivo' }}
                    </span>
                </td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <!-- Botón Editar Producto -->
                    <a href="{{ route('productos.edit', $producto->id) }}" style="text-decoration: none; color: #007BFF; font-weight: bold; margin-right: 10px;">Editar</a>

                    <!-- Botón Realizar Pedido -->
                    <form action="{{ route('pedidos.store') }}" method="POST" style="display: inline-block;">
                        @csrf
                        <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                        <input type="hidden" name="cantidad" value="1">
                        <button type="submit" style="background-color: #28a745; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                            Realizar Pedido
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

