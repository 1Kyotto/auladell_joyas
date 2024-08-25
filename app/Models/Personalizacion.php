<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SeleccionPersonalizacion;
use App\Models\MaterialPersonalizacion;
use App\Models\PersonalizacionProducto;

class Personalizacion extends Model
{
    use HasFactory;

    //Especificaciones de nombre de la tabla y sus atributos
    protected $table = 'personalizaciones';
    protected $fillable = ['nombre', 'descripcion', 'costo_adicional'];

    public function seleccionesPersonalizaciones()
    {
        return $this->hasMany(SeleccionPersonalizacion::class, 'id_personalizacion');
    }

    public function materialesEnPersonalizacion()
    {
        return $this->hasMany(MaterialPersonalizacion::class, 'id_personalizacion');
    }

    public function personalizacionesEnProductos()
    {
        return $this->hasMany(PersonalizacionProducto::class, 'id_personalizacion');
    }
}
