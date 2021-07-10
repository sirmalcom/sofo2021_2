<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MVenta extends Model
{
    
    use SoftDeletes;
    
    public $timestamps = false;
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
