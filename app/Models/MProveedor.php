<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MProveedor extends Model
{
    use SoftDeletes;
    
    public $timestamps = false;
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
