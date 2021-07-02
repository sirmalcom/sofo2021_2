<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MVenta extends Model
{
    protected $table = "MVenta";
    protected $fillable = [
        "fechaVenta",
        "numeroSerie",
        "subtotal",
        "total",
        "ganancia",
        "estado",
        "idTComprobante",
        "idMCliente",
        "idMUsuario"
    ];
}
