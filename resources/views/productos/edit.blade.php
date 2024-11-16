<div style="margin: 20px; font-family: Arial, sans-serif;">
    <!-- Título -->
    <h1 style="text-align: center; color: #333;">Editar Producto</h1>

    <!-- Formulario -->
    <form method="POST" action="{{ route('productos.update', $producto->id) }}" style="max-width: 600px; margin: 0 auto; background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        @csrf
        @method('PUT')

        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 10px; text-align: right; font-weight: bold;">Nombre:</td>
                <td style="padding: 10px;">
                    <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; text-align: right; font-weight: bold;">Descripción:</td>
                <td style="padding: 10px;">
                    <textarea name="descripcion" id="descripcion" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; height: 100px;">{{ $producto->descripcion }}</textarea>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; text-align: right; font-weight: bold;">Precio:</td>
                <td style="padding: 10px;">
                    <input type="number" min="0.5" max="100" step="0.1" name="precio" id="precio" value="{{ $producto->precio }}" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; text-align: right; font-weight: bold;">Estado:</td>
                <td style="padding: 10px;">
                    <select name="estado" id="estado" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                        <option value="1" {{ $producto->estado == 1 ? 'selected' : '' }}>Activo</option>
                        <option value="0" {{ $producto->estado == 0 ? 'selected' : '' }}>Inactivo</option>
                    </select>
                </td>
            </tr>
        </table>

        <!-- Botón de guardar -->
        <div style="text-align: center; margin-top: 20px;">
            <button type="submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 4px; cursor: pointer;">
                Guardar Edición
            </button>
        </div>
    </form>
</div>
