<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;

class Pago extends Model
{
    use HasFactory;

        //Especificaciones de nombre de la tabla y sus atributos
        protected $table = 'pagos';
        protected $fillable = ['id_pedido', 'metodo_pago', 'valor', 'estado'];

        public function pedido(){
            return $this->belongsTo(Pedido::class,'id_pedido');
        }
}
