<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //
    public function index(){
        $productos = Producto::all();
        return view('productos.lista',compact('productos'));
    }

    public function create(){
        return view('productos.create');
    }    

    public function store(Request $request){
        Producto::create($request->all());

        return redirect()->route('productos.index')->with('success','Producto creado!');

    }    
}
