<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;
use App\Models\Personalizacion;

class PersonalizacionProducto extends Model
{
    use HasFactory;

    protected $table = 'personalizaciones_productos';
    protected $fillable = ['id_personalizacion','id_producto'];

    public function producto()
    {
        return $this->belongsTo(Producto::class,'id_producto');
    }
    public function personalizacion()
    {
        return $this->belongsTo(Personalizacion::class,'id_personalizacion');
    }
}