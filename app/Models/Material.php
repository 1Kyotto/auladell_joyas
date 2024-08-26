<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventario;
use App\Models\MaterialPersonalizacion;
use App\Models\MaterialProducto;


class Material extends Model
{
    use HasFactory;

    //Especificaciones de nombre de la tabla y sus atributos
    protected $table = 'materiales';
    protected $fillable = ['nombre', 'descripcion', 'unidad', 'precio_por_unidad', 'cantidad_en_stock'];
    
    public function inventarios(){
        return $this->hasMany(Inventario::class, 'id_material');
    }

    public function materialesPersonalizaciones(){
        return $this->hasMany(MaterialPersonalizacion::class, 'id_material');
        
    }

    public function materialesProductos(){
        return $this->hasMany(MaterialProducto::class, 'id_material');
        
    }
}
