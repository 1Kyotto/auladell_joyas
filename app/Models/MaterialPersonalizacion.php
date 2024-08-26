<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Personalizacion;
use App\Models\Material;

class MaterialPersonalizacion extends Model
{
    use HasFactory;

    protected $table = 'materiales_personalizaciones';
    protected $fillable = ['id_personalizacion','id_material','cantidad_necesaria'];

    public function personalizacion()
    {
        return $this->belongsTo(Personalizacion::class,'id_personalizacion');
    }
    public function material()
    {
        return $this->belongsTo(Material::class,'id_material');
    }
}