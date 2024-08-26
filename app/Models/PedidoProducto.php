<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;
use App\Models\SeleccionPersonalizacion;
use App\Models\Pedido;

class PedidoProducto extends Model
{
    use HasFactory;

    protected $table = 'pedidos_productos';
    protected $fillable = ['id_pedido','id_producto','cantidad','precio_unitario','precio_total'];

    public function producto()
    {
        return $this->belongsTo(Producto::class,'id_producto');
    }
    public function seleccionPersonalizacion()
    {
        return $this->hasMany(SeleccionPersonalizacion::class,'id_pedido_producto');
    }
    public function pedido()
    {
        return $this->belongsTo(Pedido::class,'id_pedido');
    }
}