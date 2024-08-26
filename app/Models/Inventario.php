<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Material;
use App\Models\Usuario;

class Inventario extends Model
{
    use HasFactory;

    //Especificaciones de nombre de la tabla y sus atributos
    protected $table = 'inventarios';
    protected $fillable = ['id_inventario', 'id_material', 'realizado_por', 'cantidad', 'tipo_transaccion', 'fecha'];
    
    public function material(){
        return $this->belongsTo(Material::class, 'id_material');
    }

    public function realizadoPor(){
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
