<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;
use App\Models\DireccionEnvio;
use App\Models\Carrito;

class Invitado extends Model
{
    use HasFactory;

    //Especificaciones de nombre de la tabla y sus atributos
    protected $table = 'invitados';
    protected $fillable = ['nombre', 'email', 'telefono', 'rol'];

    public function carritos()
    {
        return $this->hasMany(Carrito::class, 'id_invitado');
    }

    public function direcciones()
    {
        return $this->hasMany(DireccionEnvio::class, 'id_invitado');
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_invitado');
    }
}
