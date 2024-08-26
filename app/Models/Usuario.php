<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DireccionEnvio;
use App\Models\Carrito;
use App\Models\Pedido;
use App\Models\Inventario;


class Usuario extends Model
{
    use HasFactory;

    //Especificaciones de nombre de la tabla y sus atributos
    protected $table = 'usuarios';
    protected $fillable = ['id_contacto', 'contraseña', 'rol'];

    //Un usuario puede tener muchas direcciones de envío
    public function direcciones()
    {
        return $this->hasMany(DireccionEnvio::class, 'id_usuario');
    }

    //Un usuario puede tener muchos carritos
    public function carritos()
    {
        return $this->hasMany(Carrito::class, 'id_usuario');
    }

    //Un usuario puede hacer muchos pedidos
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_usuario');
    }

    //Un usuario Admin puede realizar muchas acciones en el inventario
    public function inventarios()
    {
        return $this->hasMany(Inventario::class, 'realizado_por');
    }

    //Contacto
    public function contacto()
    {
        return $this->hasOne(Inventario::class, 'id_usuario');
    }
}