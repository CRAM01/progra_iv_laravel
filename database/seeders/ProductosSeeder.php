<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $productos = [
            [
                'nombre'=>'Coca Cola 1/2 litro',
                'descripcion'=>'Bebida gasificada provee Embol',
                'precio'=>5.5,
                'estado'=>true,
            ],
            [
                'nombre'=>'Helado Rocky',
                'descripcion'=>'Helados Delizia',
                'precio'=>3.5,
                'estado'=>true,
            ],
        ];
        foreach ($productos as $producto){
            \App\Models\Producto::create($producto);
        }
    }
}
