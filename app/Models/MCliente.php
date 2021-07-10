<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MCliente extends Model
{
    use SoftDeletes;
    
    public $timestamps = false;
    protected $table = "MCliente";
    protected $fillable = [
        "nombre",
        "idTDocumento",
        "numeroDocumento",
        "direccion"
    ];
}
