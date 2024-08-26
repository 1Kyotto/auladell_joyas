<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Material;
use App\Models\Producto;

class MaterialProducto extends Model
{
    use HasFactory;

    protected $table = 'materiales_productos';
    protected $fillable = ['id_producto','id_material','cantidad_necesaria'];

    public function material()
    {
        return $this->belongsTo(Material::class,'id_material');
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class,'id_producto');
    }
}
