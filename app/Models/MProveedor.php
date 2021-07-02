<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MProveedor extends Model
{
    protected $table = "MProveedor";
    protected $fillable=[
        "nombre",
        "idTDocumento",
        "numeroDocumento",
        "representante",
        "direccion",
        "telefono",
        "estado"
    ];
}
