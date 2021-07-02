<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCliente extends Model
{
    protected $table = "MCliente";
    protected $fillable = [
        "nombre",
        "idTDocumento",
        "numeroDocumento",
        "direccion",
        "estado"
    ];
}
