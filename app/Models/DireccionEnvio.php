<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;
use App\Models\Invitado;

class DireccionEnvio extends Model
{
    use HasFactory;

    protected $table = 'direcciones_envios';
    protected $fillable = ['id_usuario','id_invitado','ciudad','comuna','direccion'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class,'id_usuario');
    }
    public function invitado()
    {
        return $this->belongsTo(Invitado::class,'id_invitado');
    }
    public function pedidos()
    {
        return $this->hasMany(Pedido::class,'id_direccion');
    }
}