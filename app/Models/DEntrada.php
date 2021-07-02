<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DEntrada extends Model
{
    protected $table = 'DEntrada';
    protected $fillable = [
        "idMEntrada",
        "idMProducto",
        "fechaVencimiento",
        "precioCompra",
        "precioVenta",
        "cantidad",
        "descuento",
        "importe"
    ];


}
