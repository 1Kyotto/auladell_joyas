<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;
use App\Models\Invitado;


class Carrito extends Model
{
    use HasFactory;

    //Especificaciones de nombre de la tabla y sus atributos
    protected $table = 'carritos';
    protected $fillable = ['id_carrito','id_usuario','id_invitado'];

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function invitado(){
        return $this->belongsTo(Invitado::class, 'id_invitado');
    }

    public function productosEnCarritos(){
        return $this->hasMany(CarritoProducto::class, 'id_carrito');
    }
}