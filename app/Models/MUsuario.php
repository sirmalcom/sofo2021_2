<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MUsuario extends Model
{
    protected $table = "MUsuario";
    protected $fillable = [
        "usuario",
        "clave",
        "idTCargo",
        "estado"
    ];
}
