<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;
use App\Models\Carrito;


class CarritoProducto extends Model
{
    use HasFactory;

    protected $table = 'carritos_productos';
    protected $fillable = ['id_carrito','id_producto','cantidad','precio'];

    public function producto()
    {
        return $this->belongsTo(Producto::class,'id_producto');
    }
    public function carrito()
    {
        return $this->belongsTo(Carrito::class,'id_producto');
    }
}