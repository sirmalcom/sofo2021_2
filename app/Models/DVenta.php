<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DVenta extends Model
{
    protected $table = "DVenta";
    protected $fillable = [
        "idMVenta",
        "idMProducto",
        "cantidad",
        "descuento",
        "importe"
    ];
}
