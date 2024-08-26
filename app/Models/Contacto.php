<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invitado;
use App\Models\Usuario;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contactos';
    protected $fillable = ['nombre','email','telefono'];

    public function invitados(){
        return $this->hasMany(Invitado::class,'id_contacto');
    }
    public function usuarios(){
        return $this->belongsTo(Usuario::class,'id_usuario');
    }
}
