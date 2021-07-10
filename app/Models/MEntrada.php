<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MEntrada extends Model
{
    use SoftDeletes;
    
    public $timestamps = false;
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
