<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MEntrada extends Model
{
    protected $table = "MEntrada";
    protected $fillable = [
        "fechaEntrada",
        "numeroComprobante",
        "costoTotal",
        "idTComprobante",
        "idMUsuario",
        "idMProveedor"
    ];
}
