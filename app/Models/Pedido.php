<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invitado;
use App\Models\Usuario;
use App\Models\DireccionEnvio;
use App\Models\Pago;
use App\Models\PedidoProducto;

class Pedido extends Model
{
    use HasFactory;

    //Especificaciones de nombre de la tabla y sus atributos
    protected $table = 'pedidos';
    protected $fillable = ['id_invitado', 'id_usuario', 'id_direccion', 'total', 'estado'];

    public function invitado(){
        return $this->belongsTo(Invitado::class, 'id_invitado');
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function direccion(){
        return $this->belongsTo(DireccionEnvio::class, 'id_direccion');
    }

    public function pago(){
        return $this->hasOne(Pago::class,'id_pedido');
    }

    public function productosEnPedidos(){
        return $this->hasMany(PedidoProducto::class, 'id_pedido');
    }

}
