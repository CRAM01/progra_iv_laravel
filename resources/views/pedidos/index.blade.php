<div style="font-family: Arial, sans-serif; margin: 20px;">
    <!-- Mensaje de éxito -->
    @if(session('success'))
        <div style="color: green; font-weight: bold; margin-bottom: 10px; border: 1px solid green; padding: 10px; border-radius: 5px; background-color: #e8f5e9;">
            {{ session('success') }}
        </div>
    @endif

    <h1 style="text-align: center; color: #333;">Listado de Pedidos</h1>

    <!-- Botón para regresar a productos -->
    <div style="margin-bottom: 15px; text-align: center;">
        <a href="{{ route('productos.index') }}" style="text-decoration: none; background-color: #007BFF; color: white; padding: 10px 20px; border-radius: 5px;">Volver a Productos</a>
    </div>

    <!-- Tabla de pedidos -->
    <table style="width: 100%; border-collapse: collapse; text-align: left; background-color: #f9f9f9; margin-top: 10px;">
        <thead style="background-color: #007BFF; color: white;">
            <tr>
                <th style="padding: 10px; border: 1px solid #ddd;">ID Pedido</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Producto</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Cantidad</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Hora del Pedido</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
            <tr style="border-bottom: 1px solid #ddd;">
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $pedido->id }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $pedido->producto->nombre }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $pedido->cantidad }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $pedido->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

