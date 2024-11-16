<div style="margin: 20px; font-family: Arial, sans-serif;">
    <!-- Título -->
    <h1 style="text-align: center; color: #333;">Crear Nuevo Producto</h1>

    <!-- Formulario -->
    <form method="POST" action="{{ route('productos.store') }}" style="max-width: 600px; margin: 0 auto; background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        @csrf

        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 10px; text-align: right; font-weight: bold;">Nombre:</td>
                <td style="padding: 10px;">
                    <input type="text" name="nombre" id="nombre" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; text-align: right; font-weight: bold;">Descripción:</td>
                <td style="padding: 10px;">
                    <textarea name="descripcion" id="descripcion" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; height: 100px;"></textarea>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; text-align: right; font-weight: bold;">Precio:</td>
                <td style="padding: 10px;">
                    <input type="number" min="0.5" max="100" step="0.1" name="precio" id="precio" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                </td>
            </tr>
        </table>

        <!-- Botón de guardar -->
        <div style="text-align: center; margin-top: 20px;">
            <button type="submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 4px; cursor: pointer;">
                Guardar Producto
            </button>
        </div>
    </form>
</div>

