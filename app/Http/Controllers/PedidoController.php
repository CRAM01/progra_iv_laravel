<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::with('producto')->get();
        return view('pedidos.index', compact('pedidos'));
    }

    public function store(Request $request)
{
    $request->validate([
        'producto_id' => 'required|exists:productos,id',
        'cantidad' => 'required|integer|min:1',
    ]);

    Pedido::create($request->all());

    // Redirigir con mensaje de éxito
    return redirect()->route('productos.index')->with('success', 'Pedido realizado correctamente.');
}

}