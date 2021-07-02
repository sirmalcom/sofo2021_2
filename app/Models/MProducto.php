<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MProducto extends Model
{
    protected $table = "MProducto";
    protected $fillable = [
        "idTCategoria",
        "nombre",
        "descripcion",
        "stock",
        "stockMinimo",
        "ultimoCostoCompra",
        "ultimoCostoVenta",
        "ganancia",
        "estado"
    ];
}
