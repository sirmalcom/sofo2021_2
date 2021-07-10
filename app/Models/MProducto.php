<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MProducto extends Model
{
    use SoftDeletes;
    
    public $timestamps = false;
    protected $table = "MProducto";
    protected $fillable = [
        "idTCategoria",
        "nombre",
        "descripcion",
        "stock",
        "stockMinimo",
        "ultimoCostoCompra",
        "ultimoCostoVenta",
        "ganancia"
    ];
}
