<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Personalizacion;
use App\Models\PedidoProducto;

class SeleccionPersonalizacion extends Model
{
    use HasFactory;
  
    protected $table = 'selecciones_personalizaciones';
    protected $fillable = ['id_personalizacion','id_pedido_producto','cantidad'];

    public function personalizacion()
    {
        return $this->belongsTo(Personalizacion::class,'id_personalizacion');
    }
    public function productoEnPedido()
    {
        return $this->belongsTo(PedidoProducto::class,'id_pedido_producto');
    }
}