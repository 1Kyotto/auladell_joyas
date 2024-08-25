<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CarritoProducto;
use App\Models\PersonalizacionProducto;
use App\Models\MaterialProducto;
use App\Models\PedidoProducto;

class Producto extends Model
{
    use HasFactory;

    //Especificaciones de nombre de la tabla y sus atributos
    protected $table = 'productos';
    protected $fillable = ['nombre', 'descripcion', 'precio_base'];

    public function productosEnCarritos()
    {
        return $this->hasMany(CarritoProducto::class, 'id_producto');
    }

    public function personalizacionEnProducto()
    {
        return $this->hasMany(PersonalizacionProducto::class, 'id_producto');
    }

    public function materialesProducto()
    {
        return $this->hasMany(MaterialProducto::class, 'id_producto');
    }

    public function productosEnPedidos()
    {
        return $this->hasMany(PedidoProducto::class, 'id_producto');
    }
}
