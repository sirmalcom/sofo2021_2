<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DVenta extends Model
{
    use SoftDeletes;
    
    public $timestamps = false;
    protected $table = "DVenta";
    protected $fillable = [
        "idMVenta",
        "idMProducto",
        "cantidad",
        "descuento",
        "importe"
    ];
}
